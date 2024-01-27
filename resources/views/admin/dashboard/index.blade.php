@extends('admin.layouts.main-layout')
@section('title','Dashboard')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
        	<div class="row">
				<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="">
                                <span class="material-symbols-outlined design_services">store</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>Companies</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::table('wp_dh_companies')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="">
                                <span class="material-symbols-outlined pending">inventory</span>
                            </a>
                        </div> 
                		<div class="card-tittle">
                    		<h4>Products</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::table('wp_dh_products')->where('website' , 'lifeadvice')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="">
                                <span class="material-symbols-outlined check_box">yard</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>Plans</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::Table('wp_dh_insurance_plans')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="{{ url('admin/sales/allsale') }}">
                                <span class="material-symbols-outlined point_of_sale">point_of_sale</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>Sales</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::Table('sales')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="{{ url('admin/sales/allsale') }}">
                                <span class="material-symbols-outlined point_of_sale">point_of_sale</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>Pending Sales</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::Table('sales')->where('status' , 'Pending')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="{{ url('admin/sales/allsale') }}">
                                <span class="material-symbols-outlined point_of_sale">point_of_sale</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>Approve Sale</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::Table('sales')->where('status' , 'Approved')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="">
                                <span class="material-symbols-outlined format_quote">format_quote</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>Quotations</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::table('quotes')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="">
                                <span class="material-symbols-outlined business_messages">business_messages</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>Requests</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::Table('contactus_messages')->count() }} <small style="font-size: 8px;">Contact Requests</small></h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="">
                                <span class="material-symbols-outlined business_messages">support_agent</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>Agents</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::Table('users')->where('type' , '!=' ,'admin')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="">
                                <span class="material-symbols-outlined business_messages">unsubscribe</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>News Letters</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::Table('news_letters')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="">
                                <span class="material-symbols-outlined business_messages">help</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>FAQ</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::Table('frequesntlyaskquestions')->where('website' , 'lifeadvice')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        		<div class="col-md-2 mb-4">
            		<div class="cards">
                		<div class="card-svg">
                            <a href="">
                                <span class="material-symbols-outlined business_messages">rss_feed</span>
                            </a>
                        </div>
                		<div class="card-tittle">
                    		<h4>Blogs</h4>
                		</div>
                		<div class="card-number">
                    		<h3>{{ DB::Table('blogs')->where('website' , 'lifeadvice')->count() }}</h3>
                		</div>
            		</div>
        		</div>
        	</div>
        </div>
     </div>
</div>	
<style type="text/css">
	.mb-4, .my-4 {
		margin-bottom: 4rem !important;
		margin-top: -2rem;
	}

	.cards {
		padding: 20px;
		border-radius: 12px;
		background: var(--white, #FFF);
		box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.05);
		border: transparent !important;
	}
	.img {
		vertical-align: middle;
		border-style: none;
	}
	.card-tittle {
		margin-top: 10px;
	}
	.card-tittle h4 {
		font-size: 14px;
		color: #999999;
	}
	.card-number {
		margin-top: 10px;
	}
	.card-number h3 {
		font-size: 20px;
		font-weight: 700;
	}
</style>
@endsection