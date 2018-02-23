@extends('main')
@section('title', '| contact')

@section('content')

           <div class="row">
                <div class="col-md-12">
                <h3>contact  Me</h3>
                <hr>
                <form>
                    <div class="form-group">
                    <label name="email"> EMail:</label>
                    <input id="email" name="email" class="form-control">
                     <div class="form-group">
                    <label name="subject"> Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                     <div class="form-group">
                    <label name="message"> Message:</label>
                    <textarea id="message" name="message" class="form-control"> Type your Message Here...</textarea>
                    </br></br>
                    <input type="submit" value="Send Message"  class="btn btn-success">
                        
                    </div>
                </form>
                

                 </div>

            </div>

         </div>
@endsection