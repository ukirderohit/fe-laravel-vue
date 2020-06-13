<template>
    <div class="tips-wrapper">
        <div>
            <button class="btn btn-send-tips" @click="openModal">Send Me The Tips</button>
            <modal-direction v-model="modalOpen"></modal-direction>
        </div>
    </div>
</template>
<script>
    import ModalDirection from './Modal.vue';
    export default {
        components: {
            'modal-direction': ModalDirection
        },
        data() {
            return {
                modalOpen: false
            }
        },
        methods: {
            openModal() {
                this.modalOpen = !this.modalOpen;
            }
        }
    };
</script>
<style lang="css" scoped>
    .tips-wrapper {
        background: #F5F5F5;
        width: 270px;
        float: right;
        margin-top: 9.62em;
        height: 40em;
    }
    .tips-wrapper button {
        margin-left: 1.56em;
        margin-right: 1.56em;
        margin-top: 3.12em;
        width: 13.75em;
        height: 2.5em;
        border: none;
        color: #ffffff;
    }
    .btn-send-tips {
        background: linear-gradient(90deg, #AC519C 0.83%, #E5424F 100%);
        box-shadow: 0px 3px 10px rgba(104, 104, 104, 0.5);
        width: 100%;
    }
    /*// Medium devices (tablets, less than 992px)*/
    @media (max-width: 489.98px) {
        .tips-wrapper button {
            width: 80% !important;
        }
    }
    /*// Medium devices (tablets, less than 992px)*/
    @media (max-width: 899.98px) {
        .tips-wrapper {
            width: 100%;
            float: none;
            height: 26.6em;
        }
        .tips-wrapper button {
            height: 3.125em;
            width: 90%;
            padding: 0;
        }
    }
</style>