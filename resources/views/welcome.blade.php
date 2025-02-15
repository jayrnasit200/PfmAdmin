@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-md-6 col-xxl-3">
      <div class="card h-md-100 ecommerce-card-min-width">
        <div class="card-header pb-0">
          <h6 class="mb-0 mt-2 d-flex align-items-center">Users</h6>
        </div>
        <div class="card-body d-flex flex-column justify-content-end">
          <div class="row">
            <div class="col">
              <p class="font-sans-serif lh-1 mb-1 fs-5">47K</p>
            </div>
            <div class="col-auto ps-0">
              <div class="echart-bar-weekly-sales h-100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-3">
      <div class="card h-md-100">
        <div class="card-header pb-0">
          <h6 class="mb-0 mt-2">Total Order</h6>
        </div>
        <div class="card-body d-flex flex-column justify-content-end">
          <div class="row justify-content-between">
            <div class="col-auto align-self-end">
              <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4K</div><span class="badge rounded-pill fs-11 bg-200 text-primary"><span class="fas fa-caret-up me-1"></span>13.6%</span>
            </div>
            <div class="col-auto ps-0 mt-n4">
              <div class="echart-default-total-order" data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"0","left":"10px"}}' data-echart-responsive="true"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  
  </div>
  <div class="row g-0">
    <div class="col-lg-6 pe-lg-2 mb-3">
      <div class="card h-lg-100 overflow-hidden">
        <div class="card-header bg-body-tertiary">
          <div class="row align-items-center">
            <div class="col">
              <h6 class="mb-0">Running Projects</h6>
            </div>
            <div class="col-auto text-center pe-x1"><select class="form-select form-select-sm">
                <option>Working Time</option>
                <option>Estimated Time</option>
                <option>Billable Time</option>
              </select></div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
            <div class="col ps-x1 py-1 position-static">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl me-3">
                  <div class="avatar-name rounded-circle bg-primary-subtle text-dark"><span class="fs-9 text-primary">F</span></div>
                </div>
                <div class="flex-1">
                  <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Falcon</a><span class="badge rounded-pill ms-2 bg-200 text-primary">38%</span></h6>
                </div>
              </div>
            </div>
            <div class="col py-1">
              <div class="row flex-end-center g-0">
                <div class="col-auto pe-2">
                  <div class="fs-10 fw-semi-bold">12:50:00</div>
                </div>
                <div class="col-5 pe-x1 ps-2">
                  <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar rounded-pill" style="width: 38%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
            <div class="col ps-x1 py-1 position-static">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl me-3">
                  <div class="avatar-name rounded-circle bg-success-subtle text-dark"><span class="fs-9 text-success">R</span></div>
                </div>
                <div class="flex-1">
                  <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Reign</a><span class="badge rounded-pill ms-2 bg-200 text-primary">79%</span></h6>
                </div>
              </div>
            </div>
            <div class="col py-1">
              <div class="row flex-end-center g-0">
                <div class="col-auto pe-2">
                  <div class="fs-10 fw-semi-bold">25:20:00</div>
                </div>
                <div class="col-5 pe-x1 ps-2">
                  <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar rounded-pill" style="width: 79%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
            <div class="col ps-x1 py-1 position-static">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl me-3">
                  <div class="avatar-name rounded-circle bg-info-subtle text-dark"><span class="fs-9 text-info">B</span></div>
                </div>
                <div class="flex-1">
                  <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Boots4</a><span class="badge rounded-pill ms-2 bg-200 text-primary">90%</span></h6>
                </div>
              </div>
            </div>
            <div class="col py-1">
              <div class="row flex-end-center g-0">
                <div class="col-auto pe-2">
                  <div class="fs-10 fw-semi-bold">58:20:00</div>
                </div>
                <div class="col-5 pe-x1 ps-2">
                  <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar rounded-pill" style="width: 90%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
            <div class="col ps-x1 py-1 position-static">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl me-3">
                  <div class="avatar-name rounded-circle bg-warning-subtle text-dark"><span class="fs-9 text-warning">R</span></div>
                </div>
                <div class="flex-1">
                  <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Raven</a><span class="badge rounded-pill ms-2 bg-200 text-primary">40%</span></h6>
                </div>
              </div>
            </div>
            <div class="col py-1">
              <div class="row flex-end-center g-0">
                <div class="col-auto pe-2">
                  <div class="fs-10 fw-semi-bold">21:20:00</div>
                </div>
                <div class="col-5 pe-x1 ps-2">
                  <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar rounded-pill" style="width: 40%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 align-items-center py-2 position-relative">
            <div class="col ps-x1 py-1 position-static">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl me-3">
                  <div class="avatar-name rounded-circle bg-danger-subtle text-dark"><span class="fs-9 text-danger">S</span></div>
                </div>
                <div class="flex-1">
                  <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Slick</a><span class="badge rounded-pill ms-2 bg-200 text-primary">70%</span></h6>
                </div>
              </div>
            </div>
            <div class="col py-1">
              <div class="row flex-end-center g-0">
                <div class="col-auto pe-2">
                  <div class="fs-10 fw-semi-bold">31:20:00</div>
                </div>
                <div class="col-5 pe-x1 ps-2">
                  <div class="progress bg-200 me-2" style="height: 5px;" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar rounded-pill" style="width: 70%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="#!">Show all projects<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
      </div>
    </div>
    <div class="col-lg-6 ps-lg-2 mb-3">
      <div class="card h-lg-100">
        <div class="card-header">
          <div class="row flex-between-center">
            <div class="col-auto">
              <h6 class="mb-0">Total Sales</h6>
            </div>
            <div class="col-auto d-flex"><select class="form-select form-select-sm select-month me-2">
                <option value="0">January</option>
                <option value="1">February</option>
                <option value="2">March</option>
                <option value="3">April</option>
                <option value="4">May</option>
                <option value="5">Jun</option>
                <option value="6">July</option>
                <option value="7">August</option>
                <option value="8">September</option>
                <option value="9">October</option>
                <option value="10">November</option>
                <option value="11">December</option>
              </select>
              <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body h-100 pe-0"><!-- Find the JS file for the following chart at: src\js\charts\echarts\total-sales.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public\assets\js\theme.js-->
          <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
        </div>
      </div>
    </div>
  </div>


  <div class="row g-0">
    <div class="col-md-6 col-xxl-3 pe-md-2 mb-3 mb-xxl-0">
      <div class="card">
        <div class="card-header d-flex flex-between-center bg-body-tertiary py-2">
          <h6 class="mb-0">Active Users</h6>
          <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-active-user" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
            </div>
          </div>
        </div>
        <div class="card-body py-2">
          <div class="d-flex align-items-center position-relative mb-3">
            <div class="avatar avatar-2xl status-online">
              <img class="rounded-circle" src="https://prium.github.io/falcon/v3.23.0/assets/img/team/1.jpg" alt="" />
            </div>
            <div class="flex-1 ms-3">
              <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Emma Watson</a></h6>
              <p class="text-500 fs-11 mb-0">Admin</p>
            </div>
          </div>
          <div class="d-flex align-items-center position-relative mb-3">
            <div class="avatar avatar-2xl status-online">
              <img class="rounded-circle" src="https://prium.github.io/falcon/v3.23.0/assets/img/team/2.jpg" alt="" />
            </div>
            <div class="flex-1 ms-3">
              <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Antony Hopkins</a></h6>
              <p class="text-500 fs-11 mb-0">Moderator</p>
            </div>
          </div>
          <div class="d-flex align-items-center position-relative mb-3">
            <div class="avatar avatar-2xl status-away">
              <img class="rounded-circle" src="https://prium.github.io/falcon/v3.23.0/assets/img/team/3.jpg" alt="" />
            </div>
            <div class="flex-1 ms-3">
              <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Anna Karinina</a></h6>
              <p class="text-500 fs-11 mb-0">Editor</p>
            </div>
          </div>
          <div class="d-flex align-items-center position-relative mb-3">
            <div class="avatar avatar-2xl status-offline">
              <img class="rounded-circle" src="https://prium.github.io/falcon/v3.23.0/assets/img/team/4.jpg" alt="" />
            </div>
            <div class="flex-1 ms-3">
              <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">John Lee</a></h6>
              <p class="text-500 fs-11 mb-0">Admin</p>
            </div>
          </div>
          <div class="d-flex align-items-center position-relative false">
            <div class="avatar avatar-2xl status-offline">
              <img class="rounded-circle" src="https://prium.github.io/falcon/v3.23.0/assets/img/team/5.jpg" alt="" />
            </div>
            <div class="flex-1 ms-3">
              <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Rowen Atkinson</a></h6>
              <p class="text-500 fs-11 mb-0">Editor</p>
            </div>
          </div>
        </div>
        <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="app/social/followers.html">All active users<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-3 ps-md-2 order-xxl-1 mb-3 mb-xxl-0">
      <div class="card h-100">
        <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
          <h6 class="mb-0">Bandwidth Saved</h6>
          <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
            </div>
          </div>
        </div>
        <div class="card-body d-flex flex-center flex-column"><!-- Find the JS file for the following chart at: src/js/charts/echarts/bandwidth-saved.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public/https://prium.github.io/falcon/v3.23.0/assets/js/theme.js-->
          <div class="echart-bandwidth-saved" data-echart-responsive="true"></div>
          <div class="text-center mt-3">
            <h6 class="fs-9 mb-1"><span class="fas fa-check text-success me-1" data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
            <p class="fs-10 mb-0">38.44 GB total bandwidth</p>
          </div>
        </div>
        <div class="card-footer bg-body-tertiary py-2">
          <div class="row flex-between-center">
            <div class="col-auto"><select class="form-select form-select-sm">
                <option>Last 6 Months</option>
                <option>Last Year</option>
                <option>Last 2 Year</option>
              </select></div>
            <div class="col-auto"><a class="fs-10 font-sans-serif" href="#!">Help</a></div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  @endsection