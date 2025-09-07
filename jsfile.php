<script>
    document.addEventListener("DOMContentLoaded", () => {
        const brand = document.querySelector(".brand");
        if (!brand) return;

        const inner = brand.querySelectorAll(".to-animate");

        const observer = new IntersectionObserver(([entry]) => {
            if (entry.isIntersecting && entry.intersectionRatio >= 1) {
                inner.forEach(el => {
                    // 清掉之前可能殘留的 animate__* class
                    el.classList.forEach(c => {
                        if (c.startsWith("animate__")) el.classList.remove(c);
                    });

                    // 強制重排讓移除生效
                    void el.offsetWidth;

                    // 加回指定的動畫 + delay + base
                    const anim = el.dataset.animation;
                    const delay = el.dataset.delay;
                    if (anim) el.classList.add(anim);
                    if (delay) el.classList.add(delay);
                    el.classList.add("animate__animated");

                    // 顯示
                    el.classList.remove("opacity-0");
                    // 拿掉 .to-animate 的 opacity 覆蓋
                    // 或用el.style.opacity = ""; 
                });
                observer.unobserve(brand);
            }
        }, {
            threshold: [1.0]
        });

        observer.observe(brand);
    });
</script>
<script src="./css/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="gotop.js"></script>
<script type="text/javascript" src="jslib.js"></script>