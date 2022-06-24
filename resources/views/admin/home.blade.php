@extends('../template/app')
@section('content')
@can('isAdmin')
<div class="home mt-3">
  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div>
                          <p class="statistics-title">Total Nasabah</p>
                          <h3 class="rate-percentage">{{ $nasabah }}</h3>
                        </div>
                        <div>
                          <p class="statistics-title">Total Tabungan Simpan</p>
                          <h3 class="rate-percentage">@php
                              $hasil = 0;
                              foreach ($totalsimpan as $key) {
                                $hasil += $key->jumlah;
                              }
                               echo 'Rp '.number_format($hasil);
                          @endphp</h3>
                          {{-- <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p> --}}
                        </div>
                        <div>
                          <p class="statistics-title">Total Transaksi Masuk</p>
                          <h3 class="rate-percentage">{{ $totalmasuk }}</h3>
                          {{-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> --}}
                        </div>
                      </div>
                    </div>
                  </div> 
                  {{-- <div class="row">
                    <div class="col-lg-8 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                 <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                 <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                </div>
                                <div id="performance-line-legend"></div>
                              </div>
                              <div class="chartjs-wrapper mt-5">
                                <canvas id="performaneLine"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                          <div class="card bg-primary card-rounded">
                            <div class="card-body pb-0">
                              <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                              <div class="row">
                                <div class="col-sm-4">
                                  <p class="status-summary-ight-white mb-1">Closed Value</p>
                                  <h2 class="text-info">357</h2>
                                </div>
                                <div class="col-sm-8">
                                  <div class="status-summary-chart-wrapper pb-4">
                                    <canvas id="status-summary"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                    <div class="circle-progress-width">
                                      <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                    </div>
                                    <div>
                                      <p class="text-small mb-2">Total Visitors</p>
                                      <h4 class="mb-0 fw-bold">26.80%</h4>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="circle-progress-width">
                                      <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                    </div>
                                    <div>
                                      <p class="text-small mb-2">Visits per day</p>
                                      <h4 class="mb-0 fw-bold">9065</h4>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 d-flex flex-column">
                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                  <h4 class="card-title card-title-dash">Market Overview</h4>
                                 <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                </div>
                                <div>
                                  <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                      <h6 class="dropdown-header">Settings</h6>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                                <div class="me-3"><div id="marketing-overview-legend"></div></div>
                              </div>
                              <div class="chartjs-bar-wrapper mt-3">
                                <canvas id="marketingOverview"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                </div>
      </div>
@elsecan('isTeller')
<h1>Selamat Datang Teller</h1>
@elsecan('isAuthor')
<h1>Selamat Datang Admin</h1>
@endcan
@endsection