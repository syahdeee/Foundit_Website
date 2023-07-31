// Code Viewport
const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
const viewportHeight = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);

document.addEventListener("DOMContentLoaded", () => {

    // Load Image (Mobile - Tablet)
    const loadFileMobile = function(event) {

        if (viewportWidth < 1024){

            // Logic Show Image
            let image_target = document.getElementById('target-image-mobile');
            const img_placeholder = document.getElementById('logo-placeholder-mobile');
            image_target.src = URL.createObjectURL(event.target.files[0]);
            img_placeholder.classList.add("hidden");
        }

    };

    // Load Image (Desktop)
    const loadFileDesktop = function(event) {

        if (viewportWidth >= 1024){

            // Logic Show Image
            let image_target_desktop = document.getElementById('target-image-desktop');
            const img_placeholder_desktop = document.getElementById('logo-placeholder-desktop');
            image_target_desktop.src = URL.createObjectURL(event.target.files[0]);
            img_placeholder_desktop.classList.add("hidden");
        }

    };

    if (viewportWidth < 1024){

        // Logic Load Image
        const inputGambarMobile = document.getElementById('input-gambar-mobile');
        inputGambarMobile.addEventListener('change', loadFileMobile);

        // Logic Change form (Phone-Tablet)
        const form_hilang_temu = document.getElementById("form-hilang-temu")
        const judul_temu = document.querySelector(".judul-temu");
        const judul_hilang = document.querySelector(".judul-hilang");
        const rewards = document.querySelector(".rewards-hilang");
        const lokasi = document.querySelector(".lokasi-temu");
        const radio_hilang = document.getElementById("barang-hilang");
        const radio_temu = document.getElementById("barang-temu");
    
        const nav_temu = document.querySelector(".nav-temu");
        const nav_hilang = document.querySelector(".nav-hilang");
        const slide_span = document.querySelector(".slide-span");
    
        nav_temu.addEventListener("click", () => {
            scrollTop()
    
            slide_span.classList.remove("translate-x-full")
    
            nav_temu.classList.remove("text-[#BDC1C2]")
            nav_temu.classList.add("text-[#8D9EFF]")
    
            nav_hilang.classList.remove("text-[#8D9EFF]")
            nav_hilang.classList.add("text-[#BDC1C2]")
    
            changeFormAnimation()
    
            nav_temu.classList.add("pointer-events-none")
            nav_hilang.classList.remove("pointer-events-none")
    
            radio_hilang.checked = false
            radio_temu.checked = true
    
            console.log(`Radio Hilang : ${radio_hilang.checked}`)
            console.log(`Radio Temu : ${radio_temu.checked}`)
        })
    
        nav_hilang.addEventListener("click", () => {
            scrollTop()
    
            slide_span.classList.add("translate-x-full")
    
            nav_hilang.classList.remove("text-[#BDC1C2]")
            nav_hilang.classList.add("text-[#8D9EFF]")
    
            nav_temu.classList.remove("text-[#8D9EFF]")
            nav_temu.classList.add("text-[#BDC1C2]")
    
            changeFormAnimation()
    
            nav_hilang.classList.add("pointer-events-none")
            nav_temu.classList.remove("pointer-events-none")
    
            radio_hilang.checked = true
            radio_temu.checked = false
    
            console.log(`Radio Hilang : ${radio_hilang.checked}`)
            console.log(`Radio Temu : ${radio_temu.checked}`)
        })
    
        function changeFormAnimation(){
            form_hilang_temu.classList.add("translate-y-full")
    
            setTimeout(() => {  
                form_hilang_temu.classList.remove("translate-y-full")
    
                changeFormInput()
            }, 700);
    
        }
    
        function changeFormInput(){
            judul_hilang.classList.toggle("hidden")
            judul_temu.classList.toggle("hidden")
            rewards.classList.toggle("hidden")
            lokasi.classList.toggle("hidden")
        }
    
        function scrollTop(){
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    
    } else if (viewportWidth >= 1024){

        // Logic Load Image (Desktop)
        const inputGambarDesktop = document.getElementById('input-gambar-desktop');
        inputGambarDesktop.addEventListener('change', loadFileDesktop);

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

        // Change Form
        const swithcer = document.querySelector(".switcher")
        const switch_hilang = document.querySelector(".switch-hilang")
        const switch_temu = document.querySelector(".switch-temu")

        const form_desktop = document.getElementById("form-hilang-temu-desktop")
        const judul_hilang_desktop = document.getElementById("judul-hilang-desktop")
        const judul_temu_desktop = document.getElementById("judul-temu-desktop")

        const reward_desktop = document.getElementById("reward-hilang-desktop")
        const lokasi_desktop = document.getElementById("lokasi-temu-desktop")

        const radio_hilang_desktop = document.getElementById("barang-hilang-desktop");
        const radio_temu_desktop = document.getElementById("barang-temu-desktop");
        
        switch_temu.addEventListener("click", () => {
            swithcer.classList.add("translate-x-full")
        
            switch_temu.classList.toggle("text-[#BDC1C2]")
            switch_temu.classList.toggle("text-white")
            switch_hilang.classList.toggle("text-[#BDC1C2]")
            switch_hilang.classList.toggle("text-white")
        
            switch_hilang.classList.toggle("pointer-events-none")
            switch_temu.classList.toggle("pointer-events-none")

            radio_hilang_desktop.checked = false
            radio_temu_desktop.checked = true
    
            changeDesktopFormAnimation()

            console.log(`Radio Hilang : ${radio_hilang_desktop.checked}`)
            console.log(`Radio Temu : ${radio_temu_desktop.checked}`)
        })
        
        switch_hilang.addEventListener("click", () => {
            swithcer.classList.remove("translate-x-full")
            
            switch_temu.classList.toggle("text-[#BDC1C2]")
            switch_temu.classList.toggle("text-white")
            
            switch_hilang.classList.toggle("text-[#BDC1C2]")
            switch_hilang.classList.toggle("text-white")
            
            switch_hilang.classList.toggle("pointer-events-none")
            switch_temu.classList.toggle("pointer-events-none")

            radio_hilang_desktop.checked = true
            radio_temu_desktop.checked = false
        
            changeDesktopFormAnimation()

            console.log(`Radio Hilang : ${radio_hilang_desktop.checked}`)
            console.log(`Radio Temu : ${radio_temu_desktop.checked}`)
        })

        function changeDesktopFormAnimation(){
            
            form_desktop.classList.add("scale-0")

            setTimeout(() => {  
                form_desktop.classList.remove("scale-0")

                changeFormInputDesktop()
            }, 700);
    
        }

        function changeFormInputDesktop(){
            judul_hilang_desktop.classList.toggle("hidden")
            judul_temu_desktop.classList.toggle("hidden")
            reward_desktop.classList.toggle("hidden")
            lokasi_desktop.classList.toggle("hidden")
        }

    }

})





