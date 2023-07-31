document.addEventListener("DOMContentLoaded", () => {

    // Code Viewport
    const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
    
    if (viewportWidth >= 1024){

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

    }

})
