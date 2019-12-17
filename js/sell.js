$('.category_select').on('focus', function () {
  $(this).css('border', '1px solid blue');
  // $(this).addClass('blue_border');
}).on('blur', function () {
  $(this).css('border', '1px solid darkgray');
});

$('.condition_select').on('focus', function () {
  $(this).css('border', '1px solid blue');
  // $(this).addClass('blue_border');
}).on('blur', function () {
  $(this).css('border', '1px solid darkgray');
});

$('.price_input_input').on('focus', function () {
  $(this).css('border', '1px solid blue');
  // $(this).addClass('blue_border');
}).on('blur', function () {
  $(this).css('border', '1px solid darkgray');
});




$('.price_input_input').on('change', function () {
  let price = $('.price_input_input').val();
  if (price < 300) {
    return;
  }
  // console.log(price);
  let profit = $('.transaction_fee').text(price * 0.1);
  profit = (profit[0].textContent);
  $('.profit').text(price - profit);
});


$('#upfile').change(function () {
  console.log('ok');
  if (this.files.length > 0) {
    // 選択されたファイル情報を取得
    var file = this.files[0];

    // readerのresultプロパティに、データURLとしてエンコードされたファイルデータを格納
    var reader = new FileReader();
    reader.readAsDataURL(file);
    $('.show').removeClass('hidden');
    reader.onload = function () {
      $('#thumbnail').attr('src', reader.result);
    }
  }
});

