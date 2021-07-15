<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
<script>
    gsap.registerPlugin(TextPlugin);
     gsap.to(".lead", {
        duration: 2,
        delay: 1.5,
        text: "Road to RAPIMNAS PII 2021",
    });
    gsap.from(".right-column img", {
        duration: 1.5,
        y: "-100%",
        opacity: 0,
        ease: "bounce",
    });
</script>
<script src="{{ asset('/asset/scripts/script.js') }}"></script>