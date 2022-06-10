jQuery( function($){
    $(".js-sideopen").on("click",function(){    //メニューボタンを押すとサイドバーが出てくる
        $(".l-sidebar").toggleClass("is-open");
        $(".c-layer__sidebar").toggleClass("is-open");
        $(".c-layer__container").toggleClass("is-open");
        $("body").toggleClass("is-open");
    });

    $(".js-sideclose").on("click",function(){    // ☓ボダンを押すとサイドバーが戻る
        $(".l-sidebar").toggleClass("is-open");
        $(".c-layer__sidebar").toggleClass("is-open");
        $(".c-layer__container").toggleClass("is-open");
        $("body").toggleClass("is-open");
    });

    const Windowsize = window.matchMedia('(min-width: 1025px)'); 
    // ページが読み込まれた時に実行
    handle(Windowsize);
    // ウィンドウサイズを変更しても実行（ブレイクポイントの監視）
    Windowsize.addListener(handle);
    function handle(mm) {
      if (mm.matches) {
          console.log("テスト");
        $(".l-sidebar").removeClass("is-open");
        $(".c-layer__sidebar").removeClass("is-open");
        $(".c-layer__container").removeClass("is-open");
        $("body").removeClass("is-open");
      }
    }
});
