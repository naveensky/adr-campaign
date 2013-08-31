@extends('layouts.common')
@section('content')
<script type="text/javascript" xmlns="http://www.w3.org/1999/html">

    //code for adding
    $(document).ready(function () {
        $('#addMore').click(function () {
            var count = $(this).data('count');
            if ($(this).data('count') == 3) {
                alert('Only three files are allowed')
                return false;
            }

            $(this).data('count', count + 1);
            var text = $('#addFileInput').html();
            $('#addFilesDiv').append(text);
        });

        $("#campaignForm").validate({
            rules: {
                name: "required",
                mobile: "required",
                email: {
                    required: true,
                    email: true
                },
                address: "required"

            },
            messages: {
                name: "Please enter employee name",
                mobile: "Please enter mobile number",
                email: {email: "Please enter a valid email address", required: "Please provide email id"},
                address: "Please enter your address"
            }
        });

    });


</script>


<div class="row">
    <?php $message = Session::get('message');?>
    <?php $validationClass = AppHtmlHelper::getValidationClass(Session::get('status'))?>
    <?php $name = Input::old('name');
    $mobile = Input::old('mobile');
    $email = Input::old('email');
    $address = Input::old('address');
    $city = Input::old('city');
    $state = Input::old('state');
    ?>

    <?php if (!empty($message)) echo "<div class=\"$validationClass\">$message <button type='button' class='close' data-dismiss='alert'>×</button></div>"; else echo "";?>


    <div class="col-lg-12 well">
        <form name="campaignForm" method="post" enctype="multipart/form-data" id="campaignForm"
              action="<% URL::to('/campaign/add') %>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name"
                       value="<% $name %>">
            </div>
            <% $errors->first('name', '<div class="alert-error alert margin-top-10">:message</div>')%>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                       value="<% $email %>">
            </div>
            <% $errors->first('email', '<div class="alert-error alert margin-top-10">:message</div>')%>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter your mobile" name="mobile"
                       value="<% $mobile %>">
            </div>
            <% $errors->first('email', '<div class="alert-error alert margin-top-10">:message</div>')%>
            <div class="form-group">
                <label for="mobile">Address</label>
                <textarea name="address" class="form-control" id="address" placeholder="Enter your address"

                          rows="7"><%$address%></textarea>
            </div>
            <% $errors->first('address', '<div class="alert-error alert margin-top-10">:message</div>')%>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" value="<% $city %>" placeholder="Enter your city"
                       name="city">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" value="<% $state %>" placeholder="Enter your state"
                       name="state">
            </div>
            <div class="form-group">
                <select class="form-control">
                    <option value="0">Select Category</option>
                    <option value="1">Music</option>
                    <option value="2">Video</option>
                </select>
            </div>
            <div class="form-group">
                <div id="addFilesDiv">
                    <label for="campaignFiles">File input</label>
                    <input type="file" id="campaignFiles" class="required" accept="video/*,audio/*"
                           name="campaignFiles[]">
                </div>

            </div>
            <div class="form-group">
                <button id="addMore" data-count=1 type="button" class="btn btn-info"> Add More</button>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>

<div id="addFileInput" style="display: none">
    <br/>

    <input type="file" id="campaignFiles" name="campaignFiles[]"  accept="video/*,audio/*">
</div>
@stop