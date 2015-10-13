var projectTitles = jQuery('li.project');

var $longAboutTrigger = jQuery('#long-about-trigger');

var $words = jQuery('li.animate');
var $posts = jQuery('#posts');
var $carousel = jQuery('#carousel');
var $films = jQuery('#films');
var $brandedModal = jQuery('#branded-modal');

var wh = jQuery(window).height();
var $main = jQuery('#main-content');

function stickyFooter(wh) {
  $main.css('min-height', (wh - 170) + 'px');
}

jQuery(window).resize(function() {
  wh = jQuery(window).height();
  stickyFooter(wh);
});

if ($posts.length) {
  enquire.register("screen and (max-width:1240px)", {
    match: function() {
      $posts.masonry('layout');
    },

    unmatch: function() {
      $posts.masonry('layout');
    },
  });
  enquire.register("screen and (max-width:1440px)", {
    match: function() {
      $posts.masonry('layout');
    },

    unmatch: function() {
      $posts.masonry('layout');
    },
  });
  enquire.register("screen and (min-width:2140px)", {
    match: function() {
      $posts.masonry('layout');
    },

    unmatch: function() {
      $posts.masonry('layout');
    },
  });
}

jQuery(document).ready(function() {

  /mobile/i.test(navigator.userAgent) && !window.location.hash && setTimeout(function() {
    window.scrollTo(0, 1);
  }, 0);

  stickyFooter(wh);

  if (!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  }

  if (projectTitles.length) {
    projectTitles.on({
      click: function(e) {
        if (e.target.innerHTML !== 'READ ON...') {
          var t = $(this).children('div.project-pop').first();

          if (t.css('display') === 'none') {
            t.css('display', 'inline-block');
          } else {
            t.hide();
          }
        }
      },
    });
  }

  if ($longAboutTrigger.length) {

    var $longAbout = $('#long-about');

    $longAboutTrigger.on({
      click: function() {
        $longAbout.slideToggle();
      },
    });
  }

  if ($words.length) {
    var s = $.shuffle($words);

    setTimeout(function() {

      var l = s.length;

      s.each(function(i, el) {
        setTimeout(function() {
          $(el).addClass('show');
        }, 10 + (i * 150));
      });

      setTimeout(function() {
        $('#animation-suf').addClass('show');
      }, 10 + (l * 150));

    }, 400);
  }

  if ($posts.length) {
    $posts.imagesLoaded(function() {
      $posts.masonry({
        transitionDuration: 0,
      });
    });

    $('a.more-link').click(function(e) {
      e.preventDefault();
      var t = $(this).closest('div.post-copy');

      t.children('div.post-copy-$main').hide();
      t.children('div.post-copy-full').show();

      $posts.masonry('layout');
    });
  }

  if ($films.length) {
    var $film$posts = $('article.film');
    var $filmFilters = $('#films-filter li');

    $('article.film[data-bg]').each(function() {
      $(this).css('background-image', 'url(' + $(this).data('bg') + ')');
    });

    $filmFilters.on({
      click: function() {
        var d = $(this).data('target');

        if (d === 'all') {
          $film$posts.show();
          $filmFilters.removeClass('current');
        } else {
          $film$posts.hide();
          $('article.category-' + d).show();
          $filmFilters.removeClass('current');
          $(this).addClass('current');
        }

        $films.ScrollTo();
      },
    });
  }

  if ($carousel.length) {
    $carousel.superslides({
      inherit_height_from: '#films-carousel',
      pagination: false,
      play: 5500,
    });

    var $holders = $('#carousel .held');

    $carousel.on({
      'init.slides': function() {
        $carousel.css('opacity', 1);
      },

      'animating.slides': function() {
        $holders.css('opacity', 0);
      },

      'animated.slides': function() {
        setTimeout(function() {
          $holders.css('opacity', 1);
        }, 800);
      },
    });
  }

  if ($brandedModal.length) {

    var BrandedModal = {
      self: $brandedModal,
      player: null,
      nowPlaying: 0,
      $playlist: $('.branded'),
      playlistLength: ($('.branded').length - 1),
      vimeoContainer: $('#branded-modal-video-wrapper'),
      titleContainer: $('#branded-modal-title'),

      loadVimeo: function($element) {
        var _this = this;
        var data = $element.data();

        _this.self.show();
        _this.nowPlaying = $element.index();
        _this.vimeoContainer.html('<iframe id="branded-modal-vimeo" width="100%" height="100%" src="//player.vimeo.com/video/' + data.vimeo + '?api=1&autoplay=1&badge=0&byline=0&portrait=0&player_id=branded-modal-vimeo" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
        _this.titleContainer.html(data.title);

        _this.player = $f($('#branded-modal-vimeo')[0]);
        _this.player.addEvent('ready', function() {
          _this.player.addEvent('finish', function() {
            BrandedModal.next();
          });
        });

      },

      next: function() {
        var _this = this;
        var $active = _this.$playlist.eq(_this.nowPlaying);

        if (_this.nowPlaying === _this.playlistLength) {
          _this.loadVimeo(_this.$playlist.eq(0));
        } else {
          _this.loadVimeo(_this.$playlist.eq(_this.nowPlaying + 1));
        }

      },

      prev: function() {
        var _this = this;
        var $active = _this.$playlist.eq(_this.nowPlaying);

        if (_this.nowPlaying === 0) {
          _this.loadVimeo(_this.$playlist.eq(_this.playlistLength));
        } else {
          _this.loadVimeo(_this.$playlist.eq(_this.nowPlaying - 1));
        }

      },

      close: function() {
        this.vimeoContainer.html('');
        this.self.hide();
      },
    };

    jQuery('.js-branded-overlay-trigger').on({
      click: function(e) {
        e.preventDefault();

        BrandedModal.loadVimeo($(this).closest('.branded'));
      },
    });

    jQuery('#branded-modal-nav-next').on({
      click: function(e) {
        e.preventDefault();

        BrandedModal.next();
      },
    });

    jQuery('#branded-modal-nav-prev').on({
      click: function(e) {
        e.preventDefault();

        BrandedModal.prev();
      },
    });

    jQuery('#branded-modal-close').on({
      click: function(e) {
        e.preventDefault();

        BrandedModal.close();
      },
    });

  }

  /* footer drawers */
  var $footerDrawers = $('.footer-meta-drawer');
  var $metaTriggers = $('.meta-drawer-trigger');

  $('#credits-trigger').on({
    click: function() {
      var $t = $(this);

      $footerDrawers.slideUp();

      if (!$t.data('active')) {
        $('#footer-meta-drawer-credits').slideDown(null, function() {
          window.scrollBy(0, $('#footer-meta-drawer-credits').height() + 45);
        });

        $t.data('active', true);
      } else {
        $metaTriggers.data('active', false);
      }
    },
  });
  $('#terms-trigger').on({
    click: function() {
      var $t = $(this);

      $footerDrawers.slideUp();

      if (!$t.data('active')) {
        $('#footer-meta-drawer-terms').slideDown(null, function() {
          window.scrollBy(0, $('#footer-meta-drawer-terms').height() + 45);
        });

        $t.data('active', true);
      } else {
        $metaTriggers.data('active', false);
      }
    },
  });

});