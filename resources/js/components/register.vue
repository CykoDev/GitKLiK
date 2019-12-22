<template>

<div>

     <div :class="['form-group', errors.name ? ' has-danger' : '' ]">

                                <div class="input-group input-group-alternative mb-3">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input :class="[errors.name ? ' is-invalid' : '', 'form-control' ]" placeholder="Name" type="text" name="name" :value=" old.name " required autofocus>
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
                                    <input :class="['form-control', errors.full_name ? ' is-invalid' : '' ]" placeholder="Full Name" type="text" name="full_name" :value="old.name" required autofocus>
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
                                    <input :class="['form-control', errors.email ? ' is-invalid' : '']" placeholder="Email" type="email" name="email" :value="old.email" required>
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
                                    <input :class="['form-control', errors.headline ? ' is-invalid' : '' ]" placeholder="Headline" type="text" name="headline" :value="old.headline" required autofocus>
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
                                    <textarea :class="['form-control', errors.bio ? ' is-invalid' : '' ]" placeholder="Bio" type="text" name="bio" :value="old.bio" required autofocus></textarea>
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
                                    <input :class="['form-control', errors.password ? ' is-invalid' : '' ]" placeholder="Password" type="password" name="password" required>
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
                                    <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="text-muted font-italic">
                                <small>password strength <span class="text-success font-weight-700">strong</span></small>
                            </div>
                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">I agree with the<a href="#!">Privacy Policy</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Create account</button>
                            </div>

</div>

</template>

<script>
export default {

    props: {
        'errors': {required:true},
        'old': {required:true},
    },

};
</script>
