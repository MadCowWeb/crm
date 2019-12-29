@extends('layouts.master')

@section('title')
    Create A New Client
@endsection

@section('content')

<form method="POST" action="/clients">
    {{ csrf_field() }}
        <div class="form-groups">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="company_name">Company Name</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="Company name"
                           name="company_name"
                           id="company_name"
                           tabindex="1"
                           value=""
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="company_address1">Address 1</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="Address 1"
                           name="company_address1"
                           id="company_address1"
                           tabindex="2"
                           value=""
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="company_address2">Address 2</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="Address 2"
                           name="company_address2"
                           id="company_address2"
                           tabindex="3"
                           value=""
                           >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="company_city">City</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="City"
                           name="company_city"
                           id="company_city"
                           tabindex="4"
                           value=""
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="company_state">State</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="State"
                           name="company_state"
                           id="company_state"
                           tabindex="5"
                           value=""
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="company_zip">Zip</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="Zip"
                           name="company_zip"
                           id="company_zip"
                           tabindex="6"
                           value=""
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="primary_contact_first">First Name</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="First Name"
                           name="primary_contact_first"
                           id="primary_contact_first"
                           tabindex="7"
                           value=""
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="primary_contact_last">Last Name</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="Last Name"
                           name="primary_contact_last"
                           id="primary_contact_last"
                           tabindex="8"
                           value=""
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="primary_phone">Phone</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="Phone"
                           name="primary_phone"
                           id="primary_phone"
                           tabindex="9"
                           value=""
                           required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="primary_email">Email</label>
                <div class="col-sm-9">
                    <input class="form-control"
                           type="text"
                           placeholder="Email"
                           name="primary_email"
                           id="primary_email"
                           tabindex="10"
                           value=""
                           required>
                </div>
            </div>
       <div class="text-right">
          <a href="/clients/" class="btn btn-primary"
             role="button" tabindex="7">Cancel</a>
          <button role="button" class="btn btn-primary" type="submit" tabindex="8">
              Save
          </button>
        </div>


    </form>
</div>

@endsection
