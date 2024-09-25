const formss = document.querySelectorAll('.forms');

formss.forEach(f => {
    f.querySelector(".book").addEventListener('click', function(){
        f.submit();
    });
});