 <nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="index.html"><img class="logo_icon img-responsive" src="{{asset('images/logo/logo_icon.png')}}" alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><img class="img-responsive" src="{{asset('images/layout_img/user_img.jpg')}}" alt="#" /></div>
             <div class="user_info">
               
                   
               @auth
               <h6>{{Auth::user()->name}}</h6>  
               @endauth
                
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>General</h4>
       <ul class="list-unstyled components">
          <li class="active">
             <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
             <ul class="collapse list-unstyled" id="dashboard">
                <li>
                   <a href="{{route('categories.create')}}"> <span>nouvelle categorie</span></a>
                </li>
                <li>
                   <a href="{{route('categories.index')}}"> <span>liste des categories</span></a>
                </li>
                <li>
                  <a href="{{route('produits.create')}}"> <span>nouveau produit</span></a>
               </li>
               <li>
                  <a href="{{route('produits.index')}}"> <span>liste des produits</span></a>
               </li>
               <li>
                  <a href="{{route('fournisseurs.create')}}"> <span>nouveau fournisseur</span></a>
               </li>
               <li>
                  <a href="{{route('fournisseurs.index')}}"> <span>liste des fournisseurs</span></a>
               </li>
              
               <li>
                  <a href="{{route('factureclients.create')}}"> <span>nouvelle facture client</span></a>
               </li>
               <li>
                  <a href="{{route('factureclients.index')}}"> <span>liste des factures client</span></a>
               </li>
               <li>
                  <a href="{{route('commandes.create')}}"> <span>nouvelle commande</span></a>
               </li>
               <li>
                  <a href="{{route('commandes.index')}}"> <span>liste des commandes</span></a>
               </li>
               <li>
                  <a href="{{route('clients.create')}}"><span>nouvelle client</span></a>
               </li>
               <li>
                  <a href="{{route('clients.index')}}"> <span>liste des clients</span></a>
               </li>
               <li>
                  <a href="{{route('facturefournisseurs.create')}}"> <span>nouvelle facturefournisseur</span></a>
               </li>
               <li>
                  <a href="{{route('facturefournisseurs.index')}}"> <span>liste des facturefournisseurs</span></a>
               </li>
               <li>
                  <a href="{{route('factureclients.create')}}"> <span>nouvelle client</span></a>
               </li>
               <li>
                  <a href="{{route('factureclients.index')}}"> <span>liste des clients</span></a>
               </li>
             </ul>
          </li>
         
           </ul>
    </div>
    
    
 </nav>