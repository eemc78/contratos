
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>
                    <?php 
                    use \Carbon\Carbon;

                    $contr = App\Models\Contrato::where('estado','=','1')
                    ->where('fechafin','>=',  Carbon::now('America/Bogota')->toDateTimeString() )
                    ->where('fechafin','<', Carbon::now('America/Bogota')->addMonth(LAConfigs::getByKey('mesesparavencer'))->toDateTimeString()  )->count();
                     ?>
                    @if (isset($contr)) 
                      {{ $contr }}
                    @else
                      0
                    @endif
                  </h3>
                  <p>Proximos a Vencer</p>
                </div>
                <div class="icon">
                  <i class="ion ion-archive"></i>
                </div>
                <a href="{{ url('admin/contratos') }}" class="small-box-footer">Mas info... <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <?php 
                    $contr1 = App\Models\Contrato::where('estado','=','1')->count();
                     ?>
                  <h3>@if (isset($contr1)) 
                      {{$contr1}}
                    @else
                      0
                    @endif
                    <!-- <sup style="font-size: 20px">%</sup>-->
                      
                    </h3> 
                  <p>Vigentes</p>
                </div>
                <div class="icon">
                  <i class="ion ion-briefcase"></i>
                </div>
                <a href="{{ url('admin/contratos') }}" class="small-box-footer">Mas info... <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>
                    <?php 
                    $contr2 = App\Models\Contrato::where('estado','=','2')->count();
                     ?>
                    @if (isset($contr2)) 
                      {{$contr2}}
                    @else
                      0
                    @endif
                  </h3>
                  <p>Vencidos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-pricetags-outline"></i>
                </div>
                <a href="{{ url('admin/contratos') }}" class="small-box-footer">Mas info... <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col --> 
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>
                  @if (isset($contr) && isset($contr1)) 
                      {{ number_format( ( ($contr / $contr1) * 100 ) ,2) }}
                    @else
                      0
                    @endif
                   <sup style="font-size: 20px">%</sup>
                    
                  </h3>
                  <p>Porcentages</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>

                <a href="{{ url('admin/contratos') }}" class="small-box-footer">Mas info... <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->