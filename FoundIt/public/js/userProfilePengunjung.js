document.addEventListener("DOMContentLoaded", () => {

    // Code Viewport
    const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);

    const container_post = document.getElementById("container-post");
    const lost_post_barang = document.getElementById("lost-post-barang");
    const found_post_barang = document.getElementById("found-post-barang");

    
    if(viewportWidth < 1024){

        // Logic Switch Post (Mobile - Desktop)
        const lost_post = document.getElementById("lost-post");
        const found_post = document.getElementById("found-post");
        const switcher_post = document.getElementById("switcher-post");

        // Event Listener Switch (Mobile - Tablet)
        lost_post.addEventListener("click", () => {
            switch_lost_animation()
            changePostAnimation()
        });
        
        found_post.addEventListener("click", () => {
            switch_found_animation()
            changePostAnimation()
        });

        function switch_found_animation(){
            lost_post.classList.add("text-[#BDC1C2]");
            lost_post.classList.remove("text-white");

            found_post.classList.remove("text-[#BDC1C2]")
            found_post.classList.add("text-white")

            lost_post.classList.remove("pointer-events-none")
            found_post.classList.add("pointer-events-none")

            switcherMoveAnimation()
        };

        function switch_lost_animation(){
            found_post.classList.remove("text-white");
            found_post.classList.add("text-[#BDC1C2]");

            lost_post.classList.remove("text-[#BDC1C2]");
            lost_post.classList.add("text-white");

            lost_post.classList.add("pointer-events-none")
            found_post.classList.remove("pointer-events-none")

            switcherMoveAnimation()
        };

        function switcherMoveAnimation(){
            switcher_post.classList.toggle("opacity-80");
            
            setTimeout(() => {  
                switcher_post.classList.toggle("translate-x-full");
                switcher_post.classList.toggle("opacity-80");
            }, 700);
        }

        function changePostAnimation(){
            document.body.style.overflow = 'hidden';
            container_post.classList.add("translate-y-[300%]")

            setTimeout(() => {  
                changePostFeeds()
                container_post.classList.remove("translate-y-[300%]")
                document.body.style.overflow = 'visible';
            }, 1000);
        }

        function changePostFeeds(){
            lost_post_barang.classList.toggle("grid")
            lost_post_barang.classList.toggle("hidden")
            found_post_barang.classList.toggle("grid")
            found_post_barang.classList.toggle("hidden")
        }
    
    } else if (viewportWidth >= 1024){

        // Logic Dropdown Profile (Desktop)
        const dropdown_trigger = document.getElementById("dropdown-trigger");
        const dropdown_menu = document.getElementById("dropdown-menu");
        
        dropdown_trigger.addEventListener("mouseover", () => {
            dropdown_menu.classList.remove("hidden")
            
            setTimeout(() => {  
                dropdown_menu.classList.remove("opacity-0")
            }, 0);
        });
        
        dropdown_trigger.addEventListener("mouseout", () => {
            dropdown_menu.classList.add("hidden")
            
            setTimeout(() => {  
                dropdown_menu.classList.add("opacity-0")
            }, 0);
        });
        
        // Event Listener Switch (Desktop)
        const lost_post_desktop = document.getElementById("lost-post-desktop");
        const found_post_desktop = document.getElementById("found-post-desktop");
        const switcher_post_desktop = document.getElementById("switcher-post-desktop");
    
        lost_post_desktop.addEventListener("click", () => {
            switch_lost_animation_desktop()
            changePostAnimation_desktop()
        });
        
        found_post_desktop.addEventListener("click", () => {
            switch_found_animation_desktop()
            changePostAnimation_desktop()
        });

        function switch_found_animation_desktop(){
            lost_post_desktop.classList.add("text-[#BDC1C2]");
            lost_post_desktop.classList.remove("text-white");

            found_post_desktop.classList.remove("text-[#BDC1C2]")
            found_post_desktop.classList.add("text-white")

            lost_post_desktop.classList.remove("pointer-events-none")
            found_post_desktop.classList.add("pointer-events-none")

            switcherMoveAnimation_desktop()
        };

        function switch_lost_animation_desktop(){
            found_post_desktop.classList.remove("text-white");
            found_post_desktop.classList.add("text-[#BDC1C2]");

            lost_post_desktop.classList.remove("text-[#BDC1C2]");
            lost_post_desktop.classList.add("text-white");

            lost_post_desktop.classList.add("pointer-events-none")
            found_post_desktop.classList.remove("pointer-events-none")

            switcherMoveAnimation_desktop()
        };

        function switcherMoveAnimation_desktop(){
            switcher_post_desktop.classList.toggle("opacity-80");
            
            setTimeout(() => {  
                switcher_post_desktop.classList.toggle("translate-x-full");
                switcher_post_desktop.classList.toggle("opacity-80");
            }, 700);
        }

        function changePostAnimation_desktop(){
            // document.body.style.overflow = 'hidden';

            container_post.classList.add("translate-y-[300%]")

            setTimeout(() => {  
                changePostFeeds_desktop()
                container_post.classList.remove("translate-y-[300%]")
                // document.body.style.overflow = 'visible';
            }, 1000);
        }

        function changePostFeeds_desktop(){
            lost_post_barang.classList.toggle("grid")
            lost_post_barang.classList.toggle("hidden")
            found_post_barang.classList.toggle("grid")
            found_post_barang.classList.toggle("hidden")
        }

    }

})







