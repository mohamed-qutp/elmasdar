</div>
<!-- script start --><!-- Theme JS -->
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
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
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/delaunay.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.13.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- End script start -->
<script>
    //Maruf al Bashir Reza
		$(window).on('load', function() { // makes sure the whole site is loaded 
			$('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(550).css({'overflow':'visible'});
		})
</script>
    <script>
        $(document).ready(function() {
        // $(".navbar").hover(mouseEnter, mouseLeave);
        var timer; 
         $(".mega-menu").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";
           var id = $(this).attr("id"); 
          setTimeout(displayCurrentMenuItem, 100,id);         

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";
        document.getElementById("services").style.filter = "blur(0px)";
        document.getElementById("solutions").style.filter = "blur(0px)";
        document.getElementById("clients").style.filter = "blur(0px)"; 
        document.getElementById("bd-theme").style.filter = "blur(0px)";   
        document.getElementById("search_icon").style.filter = "blur(0px)";                    
        document.getElementById('dm').style.filter = "blur(0px)";
   
});
$("#services_sub").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";                     

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  
$("#sub").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";                     

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  
$("#sub1").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";             

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";   
});  
$("#sub2").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";                

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  
$("#sub3").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";      
               

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  

$("#solutions_sub").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";                     

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  
$("#s_sub").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";                     

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  
$("#s_sub1").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";             

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";   
});  
$("#s_sub2").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";                

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  
$("#s_sub3").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";      
               

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  

$("#clients_sub").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";                     

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  
$("#c_sub").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";                     

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  
$("#c_sub1").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";             

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";   
});  
$("#c_sub2").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";                

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  
$("#c_sub3").hover(function() {       
           document.getElementById("blur_body").style.filter = "blur(15px)"; 
           if(document.getElementById("one") !== null)
           { 
           document.getElementById("one").style.filter = "blur(35px)";   
           }      
           document.getElementById("blur_footer").style.filter = "blur(15px)";      
               

}, function () {     
        document.getElementById("blur_body").style.filter = "blur(0px)";
        if(document.getElementById("one") !== null)
        {
        document.getElementById("one").style.filter = "blur(0px)";  
        }
        document.getElementById("blur_footer").style.filter = "blur(0px)";      
   
});  

// $("#dm").hover(function() {       
//            document.getElementById("blur_body").style.filter = "blur(15px)";          
//            document.getElementById("blur_footer").style.filter = "blur(15px)";
//            document.getElementById("services").style.filter = "blur(7px)";
//            document.getElementById("solutions").style.filter = "blur(7px)";
//            document.getElementById("clients").style.filter = "blur(7px)"; 
//            document.getElementById("search_icon").style.filter = "blur(7px)";                           
//            document.getElementById("bd-theme").style.filter = "blur(7px)";   
//            document.getElementById('dm').style.filter = "blur(0px)";
               

// }, function () {     
//         document.getElementById("blur_body").style.filter = "blur(0px)";
//         document.getElementById("blur_footer").style.filter = "blur(0px)";
//         document.getElementById("services").style.filter = "blur(0px)";
//         document.getElementById("solutions").style.filter = "blur(0px)";
//         document.getElementById("clients").style.filter = "blur(0px)"; 
//         document.getElementById("bd-theme").style.filter = "blur(0px)";   
//         document.getElementById("search_icon").style.filter = "blur(0px)";                    
//         document.getElementById('dm').style.filter = "blur(0px)";
   
// });
// search popup show
$("#search_icon").on('click', function(e) {
            e.preventDefault();
            $(".search-popup").addClass('popup');
            if( document.getElementById("h_blur0") !== null)
            {
                document.getElementById("h_blur0").style.filter = "blur(15px)"; 
            }            
            document.getElementById("blur_body").style.filter = "blur(15px)";          
            document.getElementById("blur_footer").style.filter = "blur(15px)";
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
    // if(id === "services")
    //             {
    //                // document.getElementById("services").style.display = 'block';
    //                 document.getElementById("solutions").style.filter = "blur(7px)";
    //                 document.getElementById("clients").style.filter = "blur(7px)";
    //                 document.getElementById("bd-theme").style.filter = "blur(7px)";   
    //                 document.getElementById("search_icon").style.filter = "blur(7px)";                    
    //                 document.getElementById('dm').style.filter = "blur(7px)";

    //             }
    //             else if(id === "solutions")
    //             {
    //                 document.getElementById("services").style.filter = "blur(7px)";
    //                 //document.getElementById("solutions").style.display = 'block';
    //                 document.getElementById("clients").style.filter = "blur(7px)";
    //                 document.getElementById("bd-theme").style.filter = "blur(7px)";   
    //                 document.getElementById("search_icon").style.filter = "blur(7px)";                    
    //                 document.getElementById('dm').style.filter = "blur(7px)";
    //             }
    //             else if(id === "clients")
    //             {
    //                 document.getElementById("services").style.filter = "blur(7px)";
    //                 document.getElementById("solutions").style.filter = "blur(7px)";
    //                // document.getElementById("clients").style.display = 'block'; 
    //                document.getElementById("bd-theme").style.filter = "blur(7px)";   
    //                 document.getElementById("search_icon").style.filter = "blur(7px)";                    
    //                 document.getElementById('dm').style.filter = "blur(7px)";
    //             }
    //             else if(id === "search_icon")
    //             {
    //                 document.getElementById("services").style.filter = "blur(7px)";
    //                 document.getElementById("solutions").style.filter = "blur(7px)";
    //                 document.getElementById("clients").style.display = 'blur(7px)'; 
    //                 document.getElementById("bd-theme").style.filter = "blur(7px)";   
    //                 document.getElementById("search_icon").style.filter = "blur(0px)";                    
    //                 document.getElementById('dm').style.filter = "blur(7px)";
    //             }
    //             else if(id === "demos")
    //             {
    //                 document.getElementById("home").style.display = 'none';
    //                 document.getElementById("pages").style.display = 'none';
    //                 document.getElementById("blog").style.display = 'none';     
    //                 document.getElementById("search_icon").style.display = 'none';                                
    //                 document.getElementById('dm').style.visibility = 'hidden';
    //             }  
                $('.dropdown-item').hover(function(){
                    document.getElementById("blur_body").style.filter = "blur(15px)";
                    document.getElementById("blur_footer").style.filter = "blur(15px)";
                    var dropDownId = $(this).attr("id");
                    if(id === "services")
                    {
                    //  document.getElementById("services").style.filter = "blur(0px)";
                    //  document.getElementById("solutions").style.filter = "blur(7px)";
                    //  document.getElementById("clients").style.filter = "blur(7px)";
                    //  document.getElementById("search_icon").style.filter = "blur(7px)";                    
                    //  document.getElementById('dm').style.filter = "blur(7px)";
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
                    //  document.getElementById("services").style.filter = "blur(7px)";
                    //  document.getElementById("solutions").style.filter = "blur(0px)";
                    //  document.getElementById("clients").style.filter = "blur(7px)";
                    //  document.getElementById("search_icon").style.filter = "blur(7px)";                    
                    //  document.getElementById('dm').style.filter = "blur(7px)";
                        if(dropDownId === "page_link1")
                        {
                            document.getElementById("solution_img").src="/assets/images/1.jpg";
                        }
                        else if(dropDownId === "page_link2") 
                        {
                            document.getElementById("solution_img").src="/assets/images/2.jpg";
                        }
                        else if(dropDownId === "page_link3")
                        {
                            document.getElementById("page_img").src="/assets/images/3.jpg";
                        }
                    }
                    else if(id === "clients")
                    {
                    //  document.getElementById("services").style.filter = "blur(7px)";
                    //  document.getElementById("solutions").style.filter = "blur(7px)";
                    //  document.getElementById("clients").style.filter = "blur(0px)";
                    //  document.getElementById("search_icon").style.filter = "blur(7px)";                    
                    //  document.getElementById('dm').style.filter = "blur(7px)";
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
        document.getElementById("services").style.filter = 'blur(0px)';
        document.getElementById("solutions").style.filter = 'blur(0px)';
        document.getElementById("clients").style.filter = 'blur(0px)';    
        document.getElementById("bd-theme").style.filter = "blur(0px)";    
        document.getElementById("search_icon").style.filter = 'blur(0px)';   
        document.getElementById('dm').style.filter = 'blur(0px)';
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

$(window).on('scroll', function(){
var s = $(window).scrollTop(),
d = $(document).height(),
c = $(window).height();
 
var scrollPercent = (s / (d - c)) * 100;
//document.getElementById('scrollId').innerHTML = scrollPercent;
console.log(scrollPercent); //Displaying scroll percentage in console
 
if(scrollPercent < 2){
document.getElementById("header_img").src = "{{asset('assets/images/1_.jpg')}}";
//document.getElementById('img2').style.display = "none";
}
else if(scrollPercent > 6 && scrollPercent < 8){
    document.getElementById("header_img").src= "{{asset('assets/images/2_.jpg')}}";
//document.getElementById('img2').style.display = "block";
}
else if(scrollPercent > 10 && scrollPercent < 15){
    document.getElementById("header_img").src ="{{asset('assets/images/3_.jpg')}}";
}
else if(scrollPercent > 15 && scrollPercent < 20){
    document.getElementById("header_img").src ="{{asset('assets/images/4.jpg')}}";
}
else if(scrollPercent > 20 && scrollPercent < 25){
    document.getElementById("header_img").src ="{{asset('assets/images/5.jpg')}}";
}
 
})
//popup code
const modal =  document.getElementById("modal");
//const openModal = document.querySelector(".open-button");
const closeModal = document.querySelector(".close-button");
const modalBtn = document.querySelectorAll('.open-button');
var serviceTitle = {
1:'ERP Systems',
2:'Point Of Sale Systems',
3:'Web Development',
4:'Mobile Applications',
5:'Web Applications',
6:'Cyber Security',
7:'Digital Marketing Solutions',
8:'Technical Support'
};
var serviceContent = {
    1:'The backbone of multiple task companies and administrative departments is considered to enhance the digitalization and management of all essential business processes to achieve enterprise resource planning and data flow between corporate business functions. ERP streamlines the enterprise resource planning programs and links processes and data across the organization so that accounts, supply chains, processes, trade, reporting, manufacturing, and human resources activities are on a single platform for flexibility of adjustment and client-specific needs.',
    2:'It is a system that is used to organize and efficiently complete sales, payments, and inventory management with the primary goals of enhancing customer experience and strengthening business management. Many other industries, such as retail, dining, lodging, and services, use this method. The POS system makes it easier for customers to pay and complete transactions, which decreases client wait times and helps to prevent human error in data entry and financial processes. It also makes it easier to maintain stock levels and place reorders, and it helps to provide detailed reporting on sales, items, and customers.',
    3:'It is the process of creating and programming e-mail and developing its components, creating an end product on the web that offers a user-friendly experience and a user-friendly version of various devices that are easy to surf. The development of web sites covers many different aspects, such as graphic design, front-end programming, background programming, database management, site safety, and other technical and functional aspects.',
    4:'They are software programs made specifically to run mobile operating systems, like iOS, Android, and others. These programs cover a wide range of topics and purposes and offer an interactive user interface that enables users to quickly access content or carry out specific tasks on their mobile phones. Planning, design, programming, and quality testing are all steps in the same process that go into creating a web site. The user experience with mobile devices, including application response and compatibility with various display and device sizes, is of particular relevance. ',
    5:'Although it is online-based software, it is a separate sort that users can access without downloading and installing additional software. These programs can be found on distant servers and offer a user interface that is interactive and accessible as well as information sharing and service delivery. These programs play a significant role in users daily lives since they provide services for a wide range of sectors, including social networking, online banking, online shopping, business administration, and educational content.',
    6:'Given recent advances surrounding our complete reliance on digital technology and communications in many parts of life, cybersecurity is essential in today’s world. These steps are taken to protect the confidentiality and integrity of data as well as the continuation of people, businesses, and institutions’ vital operations. It is a collection of technical measures designed to safeguard data, networks, and computer systems from cybercrime and cyberattacks. Electronic fraud, identity theft, and new threats are just a few of the dangers and difficulties that go under the umbrella of cybersecurity.',
    7:'Online marketing tactics and resources are employed to promote goods, services, or brands. Digital marketing relies on communicating with customers, both existing and potential, through electronic channels and platforms. By producing value-added content that makes the public loyal to you and your company, we at the source of information technology offer our clients intelligent solutions and improve their presence on local and international commercial markets. This allows us to increase sales using digital technology and electronic means.',
    8:'In the source of the information technology, we provide a range of services and procedures aimed at helping clients solve their technical problems and queries about digital systems. Technical support services are provided through multiple means and platforms to be on your side whenever you need us. Technical support provides guidance and training to users to help them understand how to use technology better and more effectively. Technical support also includes maintenance of systems, including installation of security corrections, upgrades and software upgrades, which helps to provide positive experience to clients and ensure systems function properly and effectively.',
}; 
        modalBtn.forEach(function(e) {
        e.addEventListener('click', function(event){         
        // $('#modal').css({"left":"30%"});      // <<< use pageX and pageY
        // $('#modal').css({"top":"64%"});
        var id = $(this).attr("id");
        console.log(serviceContent[id]);
        document.getElementById('model_title').innerHTML = serviceTitle[id];
        document.getElementById('modal_content').innerHTML = serviceContent[id];
         $('#modal').css('display','inline');     
         $("#modal").css("position", "absolute");    
        document.getElementById("blur_body").style.filter = "blur(8px)";          
       document.getElementById("blur_footer").style.filter = "blur(7px)";
       document.getElementById("services").style.filter = "blur(7px)";
       document.getElementById("solutions").style.filter = "blur(7px)";
       document.getElementById("clients").style.filter = "blur(7px)"; 
       document.getElementById("bd-theme").style.filter = "blur(7px)";   
       document.getElementById("search_icon").style.filter = "blur(7px)";                    
       document.getElementById('dm').style.filter = "blur(7px)";           
});
      //  $('body').css('overflow', 'hidden');
})
function openModal()
{
    modal.style.display = "block";
   
}
closeModal.addEventListener("click", () => {
  modal.style.display = "none";
  document.getElementById("blur_body").style.filter = "blur(0px)";          
  document.getElementById("blur_footer").style.filter = "blur(0px)";
  document.getElementById("services").style.filter = "blur(0px)";
  document.getElementById("solutions").style.filter = "blur(0px)";
  document.getElementById("clients").style.filter = "blur(0px)"; 
  document.getElementById("bd-theme").style.filter = "blur(0px)";   
  document.getElementById("search_icon").style.filter = "blur(0px)";                    
  document.getElementById('dm').style.filter = "blur(0px)";
});
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.getElementById("blur_body").style.filter = "blur(0px)";          
    document.getElementById("blur_footer").style.filter = "blur(0px)";
    document.getElementById("services").style.filter = "blur(0px)";
    document.getElementById("solutions").style.filter = "blur(0px)";
    document.getElementById("clients").style.filter = "blur(0px)"; 
    document.getElementById("bd-theme").style.filter = "blur(0px)";   
    document.getElementById("search_icon").style.filter = "blur(0px)";                    
    document.getElementById('dm').style.filter = "blur(0px)";
  }
} 

//logo slider

$('.logos-slider').slick({
slidesToShow: 4,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 1500,
arrows: false,
dots: false,
pauseOnHover: false,
responsive: [{
breakpoint: 768,
settings: {
slidesToShow: 3
}
}, {
breakpoint: 520,
settings: {
slidesToShow: 2
}
}]
});
// const TWO_PI = Math.PI * 2;

// var images = [],
//     imageIndex = 0;

// var image,
//     imageWidth = 1850,
//     imageHeight = 485;

// var vertices = [],
//     indices = [],
//     fragments = [];

// var container = document.getElementById('container');

// var clickPosition = [imageWidth * 0.5, imageHeight * 0.5];

// window.onload = function() {
//     // TweenMax.set(container, {perspective:500});

//     // images from reddit/r/wallpapers
//     // var urls = [
//     //         'https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/crayon.jpg'
          
//     //     ],
//         // image = new Image();
//         //console.log(image);
//         //loaded = 0;
//     // very quick and dirty hack to load and display the first image asap
//     // images[0] = image = new Image();
//     //     image.onload = function() {
//     //         image = document.getElementById("header_img").src;
//     //         console.log("img1:"+image);
//     // //         if (++loaded === 1) {
//                 // imagesLoaded();
//         //         for (var i = 1; i < 4; i++) {
//         //             images[i] = image = new Image();

//         //             image.src = urls[i];
//         //         }
//         //     }
//         // };
//         // image.src = urls[0];
// };
// // $('#header_img').click(function(){
// //     imagesLoaded();    
// // }); 
// $(window).bind('mousewheel', function(event) {
// if (event.originalEvent.wheelDelta >= 0) {
//     document.getElementById("header_img").style.display="block";
// }
// else {
//    //console.log('Scroll down');
//    imagesLoaded();
// }
// });

// function imagesLoaded() {
//     placeImage(false);
//     triangulate();
//     shatter();
   
// }

// function placeImage(transitionIn) {
//     image = new Image();
//     image.src = document.getElementById("header_img").src;
//     console.log("img1:"+image);
//     // if (++imageIndex === images.length) imageIndex = 0;

//     // image.addEventListener('click', imageClickHandler);
//     // container.appendChild(image);

//     if (transitionIn !== false) {
//          TweenMax.fromTo(image, 0.75, {y:-1000}, {y:0, ease:Back.easeOut});
//     }
// }

// function imageClickHandler(event) {
//     var box = image.getBoundingClientRect(),
//         top = box.top,
//         left = box.left;

//     clickPosition[0] = event.clientX - left;
//     clickPosition[1] = event.clientY - top;

//     triangulate();
//    // shatter();
// }

// function triangulate() {
//     var rings = [
//             {r:50, c:12},
//             {r:150, c:12},
//             {r:300, c:12},
//             {r:1200, c:12} // very large in case of corner clicks
//         ],
//         x,
//         y,
//         centerX = clickPosition[0],
//         centerY = clickPosition[1];

//     vertices.push([centerX, centerY]);

//     rings.forEach(function(ring) {
//         var radius = ring.r,
//             count = ring.c,
//             variance = radius * 0.25;

//         for (var i = 0; i < count; i++) {
//             x = Math.cos((i / count) * TWO_PI) * radius + centerX + randomRange(-variance, variance);
//             y = Math.sin((i / count) * TWO_PI) * radius + centerY + randomRange(-variance, variance);
//             vertices.push([x, y]);
//         }
//     });

//     vertices.forEach(function(v) {
//         v[0] = clamp(v[0], 0, imageWidth);
//         v[1] = clamp(v[1], 0, imageHeight);
//     });
    

//     indices = Delaunay.triangulate(vertices);
//     console.log(indices);
//     document.getElementById("header_img").style.display="none";
// }

// function shatter() {
//     var p0, p1, p2,
//         fragment;

//     var tl0 = new TimelineMax({onComplete:shatterCompleteHandler});

//     for (var i = 0; i < indices.length; i += 3) {
//         p0 = vertices[indices[i + 0]];
//         p1 = vertices[indices[i + 1]];
//         p2 = vertices[indices[i + 2]];

//         fragment = new Fragment(p0, p1, p2);

//         var dx = fragment.centroid[0] - clickPosition[0],
//             dy = fragment.centroid[1] - clickPosition[1],
//             d = Math.sqrt(dx * dx + dy * dy),
//             rx = 30 * sign(dy),
//             ry = 90 * -sign(dx),
//             delay = d * 0.019* randomRange(0.9, 1.1);
//         fragment.canvas.style.zIndex = Math.floor(d).toString();

//         var tl1 = new TimelineMax();


//         tl1.to(fragment.canvas, 1, {
//             z:-500,
//             rotationX:rx,
//             rotationY:ry,
//             ease:Cubic.easeIn
//         });
//         tl1.to(fragment.canvas, 0.4,{alpha:0}, 0.6);

//         tl0.insert(tl1, delay);

//         fragments.push(fragment);
//         container.appendChild(fragment.canvas);
//     }
//     document.getElementById("header_img").style.display="none";
//     // container.removeChild(image);
//     // image.removeEventListener('click', imageClickHandler);
// }

// function shatterCompleteHandler() {
//     // add pooling?
//     fragments.forEach(function(f) {
//         container.removeChild(f.canvas);
//     });
//     fragments.length = 0;
//     vertices.length = 0;
//     indices.length = 0;

//     placeImage();
// }

// //////////////
// // MATH UTILS
// //////////////

// function randomRange(min, max) {
//     return min + (max - min) * Math.random();
// }

// function clamp(x, min, max) {
//     return x < min ? min : (x > max ? max : x);
// }

// function sign(x) {
//     return x < 0 ? -1 : 1;
// }

// //////////////
// // FRAGMENT
// //////////////

// Fragment = function(v0, v1, v2) {
//     this.v0 = v0;
//     this.v1 = v1;
//     this.v2 = v2;

//     this.computeBoundingBox();
//     this.computeCentroid();
//     this.createCanvas();
//     this.clip();
// };
// Fragment.prototype = {
//     computeBoundingBox:function() {
//         var xMin = Math.min(this.v0[0], this.v1[0], this.v2[0]),
//             xMax = Math.max(this.v0[0], this.v1[0], this.v2[0]),
//             yMin = Math.min(this.v0[1], this.v1[1], this.v2[1]),
//             yMax = Math.max(this.v0[1], this.v1[1], this.v2[1]);           

//         this.box ={
//             x:xMin,
//             y:yMin,
//             w:xMax - xMin,
//             h:yMax - yMin
//         };
//     },
//     computeCentroid:function() {
//         var x = (this.v0[0] + this.v1[0] + this.v2[0]) / 3,
//             y = (this.v0[1] + this.v1[1] + this.v2[1]) / 3;

//         this.centroid = [x, y];
//     },
//     createCanvas:function() {
//         this.canvas = document.createElement('canvas');
//         this.canvas.width = this.box.w;
//         this.canvas.height = this.box.h;
//         this.canvas.style.width = this.box.w + 'px';
//         this.canvas.style.height = this.box.h + 'px';
//         this.canvas.style.left = this.box.x + 'px';
//         this.canvas.style.top = this.box.y + 'px';
//         this.ctx = this.canvas.getContext('2d');
//     },
//     clip:function() {
//         this.ctx.translate(-this.box.x, -this.box.y);
//         this.ctx.beginPath();
//         this.ctx.moveTo(this.v0[0], this.v0[1]);
//         this.ctx.lineTo(this.v1[0], this.v1[1]);
//         this.ctx.lineTo(this.v2[0], this.v2[1]);
//         this.ctx.closePath();
//         this.ctx.clip();
//         this.ctx.drawImage(image, 0, 0);
//     }
// };
</script>

</body>
</html>