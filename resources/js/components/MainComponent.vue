<template>
    <div class="container">
        <h1>10 Best Photo Apps For Incredible iPhone Photography (2020 Edition)</h1>
        <hr class="hr--line" noshade />
        <p>How do you capture more interesting travel photos with your iPhone? How do you avoid taking the same cliché vacation photos that everyone else takes? I recently interviewed Steffen Geldner – a talented iPhone photographer with a passion for travel. In this article, Steffen reveals 7 tips for shooting beautiful travel photos that will preserve the amazing memories of your trip. Read on to discover how to take better travel photos with your iPhone!</p>
        <img :src="image" />
        <h2>   1. Research Your Destination To Find The Best Photo Opportunities</h2>
        <p>    Before your trip, I recommend researching the destination to find the most interesting photo opportunities.</p>
        <p>    I always research the location I’m traveling to. I do this extensively and obsessively!</p>
        <p>    It’s up to you how much research you do. But you should definitely spend a bit of time looking up some great places to take pictures.</p>
        <p>    So, what kind of research can you do?</p>
        <p>    First, you could search for photos that other people have taken at the locations you’re planning to visit.</p>
        <p>    Search on Instagram or Google to get an idea of the kinds of photos people take there.</p>
        <h2>    2. Capture Your Journey To Tell The Complete Story Of Your Travels</h2>
        <p>    Travel photography isn’t just about photographing the destination.</p>
        <p>    For a more complete photographic story, capture your journey to and from the location you’re visiting.</p>
        <p>    If you’re traveling by plane, try to get a window seat where you have a view of the wing or propeller.</p>
        <p>    And of course, you could capture a beautiful aerial view of clouds, mountains, or city lights as you’re flying above.</p>
        <p>    Your journey will often involve several different types of transport. And they all offer great photo opportunities.</p>
        <p>    Whether you’re traveling by car, taxi, bus, train, boat, or plane, try to capture some interesting photos.</p>
    </div>
</template>
<script>
    import image from "../../assets/img/26226_travel-photos.png"
    export default {
        data: function () {
            return {
                image: image
            }
        }
    }
</script>
<style lang="css" scoped>
    .container {
        width: 560px;
        float: left;
        margin-top: 3.75em;
    }
    /*// Medium devices (tablets, less than 992px)*/
    @media (max-width: 899.98px) {
        .container {
            width: 100%;
            float: none;
        }
        .container img {
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
        }
    }
</style>
