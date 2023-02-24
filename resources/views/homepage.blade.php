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
    <style>
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

    </style>
</head>
<body>
   <nav class="relative container mx-auto p-6">
        <div class="flex items-center justify-between">
            <div class="pt-2">
                <img src="{{URL::asset('/tailwind/image/')}}" alt="phoenix">
            </div>
            <div class="hidden md:flex space-x-7 text-black">
                <a href="" class="hover:text-green-400">Home</a>
                <a href="" class="hover:text-green-400">About </a>
                <a href="" class="hover:text-green-400">Services</a>
                <a href="" class="hover:text-green-400">Our Team</a>
                <a href="" class="hover:text-green-400">Pricing</a>
                <a href="" class="hover:text-green-400">Contact</a>
            </div>
            <a href="" class="hidden md:block p-3 px-6 pt-2 text-white bg-blue-400 rounded-full baseline hover:bg-green-300">Get Started</a>
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
             <a href="" class="hover:text-blue-400">Home</a>
             <a href="" class="hover:text-blue-400">About </a>
             <a href="" class="hover:text-blue-400">Services</a>
             <a href="" class="hover:text-blue-400">Our Team</a>
             <a href="" class="hover:text-blue-400">Pricing</a>
             <a href="" class="hover:text-blue-400">Contact</a>

            
            </div>
        </div>
    </nav>
    
    <!--heroo section-->
    <section id="hero">
        <div class="container mx-auto flex flex-col-reverse m items-center px-5 mt-10 max-w-6xl gap-x-5 md:px-2 md:flex-row ">
            <!--writings on the left side-->
            <div class=" flex flex-col flex-wrap md:w-1/2">
                <h1 class="text-4xl font-bold text-center mb-32 md:text-left">
                    TechNiche
                </h1>
                <p class="text-justify mb-28 p-3">
                    Phoenix Company Limited is an IT company that majors on building websites,
                    Mobile Apps. It also deals with software installations and Computer Servicing and Repairs.
                     We are a team dedicted to solve problems using computers and also create employments to people 
                     who are enthuthiastic on the Technology world. We have different proffesions towards the building 
                     of the company where we can solve almost all computer related problems. The company also practices CIA 
                     , It maintains the confidentiality of data or information, Integrity of data given is maintained such 
                     that it is not manipulated or changed and Availability of data whenever it is needed.
                </p>
                <div class="flex justify-center md:justify-start space-x-6 mt-32">
                    <a href="" class="md:block p-3  px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-green-300 ">Learn More</a>
                    <a href="" class="md:block p-3 px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-green-300">Get in Touch</a>  
    
                </div>
            </div>
            <!--image on the right side-->
            <div class="">
                <img src="{{URL::asset('/tailwind/image/Comp.jpeg')}}" alt="" height="70%" width="100%" class="p-3">
            </div>          
        </div>
    </section>
    <!-- our services -->
    <section id="our services">
        <div class=" px-7 mx-auto mt-32 text-center ">            
            <h2 class="text-4xl font-bold text-center">Services</h2>
            <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    <h5 class="text-lg font-bold">
                        Web App and Website Development</h5>
                        <i class="fa-solid fa-laptop-code fa-2xl"></i>

                    <p class="text-sm text-black">Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Officiis autem vero eaque assumenda fuga ipsa,
                         laudantium at omnis corrupti facere rem dignissimos consequuntur 
                         quis minus quas consectetur repudiandae commodi tenetur aspernatur 
                         cum quos atque voluptate. Ipsa magnam cumque asperiores est iste hic 
                         blanditiis animi cupiditate fugit, officia inventore, aspernatur nemo.
                        </p>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    
                    <h5 class="text-lg font-bold">Computer Sales and Repair</h5>
                    <i class="fa-solid fa-wrench fa-2xl"></i>
                    <p class="text-sm text-black">Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Officiis autem vero eaque assumenda fuga ipsa,
                         laudantium at omnis corrupti facere rem dignissimos consequuntur 
                         quis minus quas consectetur repudiandae commodi tenetur aspernatur 
                         cum quos atque voluptate. Ipsa magnam cumque asperiores est iste hic 
                         blanditiis animi cupiditate fugit, officia inventore, aspernatur nemo.
                        </p>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    
                    <h5 class="text-lg font-bold">IT Support Services</h5>
                    <i class="fa-solid fa-wrench fa-2xl"></i>
                    <p class="text-sm text-black">Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Officiis autem vero eaque assumenda fuga ipsa,
                         laudantium at omnis corrupti facere rem dignissimos consequuntur 
                         quis minus quas consectetur repudiandae commodi tenetur aspernatur 
                         cum quos atque voluptate. Ipsa magnam cumque asperiores est iste hic 
                         blanditiis animi cupiditate fugit, officia inventore, aspernatur nemo.
                        </p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    <h5 class="text-lg font-bold">
                        Web design</h5>
                        <i class="fa-solid fa-laptop-code fa-2xl"></i>

                    <p class="text-sm text-black">Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Officiis autem vero eaque assumenda fuga ipsa,
                         laudantium at omnis corrupti facere rem dignissimos consequuntur 
                         quis minus quas consectetur repudiandae commodi tenetur aspernatur 
                         cum quos atque voluptate. Ipsa magnam cumque asperiores est iste hic 
                         blanditiis animi cupiditate fugit, officia inventore, aspernatur nemo.
                        </p>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    
                    <h5 class="text-lg font-bold">Android Apps Development</h5>
                    <i class="fa-solid fa-wrench fa-2xl"></i>
                    <p class="text-sm text-black">Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Officiis autem vero eaque assumenda fuga ipsa,
                         laudantium at omnis corrupti facere rem dignissimos consequuntur 
                         quis minus quas consectetur repudiandae commodi tenetur aspernatur 
                         cum quos atque voluptate. Ipsa magnam cumque asperiores est iste hic 
                         blanditiis animi cupiditate fugit, officia inventore, aspernatur nemo.
                        </p>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-300 md:w-1/3 m-3">
                    
                    <h5 class="text-lg font-bold">Computer Networking</h5>
                    <i class="fa-solid fa-wrench fa-2xl"></i>
                    <p class="text-sm text-black">Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Officiis autem vero eaque assumenda fuga ipsa,
                         laudantium at omnis corrupti facere rem dignissimos consequuntur 
                         quis minus quas consectetur repudiandae commodi tenetur aspernatur 
                         cum quos atque voluptate. Ipsa magnam cumque asperiores est iste hic 
                         blanditiis animi cupiditate fugit, officia inventore, aspernatur nemo.
                        </p>
                </div>
            </div>
            <div class="my-16">
                <a href="" class=" p-3 px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-green-300">See More</a>
            </div>
        </div>
    </section>

    <section id="our portfolio"><!--portfolio-->
        <div class=" px-5 mx-auto mt-32 text-center">
            <h2 class="text-4xl font-bold text-center">Portfolio</h2>
            <i class="text-center">what we've created so far</i>
            <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg md:w-1/3">
                    <div class=" rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{URL::asset('/tailwind/image/carhire.jpg')}}" alt="cash exchange">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">Car hire Management System</div>
                          <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                          </p>
                          <div class="my-16">
                            <a href="" class=" p-3 px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-green-300">request pricing</a>
                        </div>
                        </div>
                      </div>

                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg md:w-1/3">
                    <div class="rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{URL::asset('/tailwind/image/chatbot.jpg')}}" alt="chatbot image">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">ChatBot</div>
                          <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                          </p>
                          <div class="my-16">
                            <a href="" class=" p-3 px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-green-300">request pricing</a>
                        </div>
                        </div>
                      </div>
                </div>
                <div class="md:flex flex-col items-center p-6 space-y-6 rounded-lg  md:w-1/3">
                    <div class=" rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{URL::asset('/tailwind/image/grocery.jpg')}}" alt="grocery image">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">Groceries Order and Delivery System</div>
                          <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                          </p>
                          <div class="my-16">
                            <a href="" class=" p-3 px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-green-300">request pricing</a>
                        </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </section>
   <!--
           <div class="my-16">
                <a href="" class=" p-3 px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-green-300">Get in Touch</a>
            </div>
   -->
x
    <section>
        <!--values-->
    </section>
    <!--contact us  -->
    <section>
        <!--contact us-->
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
            <h2 class="text-4xl font-bold text-center mb-32">HAVE SOME QUESTIONS?</h2>
            <div class="container mx-auto flex flex-col-reverse items-center px-5  md:px-2 md:flex-row">
                <div class="text-center">
                    <img src="{{URL::asset('/tailwind/image/mail.png')}}" height="60%" width="60%">
                </div>
              <form action="{{ route('store-message') }}" method="POST" enctype="multipart/form-data">

              {{ csrf_field() }}
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif

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
    <footer class="bg-blue-300 mt-3">
        <div
          class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0"
        >
          <div
            class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start"
          >
            <div class="mx-auto my-6 text-center text-white md:hidden">
              Copyright &copy; 2023, All Rights Reserved
            </div>
            <div>
              <img src="image/logo-white.svg" class="h-8" alt="" />
            </div>
            <div class="flex justify-center space-x-4">
              <a href="#">
                <img src="image/icon-facebook.svg" alt="" class="h-8" />
              </a>
              <a href="#">
                <img src="image/icon-youtube.svg" alt="" class="h-8" />
              </a>
              <a href="#">
                <img src="image/icon-twitter.svg" alt="" class="h-8" />
              </a>
              <a href="#">
                <img src="image/icon-pinterest.svg" alt="" class="h-8" />
              </a>
              <a href="#">
                <img src="image/icon-instagram.svg" alt="" class="h-8" />
              </a>
            </div>
          </div>
          <div class="flex justify-around space-x-32">
            <div class="flex flex-col space-y-3 text-white">
              <a href="#" class="hover:text-green-300">Home</a>
              <a href="#" class="hover:text-green-300">Pricing</a>
              <a href="#" class="hover:text-green-300">Products</a>
              <a href="#" class="hover:text-green-300">About</a>
            </div>
            <div class="flex flex-col space-y-3 text-white">
              <a href="#" class="hover:text-green-300">Careers</a>
              <a href="#" class="hover:text-green-300">Community</a>
              <a href="#" class="hover:text-green-300">Privacy Policy</a>
            </div>
          </div>
  
          <!-- Input Container -->
          <div class="flex flex-col justify-between">
            <form>
              <div class="flex space-x-3">
                <input
                  type="text"
                  class="flex-1 px-4 rounded-full focus:outline-none"
                  placeholder="Updated in your inbox"
                />
                <button
                  class="px-6 py-2 text-white rounded-full bg-red-400 hover:bg-green-300 focus:outline-none"
                >
                  Go
                </button>
              </div>
            </form>
            <div class="hidden text-white md:block">
              Copyright &copy; 2023, All Rights Reserved
            </div>
          </div>
        </div>
      </footer>
    <script src="{{URL::asset('/tailwind/js/script.js')}}"></script>
</body>
</html>