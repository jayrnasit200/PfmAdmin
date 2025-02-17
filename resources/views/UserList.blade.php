@extends('layouts.app')

@section('title')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-md-12 col-xxl-3">
      <div class="card h-md-100 ecommerce-card-min-width">
        <div class="card-header pb-0">
          <h6 class="mb-0 mt-2 d-flex align-items-center">Users</h6>
         

        </div>
        <div class="card-body d-flex flex-column justify-content-end">
          
          <div class="row">
            <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
              <table class="table table-bordered table-striped fs--1">
                <thead class="bg-200 text-900">
                  <tr>
                    <th class="sort" data-sort="name">Name</th>
                    <th class="sort" data-sort="email">Email</th>
                    <th class="sort" data-sort="age">Age</th>
                    <th class="sort" data-sort="age">view</th>
                    <th class="sort" data-sort="age">Delete</th>

                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td class="name">Anna</td>
                    <td class="email">anna@example.com</td>
                    <td class="age">18</td>
                    <td class="age"><a href="" class="btn btn-primary"><i class="far fa-clone"></i></a></td>
                    <td class="age"><a onclick="deletedata('test url','delete user..')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>
                  </tr>
                 
                </tbody>
              </table>
              <div class="d-flex justify-content-center"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  
  
  </div>



  @endsection