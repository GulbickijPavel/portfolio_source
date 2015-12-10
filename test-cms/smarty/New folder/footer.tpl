            </div>
        </div>
        <footer><div class="fixed-contacts"></div> &copy PGulbickij.lt 2015</footer>
        <script type="text/javascript" src=" http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script>
             $(function(){
                $( "*", document.body ).on('contextmenu', function(event) {
                    event.stopPropagation();
                    var domElement = $( this ).get( 0 );
                    console.log(domElement.text);
                    console.log(domElement.innerHTML);
                    console.log(domElement.val());
                    //alert("Clicked on - " + domElement.innerHTML);
                    return false;
                });
            });
        </script>
        <script type="text/javascript" src="build/combined.min.js"></script>
        <script type="text/javascript" src="build/script.min.js"></script>
        {if $cms =='true'}
        <script src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>
        <script type="text/javascript" src="/portfolio/portfolio.lt/js/ckeditor/sample.js">     </script>
        
    
        {/if}

