<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('tailwind/css/main.css') }}">
    <title>TechNiche Solutions</title>
    <script src="https://kit.fontawesome.com/d9e760cb08.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"  rel="stylesheet"  type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="~/lib/Font-Awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="~/lib/Font-Awesome/css/regular.min.css">
    <link rel="stylesheet" href="~/lib/Font-Awesome/css/solid.min.css">

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
  list-style: none;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}

html {
  scroll-behavior: smooth;
}


.text h1{
  font-size: 3.5rem;
  letter-spacing: 2px;
}
.text span{
  color: green;
}


      html{
        scroll-behavior: smooth;
      }
    .hamburger {
  cursor: pointer;
  width: 24px;
  height: 24px;
  transition: all 0.25s;
  position: relative;
}

.hamburger-top,
.hamburger-middle,
.hamburger-bottom {
  position: absolute;
  top: 0;
  left: 0;
  width: 24px;
  height: 2px;
  background: #000;
  transform: rotate(0);
  transition: all 0.5s;
}

.hamburger-middle {
  transform: translateY(7px);
}

.hamburger-bottom {
  transform: translateY(14px);
}

.open {
  transform: rotate(90deg);
  transform: translateY(0px);
}

.open .hamburger-top {
  transform: rotate(45deg) translateY(6px) translate(6px);
}

.open .hamburger-middle {
  display: none;
}

.open .hamburger-bottom {
  transform: rotate(-45deg) translateY(6px) translate(-6px);
}

.btn-green {
  background-color: green;
  border-color: green;
}

.btn-green:hover {
  background-color: blue;
  border-color: blue;
}


nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: transparent;
  transition: background-color 0.3s ease-in-out;
  z-index: 9999;
}

nav.scrolled {
  background-color: black;
}

footer{
    background: green;
    padding: 20px 23px;
    text-align: center;
    color: #fff;
}

.services{
    
}


    </style>
</head>
<body>
   <nav class="fixed top-0 left-0 w-full relative container mx-auto p-6">
        <div class="flex items-center justify-between">
          <img src="{{URL::asset('/tailwind/image/techniche.png')}}" alt="techniche solutions" height="20px" width="200px">
            <div class="hidden md:flex space-x-7 text-black">
              <a href="#hero" class="hover:text-blue-400">Home</a>
              <a href="#our portfolio" class="hover:text-blue-400">About </a>
              <a href="#our services" class="hover:text-blue-400">Services</a>
              <a href="#ourTeam" class="hover:text-blue-400">Our Team</a>
              <a href="#contactus" class="hover:text-blue-400">Contact</a>
            </div>
            <a href="userlogin" class="hidden md:block p-3 px-6 pt-2 text-white bg-blue-400 rounded-full baseline hover:bg-green-300">Get Started</a>
            <!--hamburger icon-->
            <button id="menu-btn" class="open block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
        </div>
        <!--mobile menu-->
        <div class="md:hidden">
            <div id="menu" class="absolute flex flex-col items-center self-end  py-8 mt-10 space-y-6 font-bold
             bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
             <a href="#hero" class="menu-btn">Home</a>
             <a href="#our portfolio" class="menu-btn">About </a>
             <a href="#our services" class="menu-btn">Services</a>
             <a href="#ourTeam" class="menu-btn">Our Team</a>
             <a href="#contactus" class="menu-btn">Contact</a>            
            </div>
        </div>
    </nav>    
    <!--heroo section-->
    <section id="hero">
        <div class="container mx-auto flex flex-col-reverse m items-center px-5 mt-10 max-w-6xl gap-x-5 md:px-2 md:flex-row ">
            <!--writings on the left side-->
            <div class=" flex flex-col flex-wrap md:w-1/2">

            <div class="text">
    <h1><span>Creative and Innovative Solutions</span></h1>
</div>
                <p class="text-justify my-24 p-3">
                We are a dynamic IT company that specializes in providing top-notch services, including website and mobile app development, software installations, and computer servicing and repairs.
                Our team is dedicated to providing innovative solutions to our clients' diverse needs. We pride ourselves on hiring passionate professionals who are skilled in various areas of the technology industry.
                Our commitment to excellence has earned us a reputation as a trusted partner for businesses across various industries. Whether you need a new website, mobile app, or IT support, we have the expertise and experience to help you succeed.
                </p>
                <div class="flex justify-center md:justify-start space-x-6 mt-32">
                    <a href="contactus" class="md:block p-3 px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-green-300">Get in Touch</a>  
    
                </div>
            </div>
            <!--image on the right side-->
            <div class="">
            <img src="{{URL::asset('/tailwind/image/Comp.jpeg')}}" alt="" height="70%" width="100%" class="p-3">
            </div>          
        </div>
    </section>
    <!-- our services -->
    <section class="services" id="our services">
        <div class=" px-7 mx-auto mt-32 text-center ">
            <h2 class="text-4xl font-bold text-center" style="color: green; font-weight: bold;">Services</h2>

            <div class="flex flex-col mt- md:flex-row md:space-x-6">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    <h5 class="text-lg font-bold" style="color: blue">Web Development</h5>
                        <i class="fa-solid fa-laptop-code fa-2xl"></i>

                    <p class="text-sm text-black">We create and maintain websites and web applications tailored to our clients' needs. We offer a full range of web development services, including website design, development, programming, testing, and deployment. Our goal is to ensure that the website is user-friendly, responsive, and functions correctly on all devices.
                        </p>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    
                    <h5 class="text-lg font-bold" style="color: blue">Computer Sales and Repair</h5>
                    <i class="fa-solid fa-wrench fa-2xl"></i>
                    <p class="text-sm text-black">We provide quality computer sales, repairs, and maintenance services for both hardware and software issues. We offer a wide range of computer products and accessories to suit your needs. Our expert technicians are committed to delivering top-notch customer service, ensuring that your computer is running smoothly.
                        </p>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    
                    <h5 class="text-lg font-bold" style="color: blue">IT Support Services</h5>
                    <i class="fa-solid fa-wrench fa-2xl"></i>
                    <p class="text-sm text-black">We offer reliable IT support services to ensure that your business runs smoothly without any technical hitches. Our team of experts provides timely and proactive support, ensuring that your systems are up and running, minimizing downtime, and maximizing productivity.
                        </p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    <h5 class="text-lg font-bold" style="color: blue">Web design</h5>
                        <i class="fa-solid fa-laptop-code fa-2xl"></i>

                    <p class="text-sm text-black">We create stunning and functional websites that capture our clients' brand identity and attract their target audience. Our team of designers works collaboratively with our clients to ensure that the website design aligns with their business objectives and vision.
                        </p>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    
                    <h5 class="text-lg font-bold" style="color: blue">Android Apps Development</h5>
                    <i class="fa-solid fa-wrench fa-2xl"></i>
                    <p class="text-sm text-black">We design and develop customized mobile applications that cater to our clients' specific business needs. Our team of experienced developers specializes in building native and hybrid mobile applications that are user-friendly and scalable.
                        </p>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    
                    <h5 class="text-lg font-bold" style="color: blue">Computer Networking</h5>
                    <i class="fa-solid fa-wrench fa-2xl"></i>
                    <p class="text-sm text-black">We provide comprehensive networking solutions that ensure seamless connectivity across your business infrastructure. Our services include network design, installation, configuration, and maintenance, aimed at optimizing your network performance.
                        </p>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio-->
    <section class="portfolio" id="our portfolio">
        <div class=" px-5 mx-auto mt-32 text-center">
            <h2 class="text-4xl font-bold text-center" style="color: green; font-weight: bold;">Portfolio</h2>
            <i class="text-center" style="color: blue">what we've created so far</i>
            <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg md:w-1/3">
                    <div class=" rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{URL::asset('/tailwind/image/carhire.jpg')}}" alt="cash exchange">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2" style="color: green;" >Car hire Management System</div>
                          <p class="text-gray-700 text-base">
                          This system enables customers to browse and book rental cars online easily. The system features a user-friendly interface that allows customers to view available cars, check rental rates, make reservations, and complete the booking process. Our car rental system streamlines the process, making it convenient for customers to rent a car with ease.
                          </p>
                        </div>
                      </div>

                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg md:w-1/3">
                    <div class="rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{URL::asset('/tailwind/image/chatbot.jpg')}}" alt="chatbot image">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2" style="color: green;">Insurance Company ChatBot</div>
                          <p class="text-gray-700 text-base">
                          Our chatbot is an AI-powered solution designed to provide 24/7 customer support to our insurance company clients. The chatbot can handle a wide range of queries related to insurance policies, claims, and billing, among others. With our chatbot, customers can receive real-time assistance, improving their overall experience with our insurance company.                          </p>
      
                        </div>
                      </div>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg  md:w-1/3">
                    <div class=" rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{URL::asset('/tailwind/image/grocery.jpg')}}" alt="grocery image">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2" style="color: green;">Groceries Order and Delivery System</div>
                          <p class="text-gray-700 text-base">
                          This system enables customers to browse and purchase groceries from their preferred stores. The system features a user-friendly interface that allows customers to search for products, add them to their cart, and complete the order process. Our grocery delivery system provides a convenient solution for customers who want to avoid long queues and save time on their grocery shopping.
                        </p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!--values-->
    <section>   
    </section>
    <!-- our team -->
    <section class="team" id="ourTeam">
      <div class=" px-5 mx-auto mt-32 text-center">
        <h2 class="text-4xl font-bold text-center" style="color: blue; font-weight: bold;">Our Team</h2>
        <div class="flex flex-col  md:flex-row md:space-x-6 md:mt-24">
            <div class="flex flex-col items-center p-6 space-y-6 rounded-lg md:w-1/3">
                <div class=" rounded overflow-hidden">
                  <figure class="image is-128x128 mx-auto">
                    <img class="is-rounded" src="{{URL::asset('/tailwind/image/jesse.jpg')}}">
                  </figure>
                  <br><br><br>
                    <!-- <img class="is-rounded" src="image/carhire.jpg" alt="cash exchange"> -->
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2" style="color: blue;">Chief Executive Officer</div>
                      <i style="color: green;">Jesse Kimani</i>
                      <br>
                      <p class="text-gray-700 text-base">
                      Responsible for the overall direction and management of the business. With a wealth of experience in the industry, he has a proven track record of driving growth, innovation, and success.                      
                    </p>
                    </div>
                  </div>

            </div>
            <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg md:w-1/3">
                <div class="rounded overflow-hidden">
                  <figure class="image is-128x128 mx-auto">
                    <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                  </figure>
                    <!-- <img class="w-full" src="image/chatbot.jpg" alt="chatbot image"> -->
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2" style="color: blue;">Chief Technology Officer</div>
                      <i style="color: green;">Linus Muhia</i>
                      <p class="text-gray-700 text-base">
                      Leads our technology team in the development and implementation of innovative solutions that meet our clients' needs. With a deep understanding of the latest trends and technologies in the industry, he ensures that our company remains at the forefront of innovation.                      
                    </p>
                    </div>
                  </div>
            </div>
            <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg  md:w-1/3">
                <div class=" rounded overflow-hidden ">
                  <figure class="image is-128x128 mx-auto">
                    <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                  </figure>
                    <!-- <img class="w-full" src="image/grocery.jpg" alt="grocery image"> -->
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2" style="color: blue;">Chief Operations Officer</div>
                      <i style="color: green;">Sharon Ashuka</i>
                      <p class="text-gray-700 text-base">
                      With a strong background in operations management, she has a proven track record of optimizing business processes, improving operational efficiency, and driving profitability. She is dedicated to delivering exceptional service to our clients and fostering a positive and productive work culture within our team.                      </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    </section>
    <!--contact us  -->
    <section class="contactus" id="contactus">
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
            <h2 class="text-4xl font-bold text-center mb-32" style="color: green; font-weight: bold;">HAVE SOME QUESTIONS?</h2>
            <div class="container mx-auto flex flex-col-reverse items-center px-5  md:px-2 md:flex-row">
                <div class="text-center hidden md:flex">
                    <img src="{{URL::asset('/tailwind/image/mail.png')}}" height="60%" width="60%" alt="message">
                </div>

                @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <form action="{{ route('store-message') }}" method="POST" enctype="multipart/form-data">

              {{ csrf_field() }}

                <div class="">
                    <div class="field">
                        <label class="label">Full Name</label>
                        <div class="control">
                          <input class="input" type="text" placeholder="full name" name="name">
                        </div>
                      </div>                                            
                      <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                          <input class="input" type="email" placeholder="someone@gmail.com" name="email">
                        </div>
                      </div>
                      <div class="field">
                        <label class="label">Phone</label>
                        <div class="control has-icons-left has-icons-right">
                          <input class="input" type="text" placeholder="Phone Number" name="phone">
                        </div>
                      </div>                                           
                      <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                        <input type="text" class="input" name="enquiry">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
              </form>                  
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <footer>
  <div class="container flex justify-between items-center px-6 py-10 mx-auto">
    <div class="flex space-x-4">
      <a href="#">
        <img src="{{URL::asset('/tailwind/image/icon-facebook.svg')}}" alt="" class="h-8" />
      </a>
      <a href="#">
        <img src="{{URL::asset('/tailwind/image/icon-instagram.svg')}}" alt="" class="h-8" />
      </a>
      <a href="#">
        <img src="{{URL::asset('/tailwind/image/icon-twitter.svg')}}" alt="" class="h-8" />
      </a>
      <a href="#">
        <img src="{{URL::asset('/tailwind/image/icon-pinterest.svg')}}" alt="" class="h-8" />
      </a>
      <a href="#">
        <img src="{{URL::asset('/tailwind/image/icon-youtube.svg')}}" alt="" class="h-8" />
      </a>
    </div>
    <div class="text-white flex flex-col space-y-3 md:items-end">
      <p>Contact info</p>
      <p>Kimathi Street</p>
      <p>+254 743 784 792</p>
      <p>+254 748 174 004</p>
      <p>technichesolutionsltd@gmail.com</p>
    </div>
  </div>
  <span>Copyright <span class="far fa-copyright"></span> TechNiche Solutions 2023. All rights reserved. </span>
</footer>

      <script src="{{URL::asset('/tailwind/js/script.js')}}"></script>
</body>
</html>