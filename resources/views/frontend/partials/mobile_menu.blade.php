<div id="nt_menu_canvas"
  class="nt_fk_canvas nt_sleft dn lazyload">
  <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
  <div class="mb_nav_tabs flex al_center mb_cat_true">
    <div class="mb_nav_title pr mb_nav_ul flex al_center fl_center active"
      data-id="#kalles-section-mb_nav_js">
      <span class="db truncate"> {{ 'Menu' }}</span>
    </div>
    <div class="mb_nav_title pr mb_nav_ul flex al_center fl_center "
      data-id="#kalles-section-mb_nav_js2">
      <span class="db truncate">{{ 'Categories' }}</span>
    </div>

  </div>
  <div id="kalles-section-mb_nav_js"
    class="mb_nav_tab active">
    <div id="kalles-section-mb_nav"
      class="kalles-section">
      <ul id="menu_mb_ul"
        class="nt_mb_menu">

        <li class=" menu-item menu-item-btns menu-item-home">
          <a
            href="{{ route('frontend.home') }}"><span>{{ 'Home' }}</span></a>
        </li>
        <li class="menu-item menu-item-btns menu-item-home">
          <a target="_blank"
            href="https://imzueyl.com"><span>{{ 'About' }}</span></a>
        </li>
        <li class="menu-item menu-item-btns menu-item-home">
          <a target="_blank"
            href="https://imzueyl.com"><span>Contact</span></a>
        </li>

        <li class="menu-item menu-item-infos">
          <p class="menu_infos_title">Need help?</p>
          <div class="menu_infos_text">
            <i class="pegk pe-7s-call fwb mr__10"></i>+01312733791<br><i
              class="pegk pe-7s-mail fwb mr__10"></i>zuyel76@gmail.com
          </div>
        </li>

      </ul>
    </div>
  </div>
  <div id="kalles-section-mb_nav_js2"
    class="mb_nav_tab">
    <div id="kalles-section-mb_nav"
      class="kalles-section">
      <ul id="menu_mb_ul"
          class="nt_mb_menu">
          @foreach ($categories as $category)
            @if (count($category->subcategories) > 0)
              <li class="menu-item menu-item-has-children ">

                <a href="{{ route('categoryproductsen', $category->category_slug_en) }}"
                  class=""><span class="nav_link_txt iconbtns {{ $category->icon }}">
                    {{ $category->category_name_en }}</span><span class="nav_link_icon ml__5"></span></a>
                <ul class="sub-menu">
                  @foreach ($category->subcategories as $subcategory)
                    @if (count($subcategory->subsubcategories) > 0)
                      <li class="menu-item menu-item-has-children ">
                        <a
                          href="{{ route('subcategoryproductsen', ['category' => $category->category_slug_en,'subcategory' => $subcategory->subcategory_slug_en]) }}"><span
                            class="nav_link_txt flex al_center">{{ $subcategory->subcategory_name_en }}</span><span
                            class="nav_link_icon ml__5"></span></a>
                        <ul class="sub-sub-menu">
                          @foreach ($subcategory->subsubcategories as $subsubcategory)
                            <li class="menu-item">
                              <a
                                href="{{ route('subsubcategoryproductsen', ['category' => $category->category_slug_en,'subcategory' => $subcategory->subcategory_slug_en,'subsubcategory' => $subsubcategory->subsubcategory_slug_en]) }}">{{ $subsubcategory->subsubcategory_name_en }}</a>
                            </li>
                          @endforeach


                        </ul>
                      </li>
                    @else
                      <li class="menu-item  only_icon_false">
                        <a
                          href="{{ route('subcategoryproductsen', ['category' => $category->category_slug_en,'subcategory' => $subcategory->subcategory_slug_en]) }}"><span
                            class="nav_link_txt flex al_center">{{ $subcategory->subcategory_name_en }}</span><span
                            class="nav_link_icon ml__5"></span></a>

                      </li>
                    @endif
                  @endforeach

                </ul>
              </li>
            @else
              <li class="menu-item ">

                <a href="{{ route('categoryproductsen', $category->category_slug_en) }}"
                  class=""><span class="nav_link_txt iconbtns {{ $category->icon }}">
                    {{ $category->category_name_en }}</span><span class="nav_link_icon ml__5"></span></a>


              </li>
            @endif
          @endforeach

        </ul>
    </div>
  </div>
</div>
