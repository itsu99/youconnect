// main.js

document.addEventListener('DOMContentLoaded', function() {
    console.log('サイト読み込み完了');

    // トップに戻るボタン作成
    const backToTop = document.createElement('button');
    backToTop.textContent = '↑トップへ';
    backToTop.id = 'backToTop';
    backToTop.style.position = 'fixed';
    backToTop.style.bottom = '20px';
    backToTop.style.right = '20px';
    backToTop.style.padding = '10px 15px';
    backToTop.style.backgroundColor = '#0072bc';
    backToTop.style.color = '#fff';
    backToTop.style.border = 'none';
    backToTop.style.borderRadius = '5px';
    backToTop.style.cursor = 'pointer';
    backToTop.style.display = 'none';
    document.body.appendChild(backToTop);

    // ボタンクリックでスクロールトップ
    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // スクロールでボタン表示
    window.addEventListener('scroll', () => {
        if(window.scrollY > 200) {
            backToTop.style.display = 'block';
        } else {
            backToTop.style.display = 'none';
        }
    });

    // ヘッダー固定（スクロールで影を付ける）
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if(window.scrollY > 0) {
            header.style.boxShadow = '0 2px 5px rgba(0,0,0,0.2)';
            header.style.position = 'fixed';
            header.style.top = '0';
            header.style.width = '100%';
            header.style.backgroundColor = '#0072bc';
            header.style.zIndex = '999';
        } else {
            header.style.boxShadow = 'none';
            header.style.position = 'static';
        }
    });
});
