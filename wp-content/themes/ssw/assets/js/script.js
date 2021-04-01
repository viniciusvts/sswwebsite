/*!Vinicius de Santana*/
//https://javascript-minifier.com/
//https://skalman.github.io/UglifyJS-online/
(function ssw(window, document, console, querySelector, querySelectorAll) {
    // nav menu
    document.addEventListener("DOMContentLoaded", DOMContentLoaded);
    window.addEventListener("load", load);
    /** O evento DOMContentLoaded é acionado quando todo o HTML foi
     * completamente carregado e analisado, sem aguardar pelo CSS, imagens,
     * e subframes para encerrar o carregamento.
     */
    function DOMContentLoaded(evt) {
        console.log('DOMContentLoaded', evt);
    }

    /** O evento de carga é disparado quando toda a página é carregada,
     * incluindo todos os recursos dependentes, como folhas de estilo e imagens.
     */
    function load(evt) {
        startMenuToggler();
    }
    /** todos os menus togllers definidos com a classe "navTogller" são acessador e atribuem
     * a classe "active" a seus respectivos "data-target"
     */
    function startMenuToggler() {
        const navTogllers = querySelectorAll('.navTogller');
        if(navTogllers.length > 0) {
            for (const navTogller of navTogllers) {
                navTogller.addEventListener('click', function(){
                    const target = querySelector(navTogller.dataset.target);
                    if (target.classList.contains('active')) target.classList.remove('active');
                    else target.classList.add('active');
                });
            }
        }
    }
})(window, document, console, x=>document.querySelector(x), x=>document.querySelectorAll(x));