<div id="homes" class="min-h-screen flex items-center gap-1 p-1 md:flex-nowrap flex-wrap">
    <div class="text-left gap-4 ">
        <h1 class="text-6xl my-1">Hello !</h1>
        <h1 class="text-6xl my-2">My name is <span class="capitalize text-red-400">brou kouadio stephane fabien</span></h1>
        <h1 class="text-6xl my-2">I am a <span class="uppercase text-red-400">php web developer</span></h1>

        <code class="text-blue-300 text-2xl italic text-bold my-1"><?php echo htmlspecialchars('<?= Here is my portfolio ?>') ?></code>
    </div>
    
    <img src="https://cdn.pixabay.com/photo/2013/07/12/16/35/php-151199_1280.png" alt="" class="w-1/2 h-96 md:block hidden">
</div>

<div id="aboutme" class="min-h-screen pt-3 bg-white">

</div>

<div id="myworks" class="bg-slate-50 text-gray-900 min-h-screen pt-3">
    <h1 class="my-3 text-3xl">My Works</h1>
    <div class="flex gap-5 md:gap-2 p-1 md:flex-nowrap flex-wrap">
        <div class=" pb-3 flex flex-col gap-1 border">
            <img src="https://cdn.pixabay.com/photo/2022/07/01/14/29/wheat-7295718__340.jpg" alt="photo" class="md:h-300px">

            <p class="text-light text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex modi minima laborum deleniti cupiditate tempora similique aperiam rerum rem velit.</p>
            <a href="" class="btn-primary m-0.5 md:w-32 w-96 my-0 mx-auto">see more</a>

        </div>

        <div class=" pb-3 flex flex-col border">
            <img src="https://cdn.pixabay.com/photo/2022/02/07/06/41/vietnam-6998583__340.jpg" alt="photo" class="md:h-300px">
            
            <p class="text-light text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex modi minima laborum deleniti cupiditate tempora similique aperiam rerum rem velit.</p>
            <a href="" class="btn-primary m-0.5 md:w-32 w-96 my-0 mx-auto">see more</a>
            
        </div>

        <div class=" pb-3 flex flex-col border">
            <img src="https://cdn.pixabay.com/photo/2022/07/07/13/57/stones-7307274__340.jpg" alt="photo" class="md:h-300px">
           
            <p class="text-light text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex modi minima laborum deleniti cupiditate tempora similique aperiam rerum rem velit.</p>
            <a href="" class="btn-primary m-0.5 md:w-32 w-96 my-0 mx-auto">see more</a>
            
        </div>
    </div>
</div>

<hr class="w-100">

<div id="contact" class="min-h-screen pt-3">

    <div class="text-center my-2">
        <h4 class="underline my-3 text-lg">How you can join me</h4>
        <div class="md:flex">
            <div class="m-2 md:w-1/3 md:m-0">

                <div>
                   <i class="bi bi-telephone-fill"></i> <span>(+225) 01-53-14-88-64</span> 
                </div>
                 <div>
                    <i class="bi bi-telephone-fill"></i> <span>(+225) 05-04-77-41-83</span>
                 </div>
                
            </div>
            <div class="m-2 md:w-1/3 md:m-0">
                <div>
                    <i class="bi bi-envelope"></i> <span>fabienbrou99@gmail.com</span>
                </div>
                <div>
                    <i class="bi bi-envelope"></i> <span>zanpolobino99@gmail.com</span>
                </div>
    
            </div>
            <div class="m-2 md:w-1/3 md:m-0">
                <i class="bi bi-linkedin"></i> <a href="https://www.linkedin.com/in/kouadio-fabien-brou" class="text-reset" target="_blank">www.linkedin.com/in/kouadio-fabien-brou</a>
            </div>
        </div>
    </div>

    <form action="" method="post" class="my-5 p-2 max-w-2xl my-0 mx-auto">
        <h3 class="underline text-lg">Or let me join you...</h3>
        <div class="group flex flex-col my-1">
            <label for="fullname" class="form-label">Fullname or how you want to be call</label>
            <input type="text" name="fullname" id="fullname" class="text-black p-1 rounded text-sky-400 text-slate-500 focus:outline-none" required>
        </div>

        <div class="group flex flex-col my-1">
            <label for="email" class="form-label">Your email address</label>
            <input type="email" name="fullname" id="fullname" class="text-black p-1 rounded text-sky-400 text-slate-500 focus:outline-none" required>
        </div>

        <div class="group flex flex-col my-1">
            <label for="contact" class="form-label">Phone number</label>
            <small class="">(you can skip)</small>
            <input type="tel" name="fullname" id="fullname" class="text-black p-1 rounded text-sky-400 text-slate-500 focus:outline-none">
        </div>

        <div class="group flex flex-col my-1">
            <label for="contact" class="form-label">Message</label>
            <small class="">(you can skip)</small>
            <textarea name="message" id="message" cols="30" rows="5" class="text-black p-1 rounded text-sky-400 text-slate-500 focus:outline-none" placeholder="little message..."></textarea>
        </div>

        <button type="submit" class="my-3 btn-primary"><i class="bi bi-send"></i> <span>Send</span></button>

    </form>
</div>