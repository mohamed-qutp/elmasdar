</div>
<!-- script start --><!-- Theme JS -->
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<!--bootstrap--><script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- headroom JS -->
<script src="{{asset('assets/js/headroom.min.js')}}"></script>
<!-- swiper JS -->
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<!-- purecounter JS -->
<script src="{{asset('assets/js/purecounter_vanilla.js')}}"></script>
<!-- isotope JS -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!-- magnific JS -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- magnific JS -->
<script src="{{asset('assets/js/highlight.min.js')}}"></script>
<!-- magnific JS -->
<script src="{{asset('assets/js/typed.js')}}"></script>
<!-- svginjector JS -->
<script src="{{asset('assets/js/svg-injector.min.js')}}"></script>
<!-- wow JS -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- wow JS -->
<script src="{{asset('assets/js/jquery.easypiechart.min.js')}}"></script>
<!-- countdown JS -->
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<!-- one-page JS -->
<script src="{{asset('assets/js/scrollIt.min.js')}}"></script>
<!-- working form -->
<script src="{{asset('assets/js/form.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('assets/js/theme-jquery.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('assets/js/theme.js')}}"></script>
<!-- Dark/Light JS -->
<script src="{{asset('assets/js/color-modes.js')}}"></script>
<!-- End script start -->
    <script>
        $(document).ready(function() {
        // $(".navbar").hover(mouseEnter, mouseLeave);
        var timer;
         $(".nav-link").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(3px)";          
           document.getElementById("blur_footer").style.filter = "blur(3px)";
           var id = $(this).attr("id"); 
           setTimeout(displayCurrentMenuItem, 100,id);         

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        document.getElementById("blur_footer").style.filter = "blur(0px)";
        document.getElementById("services").style.display = 'block';
        document.getElementById("solutions").style.display = 'block';
        document.getElementById("clients").style.display = 'block';  
        document.getElementById("search_icon").style.display = 'block';       
        document.getElementById('dm').style.visibility = 'visible';
   
});

// search popup show
$("#search_icon").on('click', function(e) {
            e.preventDefault();
            $(".search-popup").addClass('popup');
            document.getElementById("h_blur0").style.filter = "blur(7px)"; 
            document.getElementById("blur_body").style.filter = "blur(7px)";          
            document.getElementById("blur_footer").style.filter = "blur(7px)";
        });       

        // search popup remove
        $("#searchCloseBtn, .search-popup-overlay").on('click', function() {
            $(".search-popup").removeClass('popup');
            document.getElementById("h_blur0").style.filter = "blur(0px)"; 
            document.getElementById("blur_body").style.filter = "blur(0px)";
            document.getElementById("blur_footer").style.filter = "blur(0px)";
        });

function displayCurrentMenuItem(id)
{
    if(id === "services")
                {
                    document.getElementById("services").style.display = 'block';
                    document.getElementById("solutions").style.display = 'none';
                    document.getElementById("clients").style.display = 'none';
                    document.getElementById("search_icon").style.display = 'none';                    
                    document.getElementById('dm').style.visibility = 'hidden';

                }
                else if(id === "solutions")
                {
                    document.getElementById("services").style.display = 'none';
                    document.getElementById("solutions").style.display = 'block';
                    document.getElementById("clients").style.display = 'none';  
                    document.getElementById("search_icon").style.display = 'none';                                     
                    document.getElementById('dm').style.visibility = 'hidden';
                }
                else if(id === "clients")
                {
                    document.getElementById("services").style.display = 'none';
                    document.getElementById("solutions").style.display = 'none';
                    document.getElementById("clients").style.display = 'block'; 
                    document.getElementById("search_icon").style.display = 'none';                                  
                    document.getElementById('dm').style.visibility = 'hidden';
                }
                else if(id === "elements")
                {
                    document.getElementById("home").style.display = 'none';
                    document.getElementById("pages").style.display = 'none';
                    document.getElementById("blog").style.display = 'none';   
                    document.getElementById("search_icon").style.display = 'none';                                
                    document.getElementById('dm').style.visibility = 'hidden';
                }
                else if(id === "demos")
                {
                    document.getElementById("home").style.display = 'none';
                    document.getElementById("pages").style.display = 'none';
                    document.getElementById("blog").style.display = 'none';     
                    document.getElementById("search_icon").style.display = 'none';                                
                    document.getElementById('dm').style.visibility = 'hidden';
                }  
                $('.dropdown-item').hover(function(){
                    document.getElementById("blur_body").style.filter = "blur(3px)";
                    document.getElementById("blur_footer").style.filter = "blur(3px)";
                    var dropDownId = $(this).attr("id");
                    if(id === "services")
                    {
                        document.getElementById("services").style.display = 'block';
                        document.getElementById("solutions").style.display = 'none';
                        document.getElementById("clients").style.display = 'none';  
                        document.getElementById("search_icon").style.display = 'none';                                
                        document.getElementById('dm').style.visibility = 'hidden';
                        if(dropDownId === "home_link1")
                        {
                            document.getElementById("home_img").src="/assets/images/1.jpg";
                        }
                        else if(dropDownId === "home_link2")
                        {
                            document.getElementById("home_img").src="/assets/images/2.jpg";
                        }
                        else if(dropDownId === "home_link3")
                        {
                            document.getElementById("home_img").src="/assets/images/3.jpg"; 
                        }
                    }
                    else if(id === "solutions")
                    {
                        document.getElementById("services").style.display = 'none';
                        document.getElementById("solutions").style.display = 'block';
                        document.getElementById("clients").style.display = 'none';         
                        document.getElementById("search_icon").style.display = 'none';                               
                        document.getElementById('dm').style.visibility = 'hidden';
                        if(dropDownId === "page_link1")
                        {
                            document.getElementById("page_img").src="/assets/images/1.jpg";
                        }
                        else if(dropDownId === "page_link2")
                        {
                            document.getElementById("page_img").src="/assets/images/2.jpg";
                        }
                        else if(dropDownId === "page_link3")
                        {
                            document.getElementById("page_img").src="/assets/images/3.jpg";
                        }
                    }
                    else if(id === "clients")
                    {
                        document.getElementById("services").style.display = 'none';
                        document.getElementById("solutions").style.display = 'none';
                        document.getElementById("clients").style.display = 'block';      
                        document.getElementById("search_icon").style.display = 'none';                                   
                        document.getElementById('dm').style.visibility = 'hidden';
                        if(dropDownId === "blog_link1")
                        {
                            document.getElementById("blog_img").src="/assets/images/1.jpg";
                        }
                        else if(dropDownId === "blog_link2")
                        {
                            document.getElementById("blog_img").src="/assets/images/2.jpg";
                        }
                        else if(dropDownId === "blog_link3")
                        {
                            document.getElementById("blog_img").src="/assets/images/3.jpg";
                        }
                    }
                    else if(id === "elements")
                    {
                        document.getElementById("home").style.display = 'none';
                        document.getElementById("pages").style.display = 'none';
                        document.getElementById("blog").style.display = 'none';   
                        document.getElementById("search_icon").style.display = 'none';                                
                        document.getElementById('dm').style.visibility = 'hidden';
                        if(dropDownId === "elem_link1")
                        {
                            document.getElementById("elem_img").src="/assets/images/1.jpg";
                        }
                        else if(dropDownId === "elem_link2")
                        {
                            document.getElementById("elem_img").src="/assets/images/2.jpg";

                        }
                        else if(dropDownId === "elem_link3")
                        {
                            document.getElementById("elem_img").src="/assets/images/3.jpg";
                        }
                    }
                    else if(id === "demos")
                    {
                        document.getElementById("home").style.display = 'none';
                        document.getElementById("pages").style.display = 'none';
                        document.getElementById("blog").style.display = 'none';  
                        document.getElementById("search_icon").style.display = 'none';                                         
                        document.getElementById('dm').style.visibility = 'hidden';
                        if(dropDownId === "demo_link1")
                        {
                            document.getElementById("demo_img").src="/assets/images/1.jpg";
                        }
                        else if(dropDownId === "demo_link2")
                        {
                            document.getElementById("demo_img").src="/assets/images/2.jpg";
                        }
                        else if(dropDownId === "demo_link3")
                        {
                            document.getElementById("demo_img").src="/assets/images/3.jpg";
                        }
                    }  
                },function () {
        document.getElementById("blur_body").style.filter = "blur(0px)";
        document.getElementById("blur_footer").style.filter = "blur(0px)";
        document.getElementById("services").style.display = 'block';
        document.getElementById("solutions").style.display = 'block';
        document.getElementById("clients").style.display = 'block';     
        document.getElementById("search_icon").style.display = 'block';   
        document.getElementById('dm').style.visibility = 'visible';
});
}     
});
function showHide(elm) {
if (elm == "Customer Support") {
//display textbox
  document.getElementById('message').style.display = "block";
} else {
//hide textbox
  document.getElementById('message').style.display = "none";
}

}
</script>

</body>
</html>