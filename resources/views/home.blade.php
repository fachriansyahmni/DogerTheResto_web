@extends('deskapp.dash2.base')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 order-xl-first order-last">
            <div class="card card-custom gutter-b bg-white border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between colorfull-select">
                        <div class="selectmain">
                            <select class=" w-150px bg-warning form-control">
                                <option value="1">Makanan</option>
                                <option value="2">Minuman</option>
                            </select>
                        </div>
                    
                        <div class="selectmain">
                            <select class=" w-150px bg-warning form-control">
                                <option value="1">Makanan</option>
                                <option value="2">Minuman</option>
                            </select>
                        </div>
                    
                    </div>
                </div>	
                    <div class="product-items">
                        <div class="row">
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="vendors/images/photo3.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Contoh
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="vendors/images/photo3.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Contoh
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="vendors/images/photo3.jpg" alt="ix">
                                    </div>
                                    <div class="productContent">
                                        <a href="#">
                                            Contoh
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-8 col-md-8">
             <div class="">
                <div class="card card-custom gutter-b bg-white border-0 table-contentpos">
                    <div class="card-body">
                        <div class="d-flex justify-content-between colorfull-select">
                            <div class="selectmain">
                                <label class="text-dark d-flex" >Atas Nama 
                                </label>
                                <select class="select-down form-control">
                                    <option value="1">Nama Pelanggan</option>
                                </select>
                            </div>
                        
                        <div class="d-flex flex-column selectmain">
                            <label class="text-dark d-flex" >Nomer Meja  
                                                        
                            </label>
                            <select class="select-down form-control">
                                <option value="#">Pilih Meja</option>
                                <option value="1">Meja 1</option>
                                <option value="2">Meja 2</option>
                            </select>
                        </div>
                        </div>
                    </div>	
                </div>
                <div class="card card-custom gutter-b bg-white border-0 table-contentpos">
                    <div class="card-body" >
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <label >Select Product</label>
                                <fieldset class="form-group mb-0 d-flex barcodeselection">
                                    <select class="form-control w-25" id="exampleFormControlSelect1">
                                        <option>Name</option>
                                        <option>SKU</option>
                                      </select>
                                    <input type="text" class="form-control border-dark" id="basicInput1" placeholder="">
                                </fieldset>
                            </div>
                        </div>	
                    </div>	
                        <div class="table-datapos">
                            <div class="table-responsive">
                                <table class="data-table table hover multiple-select-row nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Produk</th>
                                            <th>Jumlah</th>
                                            <th>Dikon</th>
                                            <th>Subtotal</th>
                                            <th class=" text-right no-sort"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sate Ayam Broiler</td>
                                            <td>
                                                <input type="number" value="1" class="form-control border-dark w-100px" id="basicInput2" placeholder="">
                                            </td>
                                            <td>0</td>
                                            <td>20000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Es Jeruk</td>
                                            <td>
                                                <input type="number" value="1" class="form-control border-dark w-100px" id="basicInput3" placeholder="">
                                            </td>
                                            <td>15%</td>
                                            <td>5000</td>
                                            <td>
                                                <div class="card-toolbar text-right">
                                                <a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-body" >
                            <div class="form-group row mb-0">
                                <div class="col-md-12 btn-submit d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger mr-2 confirm-delete" title="Delete">
                                        <i class="fas fa-trash-alt mr-2"></i>
                                        Suspand/Cancel
                                    </button>
                                    <button type="submit" class="btn btn-secondary white">
                                        
                                        Draft Order
                                    </button>
                                </div>
                            </div>	
                        </div>
                        
                    
                </div>	
             </div>	
         </div>
         <div class="col-xl-3 col-lg-4 col-md-4">
             <div class="card card-custom gutter-b bg-white border-0">
                <div class="card-body" >
                    <div class="shop-profile">
                        <div class="media">
                            <div class="bg-warning w-100px h-100px d-flex justify-content-center align-items-center">
                                <h2 class="mb-0 white">DTR</h2>
                            </div>
                            <div class="media-body ml-3">
                                <h3 class="title font-weight-bold">Doger The Resto</h3>
                                <p class="phoonenumber">
                                    +62877-2121-3333
                                </p>
                                <p class="adddress">
                                    Unikom, jln Dipatiukur
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="resulttable-pos">
                        <table class="table right-table">

                            <tbody>
                              <tr class="d-flex align-items-center justify-content-between">
                                <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                        Total Produk
                                </th>
                                <td class="border-0 justify-content-end d-flex text-dark font-size-base">2</td>
                                
                              </tr>
                              <tr class="d-flex align-items-center justify-content-between">
                                <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                        Subtotal
                                </th>
                                <td class="border-0 justify-content-end d-flex text-dark font-size-base">Rp 25.000,-</td>
                                
                              </tr>
                              <tr class="d-flex align-items-center justify-content-between">
                                <th class="border-0 ">
                                    <div class="d-flex align-items-center font-size-h5 mb-0 font-size-bold text-dark">
                                    DISKON(65%)
                                    
                                
                                </div>
                                </th>
                                <td class="border-0 justify-content-end d-flex text-dark font-size-base">10%</td>
                                
                              </tr>
                              <tr class="d-flex align-items-center justify-content-between">
                                <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                        Pajak
                                </th>
                                <td class="border-0 justify-content-end d-flex text-dark font-size-base">Rp 10.000,-</td>
                                
                              </tr>
                              <tr class="d-flex align-items-center justify-content-between">
                                <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                      Diskon Tambahan(15%)
                                </th>
                                <td class="border-0 justify-content-end d-flex text-dark font-size-base">Rp 5.000,-</td>
                                
                              </tr>
                              <tr class="d-flex align-items-center justify-content-between item-price">
                                <th class="border-0 font-size-h5 mb-0 font-size-bold">
                                    
                                        TOTAL
                                </th>
                                <td class="border-0 justify-content-end d-flex font-size-base">Rp 31.000,-</td>
                                
                              </tr>
                        
                            </tbody>
                          </table>
                     </div>
                     <div class="d-flex justify-content-end align-items-center flex-column buttons-cash">
                        <div> 
                            <a href="#" class="btn btn-primary white mb-2"  data-toggle="modal" data-target="#payment-popup">
                                <i class="fa fa-money mr-2"></i>
                                Bayar Langsung
                            </a>
                        
                        </div>
                        <div>
                            <a href="#" class="btn btn-outline-secondary ">
                                <i class="fa fa-credit-card mr-2"></i>
                                Bayar dengan ATM/Kredit
                            </a>
                            
                        </div>
                     </div>
                </div>	
             </div>
         </div>
    </div>
</div>
@endsection
