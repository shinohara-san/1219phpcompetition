(function () {
  'use strict';

  const select_year = document.getElementById('select_year');
  const select_month = document.getElementById('select_month');
  const select_day = document.getElementById('select_day');
  let i;

  function $set_year() {
    // 年を生成(100年分)
    for (i = 2019; i > 1899; i--) {
      let op = document.createElement('option');
      op.value = i;
      op.text = i;
      select_year.appendChild(op);
    }
  }
  function $set_month() {
    // 月を生成(12)
    for (i = 1; i <= 12; i++) {
      let op = document.createElement('option');
      op.value = i;
      op.text = i;
      select_month.appendChild(op);
    }
  }

  function $set_day() {
    //日の選択肢を空にする
    let children = select_day.children
    while (children.length) {
      children[0].remove()
    }
    // 日を生成(動的に変える)
    if (select_year.value !== '' && select_month.value !== '') {
      const last_day = new Date(select_year.value, select_month.value, 0).getDate()

      for (i = 1; i <= last_day; i++) {
        let op = document.createElement('option');
        op.value = i;
        op.text = i;
        select_day.appendChild(op);
      }
    }
  }

  // load時、年月変更時に実行する
  window.onload = function () {
    $set_year();
    $set_month();
    $set_day();
    select_year.addEventListener('change', $set_day)
    select_month.addEventListener('change', $set_day)
  }


  // ---------------------------------------------------
  
  $('.section_input').children('input').on('focus', function () {
    $(this).css('border', '1px solid blue');
  }).on('blur', function () {
    if ($(this).val() == '') {
      $(this).css('border', '1px solid red');

      // $('.nickname_alert').slideDown();
      // console.log($(this).next());
      $(this).next().slideDown();
      
    } else {
      $(this).css('border', '1px solid darkgray');
      // $(this).next('alert').slideUp()
      // $('.nickname_alert').slideUp();
      $(this).next().slideUp();
    }
  });

  $('.birthday_wrapper').children().on('focus', function () {
    $(this).css('border', '1px solid blue');
    // console.log($('.birthday_wrapper').children().eq(2).val());
  }).on('blur', function () {
    
    // console.log($(this).parent().children().eq(0).val());
    // for (let i = 0; i < $(this).parent().children().length; i += 2) {
      // console.log($(this).val());
      if ($(this).val() == "--") {
        // $(this).css('border', '1px solid darkgray');
        // $(this).parent().next().slideUp();
        $(this).css('border', '1px solid red');
        $(this).parent().next().slideDown();
      } else {
        // $(this).css('border', '1px solid red');
        // $(this).parent().next().slideDown();
        $(this).css('border', '1px solid darkgray');
        $(this).parent().next().slideUp();
        
      }
    // console.log($(this).val());
    // console.log($(this).val());
      // if ($(this).parent().children().eq(2).val() == "--") {
      //   // $(this).css('border', '1px solid darkgray');
      //   // $(this).parent().next().slideUp();
      //   $(this).css('border', '1px solid red');
      //   $(this).parent().next().slideDown();
      // } else {
      //   // $(this).css('border', '1px solid red');
      //   // $(this).parent().next().slideDown();
      //   $(this).css('border', '1px solid darkgray');
      //   $(this).parent().next().slideUp();
        
      // }
      // if ($(this).parent().children().eq(4).val() == "--") {
      //   // $(this).css('border', '1px solid darkgray');
      //   // $(this).parent().next().slideUp();
      //   $(this).css('border', '1px solid red');
      //   $(this).parent().next().slideDown();
      // } else {
      //   // $(this).css('border', '1px solid red');
      //   // $(this).parent().next().slideDown();
      //   $(this).css('border', '1px solid darkgray');
      //   $(this).parent().next().slideUp();
        
      // }
    // }
  //   for (let i = 0; i < $(this).parent().children().length; i += 2){
  //     if ($('.birthday_wrapper').children().eq(i).val('')) {
  //       $(this).css('border', '1px solid red');
  //       $(this).parent().next().slideDown();
  //     } else {
  //     $(this).css('border', '1px solid darkgray');    
  //     $(this).parent().next().slideUp();
  //   }
  // }
    // } else {
   
    // }
    // if ($('.birthday_wrapper').children().eq(4).val() == '--') {
    //   $(this).css('border', '1px solid red');
    //   $(this).parent().next().slideDown();
      
   

    
  });
  
  // -----------------------------------------------------------

  const pwd = document.getElementById('password');
  const pwdCheck = document.getElementById('password-check');
  pwdCheck.addEventListener('change', function () {
    if (pwdCheck.checked) {
      pwd.setAttribute('type', 'text');
    } else {
      pwd.setAttribute('type', 'password');
    }
  }, false);



  }) ();