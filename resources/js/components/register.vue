<template>

<div>

     <div :class="['form-group', errors.name ? ' has-danger' : '' ]">

                                <div class="input-group input-group-alternative mb-3">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input :class="[errors.name ? ' is-invalid' : '', 'form-control' ]" placeholder="Name" type="text" name="name"  required autofocus>
                                </div>
                                    <span v-if="errors.name" class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ errors.name }}</strong>
                                    </span>
                            </div>


                            <div :class="['form-group', errors.full_name ? ' has-danger' : ''] ">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input :class="['form-control', errors.full_name ? ' is-invalid' : '' ]" placeholder="Full Name" type="text" name="full_name" required autofocus>
                                </div>
                                    <span v-if="errors.full_name" class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ errors.full_name }}</strong>
                                    </span>
                            </div>


                            <div :class="['form-group', errors.email ? ' has-danger' : '' ]">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input :class="['form-control', errors.email ? ' is-invalid' : '']" placeholder="Email" type="email" name="email" required>
                                </div>
                                    <span v-if="errors.email" class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ errors.email }}</strong>
                                    </span>
                            </div>


                            <div :class="[ 'form-group', errors.headline ? ' has-danger' : '' ]">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input :class="['form-control', errors.headline ? ' is-invalid' : '' ]" placeholder="Headline" type="text" name="headline"  required autofocus>
                                </div>
                                    <span v-if="errors.headline" class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ errors.headline }}</strong>
                                    </span>
                            </div>


                             <div :class="['form-group', errors.bio ? ' has-danger' : ''] ">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <textarea :class="['form-control', errors.bio ? ' is-invalid' : '' ]" placeholder="Bio" type="text" name="bio" required autofocus></textarea>
                                </div>
                                    <span v-if="errors.full_name" class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ errors.full_name }}</strong>
                                    </span>
                            </div>




                            <div :class="['form-group', errors.password ? ' has-danger' : ''] ">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input v-model="password" :class="['form-control', errors.password ? ' is-invalid' : '' ]" placeholder="Password" type="password" name="password" required>
                                </div>
                                    <span v-if="errors.password" class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ errors.password }}</strong>
                                    </span>
                            </div>


                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input v-model="confirmPwd" class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" required>
                                </div>
                                
                                <span :class="pwdConfirmClassWhichConfirmsPassword" style="display: block; margin:10px 0 0 10px" role="alert">
                                    <sub>{{ confirmMsg }}</sub>
                                </span>
                            </div>
                            <div class="text-muted font-italic">
                                <small>password strength: <span :class="[pwdStrengthClass, 'font-weight-700']">{{ pwdStrength }}</span></small>
                            </div>


                            <!-- <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4" :disabled='submitDisable'>Create account</button>
                            </div>

</div>

</template>

<script>


export default {

    props: {
        'errors': {required:true},
        'old': {required:true},
    },
    data() {
        return {
            value: '',
            password: '',
            confirmPwd: '',
            pwdStrengthClass: '',
            pwdConfirmClassWhichConfirmsPassword: '',
        };
    },
    computed: {
        pwdStrength: function () {
            if (this.password == '') {
                this.pwdStrengthClass = 'text-info'
                return 'Enter password'
            } else if (this.password.match('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{16,})')) {
                this.pwdStrengthClass = 'text-success' 
                return 'Very Strong'
            } else if (this.password.match('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{12,})')) {
                this.pwdStrengthClass = 'text-success'
                return 'Strong'
            } else if (this.password.match('^(?=.*[a-z])(?=.*[A-Z])(?=.{8,})')) {
                this.pwdStrengthClass = 'text-alert'
                return 'Medium'
            } else if (this.password.match('^(?=.*[a-z])(?=.{5,})')) {
                this.pwdStrengthClass = 'text-danger'
                return 'Weak'
            } else {
                this.pwdStrengthClass = 'text-danger'
                return 'Very Weak'
            }
        },
        confirmMsg: function () {
            if (this.password.length < 8) {
                this.pwdConfirmClassWhichConfirmsPassword = "invalid-feedback"
                return '';
            }
            if (this.password == this.confirmPwd) {
                this.pwdConfirmClassWhichConfirmsPassword = "valid-feedback"
                return 'Passwords Match'
            } else {
                return 'Passwords do not match'
            }
        },
        submitDisable: function(){

            if ( (this.password.length >= 8) && (this.confirmPwd == this.password) && this.name!='' && this.email!='' ){
                return false
            }
            else{
                return true
            }
        },
    },
};
</script>
