<template>
    <transition name="modal">
        <div class="modal modal--mask" v-show="value">
            <div class="modal--wrapper">
                <div class="modal__container">
                    <div>
                        <span class="close" @click="close"></span>
                    </div>
                        <div class="steps">
                            Step {{step}} of 2
                        </div>
                        <div v-if="step === 1">
                            <hr class="hr--line hr__line__step1" noshade />
                            <h3>Enter Your Email To Get <span class="free">FREE</span>
                                iPhone Photography Email Tips:</h3>
                            <form action="#">
                                <div :class="['field',isEmailValid() ? 'error' : 'valid']">
                                    <input type="email" name="email" id="email" v-model="email" placeholder=" ">
                                    <label for="email" class="email__placeholder" v-if="!isEmailValid()">Please enter your email here</label>
                                    <label for="email" class="email__invalid" v-else="isEmailValid()">Please enter a valid email address</label>
                                </div>
                            </form>
                            <button class="btn btn__send__tips" @click.prevent="next()">Send Me The Tips</button>
                        </div>
                        <div v-if="step === 2">
                            <hr class="hr--line hr__line__step2" noshade />
                            <h3>Thank you for subscribing to iPhone Photography Email Tips</h3>
                        </div>
                </div>
            </div>
        </div>
    </transition>
</template>
<script>
    export default {
        name: 'Modal',
        props: {
            value: {
                required: true
            }
        },
        data() {
            return {
                step:1,
                email: '',
                reg: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/,
            }
        },
        methods: {
            isEmailValid: function() {
                return (this.email === "") ? "" : (this.reg.test(this.email)) ? 0 : 1;
            },
            close() {
                this.step=1;
                this.$emit("input", !this.value);
            },
            next() {
                if (!this.isEmailValid() && this.email !== "")
                    this.step++;
            }
        }
    };
</script>
<style lang="css" scoped>
    #email {
        box-shadow: inset 0px -1px 2px 0px rgba(142, 142, 142, 0.5);
        padding-top: 0.1em;
        padding-bottom: .4em;
        padding-left: .5em;
    }
    .modal--mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: table;
        transition: opacity 0.3s ease;
    }
    .modal--wrapper {
        display: table-cell;
        vertical-align: middle;
    }
    .modal__container {
        width: 570px;
        height: 310px;
        margin: 0px auto;
        padding: 20px 50px 26px;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
        transition: all 0.3s ease;
        position: relative;
    }
    .modal__container h3 {
        display: inline-block;
        text-align: center;
        color: #464646;
        padding-left: 3em;
        padding-right: 3em;
    }
    .modal-enter {
        opacity: 0;
    }
    .modal-leave-active {
        opacity: 0;
    }
    .modal-enter .modal__container,
    .modal-leave-active .modal__container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
    .btn__send__tips {
        background: linear-gradient(90deg, #AC519C 0.83%, #E5424F 100%);
        box-shadow: 0px 3px 10px rgba(104, 104, 104, 0.5);

        width: 100%;
        margin-top: 1.75em;
        height: 2.5em;
        font-size: 18px;
        line-height: 22px;
        /* identical to box height */

        text-align: center;
        border: none;
        color: #FFFFFF;
    }
    .btn__send__tips:hover {
        background: linear-gradient(90deg, #B678AA 1.29%, #E28990 100%);
        box-shadow: 0px 3px 10px rgba(104, 104, 104, 0.5);
    }
    .field {
        display: flex;
        flex-flow: column-reverse;
        margin-bottom: 1em;
        background: #FFFFFF;
        box-shadow: inset 0px 1px 5px rgba(142, 142, 142, 0.5);
    }
    label, input {
        transition: all 0.2s;
        touch-action: manipulation;
        color: #828282;
        font-weight: 300;
    }
    input {
        font-size: 1.5em;
        border: 0;
        /*border-bottom: 1px solid #ccc;*/
        font-family: inherit;
        -webkit-appearance: none;
        border-radius: 0;
        padding: 0;
        cursor: text;
    }
    input:focus {
        outline: 0;
    }
    input:placeholder-shown + label {
        cursor: text;
        max-width: 66.66%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        transform-origin: left bottom;
        transform: translate(0, 1.525rem) scale(1.5);
    }
    ::-webkit-input-placeholder {
        opacity: 0;
        transition: inherit;
    }
    input:focus::-webkit-input-placeholder {
        opacity: 1;
    }
    input:not(:placeholder-shown) + label,
    input:focus + label {
        transform: translate(0, 0) scale(1);
        cursor: pointer;
        padding-left: 0.7em;
    }
    .close {
        position: relative;
        width: 20px;
        height: 20px;
        margin-right: -10px;
        margin-top: -10px;
        font-size: 38px;
        line-height: 46px;
    }
    .close:before, .close:after {
        position: absolute;
        left: 15px;
        content: ' ';
        height: 28px;
        width: 5px;
        background-color: #464646;
        font-weight: bolder;
    }
    .close:before {
        transform: rotate(45deg);
    }
    .close:after {
        transform: rotate(-45deg);
    }
    .steps {
        text-align: center;
        line-height: 17px;
        color: #848484;
        margin-bottom: 1em;
    }
    .close {
        float: right;
    }
    .hr--line{
        background: linear-gradient(90deg, #AC519C 0.83%, #E5424F 100%);
        box-shadow: 0px 3px 10px rgba(104, 104, 104, 0.5);
        height: 1px;
        width: 50%;
    }
    .hr__line__step1 {
        float: left;
    }
    .hr__line__step2 {
        float: right;
    }
    .line {
        display: flex;
    }
    .free {
        color: green;
    }
    .error, .email__invalid, .error #email {
        color: red;
    }
    .email__invalid, .email__placeholder{
        padding-left: 0.7em;
    }
    .valid #email {
        color: black;
    }

    @media (max-width: 720px) {
        .modal__container {
            width: 85%;
            padding-left: 1em;
            padding-right: 1em;
        }
        .modal__container h3 {
            padding-left: 0.5em;
            padding-right: 0.5em;
            font-size: 1.25em;
        }
        .btn__send__tips {
            margin-top: 1em;
        }
        .close:before, .close:after {
            left: 0;
        }
        label {
            font-size: 0.8em;
        }
    }
</style>