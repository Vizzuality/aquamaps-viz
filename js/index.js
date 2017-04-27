$( window ).load(function() {
  procedurePaginators = $('.procedure .paging li');
  procedureSelect = $('.procedure .js_select');
  procedureSliders = [];
  procedurePics = $('.procedure .js_pic_slide');
  modal = $('.c-show-pic-modal');

  procedurePaginators.on('click', function () {
    changeProcedurePage($(this).data('value'));
  });

  procedureSelect.on('change', function () {
    changeProcedureSpecie(this.value);
  });

  procedurePics.on('click', function () {
    loadPicModal($(this).data('id'), $(this).data('pic-url'), $(this).data('pic-name'));
    showModal();
  });

  modal.find('.js_next_pic').on('click', function () {
    nextModal();
  });

  modal.find('.js_prev_pic').on('click', function () {
    prevModal();
  });

  $('.js_show_pic_modal_close').on('click', hideModal);
});

function changeProcedureSpecie (specieId) {
  var slider = $('.js_slider[data-specie-id="' + specieId + '"]');
  slider.addClass('-selected');
  slider.siblings('.js_slider').removeClass('-selected');
  loadProcedureSlider(specieId);
}

function loadProcedureSlider (specieId) {
  var slider = $('.procedure .js_slider[data-specie-id="' + specieId + '"]');
  if (slider.find('.slide').length > 2) {
      lory(slider, {});
  }
}

function loadPicModal (picId, picUrl, picName) {
  modal.find('.js_pic_id').val(picId);
  modal.find('.js_show_pic').css("background-image", "url('" + picUrl + "')");
  modal.find('.js_show_name').html(picName);
  if (picName === "") {
      modal.addClass("-no-legend");
  } else {
      modal.removeClass("-no-legend");
  }
}

function showModal () {
  modal.removeClass('is-hidden');
}

function hideModal () {
  modal.addClass('is-hidden');
}

function nextModal () {
  var currentPictureId = modal.find('.js_pic_id').val();
  var pic = $('.js_pic_slide[data-id="' + currentPictureId + '"]');

  var next = pic.parent().next().find('.js_pic_slide');
  if (next.length === 0) {
    next = pic.parent().parent().children().first().find('.js_pic_slide');
  }

  loadPicModal(next.data('id'), next.data('pic-url'), next.data('pic-name'));
}

function prevModal () {
  var currentPictureId = modal.find('.js_pic_id').val();
  var pic = $('.js_pic_slide[data-id="' + currentPictureId + '"]');

  var prev = pic.parent().prev().find('.js_pic_slide');
  if (prev.length === 0) {
    prev = pic.parent().parent().children().last().find('.js_pic_slide');
  }

  loadPicModal(prev.data('id'), prev.data('pic-url'), prev.data('pic-name'));
}

function changeProcedurePage (page) {
  var selectedPage = $('.procedure[data-page="' + page + '"]')

  selectedPage.removeClass('is-hidden');
  $('.procedure:not([data-page="' + page + '"])').addClass('is-hidden');

  loadProcedureSlider(selectedPage.find('.js_slider:first').data('specie-id'));
}

function goTo (sectionId) {
  var offsetTop = $('#' + sectionId).offset().top;
  $('html, body').animate({
      scrollTop: offsetTop
  }, 500);
}
