




<img src="icon/uparrow.png" onclick="topFunction()" id="myBtn" title="Go to top"/>

            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {scrollFunction()};

                function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
                }
            </script>

            <style>
                #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 15px;
                border-radius: 50px;
                }
            
            #myBtn:hover {
                background-color: #FCBB04;
                }
            </style>