@extends('layouts.app')
@section('content')
<div class="page-header">
   <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
      <i class="mdi mdi-home"></i>
      </span> Agent
   </h3>
   <!-- <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
         <li class="breadcrumb-item active" aria-current="page">
            <a href="{{ route('universities.create') }}" class="btn btn-gradient-primary btn-icon-text">
            <i class="mdi mdi-account-multiple-plus"></i> Add Agent </a>
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
         <!-- </li>
      </ul>
   </nav> -->
</div>
<div class="col-12">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title">New Agent</h4>
         <br>
         <form class="form-sample" action="{{ route('agents.store') }}" method="POST">
            <!-- <p class="card-description"> Personal info </p> -->
                @csrf
                    @if ($errors->any())
                        @include('themeComponents.errors', ['errors' => $errors])
                    @endif
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Business Certificate</label>
                     <div class="col-sm-9">
                        <input type="file" name="business_certificate" class="form-control" required />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">First Name</label>
                     <div class="col-sm-9">
                        <input type="text" name="first_name" class="form-control" required />
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Middle Name</label>
                     <div class="col-sm-9">
                        <input type="text" name="middle_name" class="form-control" required />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Last Name</label>
                     <div class="col-sm-9">
                        <input type="text" name="last_name" class="form-control" required />
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Email </label>
                     <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" required />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Password</label>
                     <div class="col-sm-9">
                        <input type="password" name="password" class="form-control" required />
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Phone Number </label>
                     <div class="col-sm-9">
                        <div class="input-group">
                           <div class="input-group-prepend">
                           <select name="country_code" class="form-control " required>
                                <option value="">Select</option>
                                <option value="91">+ 91</option>
                                <option value="92">+ 92</option>
                              </select>
                           </div>
                           <input name="mobile_number" type="text" class="form-control" aria-label="Text input with dropdown button" required>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Business Logo</label>
                     <div class="col-sm-9">
                     <div class="input-group">
                           <input type="file" name="business_logo" class="form-control" aria-label="Text input with dropdown button" required>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
   
            <p class="card-description"> Address </p>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Address </label>
                     <div class="col-sm-9">
                        <textarea type="text" name="address" class="form-control" required></textarea>
                       
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">City  </label>
                     <div class="col-sm-9">
                        <input type="text" name="city"  class="form-control" required />
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">State  </label>
                     <div class="col-sm-9">
                        <input type="text" name="state"  class="form-control" required />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Pin/Zip Code</label>
                     <div class="col-sm-9">
                        <input name="pincode"  type="text" class="form-control" required />
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Student Source Country </label>
                     <div class="col-sm-9">
                        <input name="student_source_country "  type="text" class="form-control" required />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Country</label>
                     <div class="col-sm-9">
                        <select name="country"  class="form-control " required>
                           <option>America</option>
                           <option>Italy</option>
                           <option>Russia</option>
                           <option>Britain</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
                     <button type="submit" class="btn btn-gradient-primary me-2 float" >Submit</button>
                      <button class="btn btn-light float">Reset</button>
         </form>
      </div>
   </div>
</div>
@endsection