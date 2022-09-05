<x-app-layout>
    <div class="flex flex-col justify-center h-full">
        <div class="mx-auto lg:w-4/5 lg:h-full md:h-full w-full h-auto">
            <!-- Slider main container -->
            <div class="swiper h-full">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper h-full">
                    <!-- Slides -->
                    @foreach($images as $image)
                        <div class="swiper-slide h-full flex justify-center items-center">
                            <img src="{{Storage::url($image->img_path)}}" class="lg:h-full md:h-full h-auto w-auto">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev" style="color: #96C6CB;"></div>
                <div class="swiper-button-next" style="color: #96C6CB;"></div>
            </div>
        </div>

    </div>

</x-app-layout>
<script type="module">
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
</script>
