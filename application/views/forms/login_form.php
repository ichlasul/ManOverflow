<?php

echo validation_errors() ? '<div class="alert alert-danger">' . validation_errors() . '</div>' : '';
echo !empty($error) ? '<div class="alert alert-danger">' . $error . '</div>' : '';
echo form_open('', array('class' => 'form-signin'));
echo form_input(array(
                    'name'        => 'NIP',
                    'class'       => 'form-control',
                    'placeholder' => 'NIP',
                    'maxlength'   => '16',
                    'required'    => '',
                    'autofocus'   => ''
                ));
echo form_password(array(
                    'name'        => 'Password',
                    'class'       => 'form-control',
                    'placeholder' => 'Password',
                    'maxlength'   => '32',
                    'required'    => ''
                ));
echo '<div class="checkbox"> <label>';
echo form_checkbox(array(
                    'name'        => 'remember-me',
                    'value'       => 'yes',
                    'checked'     => 'TRUE',
                ));
echo ' Ingat Saya</label> </div>';
echo form_submit(array(
                    'class'       => 'btn btn-lg btn-primary btn-block',
                    'value'       => 'Log In',
                    'type'        => 'submit'));
echo form_close();