
//-------------animation when scrolling----------------
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);



//---------------mobile nav toggle-----------------------
document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('header');
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const closeicon = document.querySelector('.close-icon');

    // Toggle header display
    function toggleHeaderPosition() {
        const currentTransform = window.getComputedStyle(header).getPropertyValue('transform');
        const isHeaderShifted = currentTransform === 'matrix(1, 0, 0, 1, 300, 0)';
        
        header.style.transform = isHeaderShifted ? 'translateX(0)' : 'translateX(300px)';
        closeicon.style.display = 'inline-flex'
        closeicon.style.transform = isHeaderShifted ? 'translateX(0)' : 'translateX(320px)';
    }

    // Toggle header close
    function toggleHeaderClose() {
        const currentTransform = window.getComputedStyle(header).getPropertyValue('transform');
        const isHeaderShifted = currentTransform === 'matrix(1, 0, 0, 1, 300, 0)';

        header.style.transform = isHeaderShifted ? 'translateX(0)' : 'translateX(-300px)';
    }

    // mobile-nav-toggle click
    mobileNavToggle.addEventListener('click', toggleHeaderPosition);
    closeicon.addEventListener('click', toggleHeaderClose)


    // clicks outside of the navbar
    document.body.addEventListener('click', function (event) {
        const isClickInsideNavbar = document.querySelector('.navbar').contains(event.target) ||
        document.querySelector('.mobile-nav-toggle').contains(event.target) ||
        document.querySelector('.close-icon').contains(event.target);

        if (!isClickInsideNavbar) {
            // Replace the following lines with the appropriate code to close your navbar
            // For example, if your navbar has a class 'navbar-collapse', you can use the following:
            document.querySelector('.navbar-collapse').classList.remove('show');
        }
    });


    // Check the window width on resize
    window.addEventListener('resize', function () {
        if (window.innerWidth > 1198) {
            header.style.transform = 'translateX(0)';
            closeicon.style.display = 'none'; 
        } else {
            closeicon.style.display = 'inline-flex'; 
        }
    });
});


//----------menu item click active----------------
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link");

    function handleLinkClick(event) {
        links.forEach(function (link) {
            link.classList.remove("active");
        });
        event.target.classList.add("active");
    }

    links.forEach(function (link) {
        link.addEventListener("click", handleLinkClick);
    });

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <= window.innerHeight / 2 &&
            rect.bottom >= window.innerHeight / 2
        );
    }

    function handleScroll() {
        let currentSectionId = "";

        document.querySelectorAll("section").forEach(function (section) {
            if (isElementInViewport(section)) {
                currentSectionId = section.id;
            }
        });

        links.forEach(function (link) {
            link.classList.remove("active");
        });

        const activeLink = document.querySelector(
            `.nav-link[href="#${currentSectionId}"]`
        );
        if (activeLink) {
            activeLink.classList.add("active");
        }
    }
    
    handleScroll();

    window.addEventListener("scroll", handleScroll);
});





