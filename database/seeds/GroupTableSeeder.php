<?php

use Illuminate\Database\Seeder;
use App\Group;
use App\Role;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_list_group  = Role::where('name', 'List Groups')->first();
        $role_create_group  = Role::where('name', 'Create Group')->first();
        $role_details_group  = Role::where('name', 'Details Group')->first();
        $role_edit_group  = Role::where('name', 'Edit Group')->first();
        $role_delete_group  = Role::where('name', 'Delete Group')->first();
        $role_search_group  = Role::where('name', 'Search Group')->first();

        $role_list_role  = Role::where('name', 'List Roles')->first();
        $role_create_role  = Role::where('name', 'Create Role')->first();
        $role_details_role  = Role::where('name', 'Details Role')->first();
        $role_edit_role  = Role::where('name', 'Edit Role')->first();
        $role_delete_role  = Role::where('name', 'Delete Role')->first();
        $role_search_role  = Role::where('name', 'Search Role')->first();

        $role_list_user_group  = Role::where('name', 'List User Groups')->first();
        $role_create_user_group  = Role::where('name', 'Create User Group')->first();
        $role_details_user_group  = Role::where('name', 'Details User Group')->first();
        $role_edit_user_group  = Role::where('name', 'Edit User Group')->first();
        $role_delete_user_group  = Role::where('name', 'Delete User Group')->first();
        $role_search_user_group  = Role::where('name', 'Search User Group')->first();

        $role_list_group_role  = Role::where('name', 'List Group Roles')->first();
        $role_create_group_role  = Role::where('name', 'Create Group Role')->first();
        $role_details_group_role  = Role::where('name', 'Details Group Role')->first();
        $role_edit_group_role  = Role::where('name', 'Edit Group Role')->first();
        $role_delete_group_role  = Role::where('name', 'Delete Group Role')->first();
        $role_search_group_role  = Role::where('name', 'Search Group Role')->first();

        $role_list_user  = Role::where('name', 'List Users')->first();
        $role_create_user  = Role::where('name', 'Create User')->first();
        $role_details_user  = Role::where('name', 'Details User')->first();
        $role_edit_user  = Role::where('name', 'Edit User')->first();
        $role_delete_user  = Role::where('name', 'Delete User')->first();
        $role_search_user  = Role::where('name', 'Search User')->first();

        $role_list_news  = Role::where('name', 'List News')->first();
        $role_create_news  = Role::where('name', 'Create News')->first();
        $role_details_news  = Role::where('name', 'Details News')->first();
        $role_edit_news  = Role::where('name', 'Edit News')->first();
        $role_delete_news  = Role::where('name', 'Delete News')->first();
        $role_search_news  = Role::where('name', 'Search News')->first();

        $role_list_gallery  = Role::where('name', 'List Galleries')->first();
        $role_create_gallery  = Role::where('name', 'Create Gallery')->first();
        $role_details_gallery  = Role::where('name', 'Details Gallery')->first();
        $role_edit_gallery  = Role::where('name', 'Edit Gallery')->first();
        $role_delete_gallery  = Role::where('name', 'Delete Gallery')->first();
        $role_search_gallery  = Role::where('name', 'Search Gallery')->first();

        $role_list_event  = Role::where('name', 'List Events')->first();
        $role_create_event  = Role::where('name', 'Create Event')->first();
        $role_details_event  = Role::where('name', 'Details Event')->first();
        $role_edit_event  = Role::where('name', 'Edit Event')->first();
        $role_delete_event  = Role::where('name', 'Delete Event')->first();
        $role_search_event  = Role::where('name', 'Search Event')->first();

        $role_list_staff  = Role::where('name', 'List Staff')->first();
        $role_create_staff  = Role::where('name', 'Create Staff')->first();
        $role_details_staff  = Role::where('name', 'Details Staff')->first();
        $role_edit_staff  = Role::where('name', 'Edit Staff')->first();
        $role_delete_staff  = Role::where('name', 'Delete Staff')->first();
        $role_search_staff  = Role::where('name', 'Search Staff')->first();

        $role_list_category  = Role::where('name', 'List Categories')->first();
        $role_create_category  = Role::where('name', 'Create Category')->first();
        $role_details_category  = Role::where('name', 'Details Category')->first();
        $role_edit_category  = Role::where('name', 'Edit Category')->first();
        $role_delete_category  = Role::where('name', 'Delete Category')->first();
        $role_search_category  = Role::where('name', 'Search Category')->first();

        $role_list_kependudukan  = Role::where('name', 'List Kependudukan')->first();
        $role_create_kependudukan  = Role::where('name', 'Create Kependudukan')->first();
        $role_details_kependudukan  = Role::where('name', 'Details Kependudukan')->first();
        $role_edit_kependudukan  = Role::where('name', 'Edit Kependudukan')->first();
        $role_delete_kependudukan  = Role::where('name', 'Delete Kependudukan')->first();
        $role_search_kependudukan  = Role::where('name', 'Search Kependudukan')->first();

        $role_list_slider  = Role::where('name', 'List Sliders')->first();
        $role_create_slider  = Role::where('name', 'Create Slider')->first();
        $role_details_slider  = Role::where('name', 'Details Slider')->first();
        $role_edit_slider  = Role::where('name', 'Edit Slider')->first();
        $role_delete_slider  = Role::where('name', 'Delete Slider')->first();
        $role_search_slider  = Role::where('name', 'Search Slider')->first();

        $role_list_rule  = Role::where('name', 'List Rules')->first();
        $role_create_rule  = Role::where('name', 'Create Rule')->first();
        $role_details_rule  = Role::where('name', 'Details Rule')->first();
        $role_edit_rule  = Role::where('name', 'Edit Rule')->first();
        $role_delete_rule  = Role::where('name', 'Delete Rule')->first();
        $role_search_rule  = Role::where('name', 'Search Rule')->first();

        $role_list_top_up  = Role::where('name', 'List Top Up')->first();
        $role_create_top_up  = Role::where('name', 'Create Top Up')->first();
        $role_details_top_up  = Role::where('name', 'Details Top Up')->first();
        $role_edit_top_up  = Role::where('name', 'Edit Top Up')->first();
        $role_delete_top_up  = Role::where('name', 'Delete Top Up')->first();
        $role_search_top_up  = Role::where('name', 'Search Top Up')->first();

        $role_list_download  = Role::where('name', 'List Downloads')->first();
        $role_create_download  = Role::where('name', 'Create Download')->first();
        $role_details_download  = Role::where('name', 'Details Download')->first();
        $role_edit_download  = Role::where('name', 'Edit Download')->first();
        $role_delete_download  = Role::where('name', 'Delete Download')->first();
        $role_search_download  = Role::where('name', 'Search Download')->first();

        $role_list_forum  = Role::where('name', 'List Forums')->first();
        $role_create_forum  = Role::where('name', 'Create Forum')->first();
        $role_details_forum  = Role::where('name', 'Details Forum')->first();
        $role_edit_forum  = Role::where('name', 'Edit Forum')->first();
        $role_delete_forum  = Role::where('name', 'Delete Forum')->first();
        $role_search_forum  = Role::where('name', 'Search Forum')->first();

        $role_list_iklan  = Role::where('name', 'List Iklans')->first();
        $role_create_iklan  = Role::where('name', 'Create Iklan')->first();
        $role_details_iklan  = Role::where('name', 'Details Iklan')->first();
        $role_edit_iklan  = Role::where('name', 'Edit Iklan')->first();
        $role_delete_iklan  = Role::where('name', 'Delete Iklan')->first();
        $role_search_iklan  = Role::where('name', 'Search Iklan')->first();

        $role_list_sponsor  = Role::where('name', 'List Sponsors')->first();
        $role_create_sponsor  = Role::where('name', 'Create Sponsor')->first();
        $role_details_sponsor  = Role::where('name', 'Details Sponsor')->first();
        $role_edit_sponsor  = Role::where('name', 'Edit Sponsor')->first();
        $role_delete_sponsor  = Role::where('name', 'Delete Sponsor')->first();
        $role_search_sponsor  = Role::where('name', 'Search Sponsor')->first();

        $role_list_contact_info  = Role::where('name', 'List Contact Infos')->first();
        $role_create_contact_info  = Role::where('name', 'Create Contact Info')->first();
        $role_details_contact_info  = Role::where('name', 'Details Contact Info')->first();
        $role_edit_contact_info  = Role::where('name', 'Edit Contact Info')->first();
        $role_delete_contact_info  = Role::where('name', 'Delete Contact Info')->first();
        $role_search_contact_info  = Role::where('name', 'Search Contact Info')->first();

        $role_list_slider  = Role::where('name', 'List Sliders')->first();
        $role_create_slider  = Role::where('name', 'Create Slider')->first();
        $role_details_slider  = Role::where('name', 'Details Slider')->first();
        $role_edit_slider  = Role::where('name', 'Edit Slider')->first();
        $role_delete_slider  = Role::where('name', 'Delete Slider')->first();
        $role_search_slider  = Role::where('name', 'Search Slider')->first();

        $role_list_berita  = Role::where('name', 'List Beritas')->first();
        $role_create_berita  = Role::where('name', 'Create Berita')->first();
        $role_details_berita  = Role::where('name', 'Details Berita')->first();
        $role_edit_berita  = Role::where('name', 'Edit Berita')->first();
        $role_delete_berita  = Role::where('name', 'Delete Berita')->first();
        $role_search_berita  = Role::where('name', 'Search Berita')->first();

        $role_list_event  = Role::where('name', 'List Events')->first();
        $role_create_event  = Role::where('name', 'Create Event')->first();
        $role_details_event  = Role::where('name', 'Details Event')->first();
        $role_edit_event  = Role::where('name', 'Edit Event')->first();
        $role_delete_event  = Role::where('name', 'Delete Event')->first();
        $role_search_event  = Role::where('name', 'Search Event')->first();

        $role_list_category  = Role::where('name', 'List Categories')->first();
        $role_create_category  = Role::where('name', 'Create Category')->first();
        $role_details_category  = Role::where('name', 'Details Category')->first();
        $role_edit_category  = Role::where('name', 'Edit Category')->first();
        $role_delete_category  = Role::where('name', 'Delete Category')->first();
        $role_search_category  = Role::where('name', 'Search Category')->first();

        $role_list_guide  = Role::where('name', 'List Guides')->first();
        $role_create_guide  = Role::where('name', 'Create Guide')->first();
        $role_details_guide  = Role::where('name', 'Details Guide')->first();
        $role_edit_guide  = Role::where('name', 'Edit Guide')->first();
        $role_delete_guide  = Role::where('name', 'Delete Guide')->first();
        $role_search_guide  = Role::where('name', 'Search Guide')->first();
        
        $group = new Group();
        $group->id = 1;
        $group->name = 'Admin Master';
        $group->save();
        
        $group->roles()->attach($role_list_group);
        $group->roles()->attach($role_create_group);
        $group->roles()->attach($role_details_group);
        $group->roles()->attach($role_edit_group);
        $group->roles()->attach($role_delete_group);
        $group->roles()->attach($role_search_group);
        
        $group->roles()->attach($role_list_role);
        $group->roles()->attach($role_create_role);
        $group->roles()->attach($role_details_role);
        $group->roles()->attach($role_edit_role);
        $group->roles()->attach($role_delete_role);
        $group->roles()->attach($role_search_role);
        
        $group->roles()->attach($role_list_user_group);
        $group->roles()->attach($role_create_user_group);
        $group->roles()->attach($role_details_user_group);
        $group->roles()->attach($role_edit_user_group);
        $group->roles()->attach($role_delete_user_group);
        $group->roles()->attach($role_search_user_group);
        
        $group->roles()->attach($role_list_group_role);
        $group->roles()->attach($role_create_group_role);
        $group->roles()->attach($role_details_group_role);
        $group->roles()->attach($role_edit_group_role);
        $group->roles()->attach($role_delete_group_role);
        $group->roles()->attach($role_search_group_role);

        $group->roles()->attach($role_list_user);
        $group->roles()->attach($role_create_user);
        $group->roles()->attach($role_details_user);
        $group->roles()->attach($role_edit_user);
        $group->roles()->attach($role_delete_user);
        $group->roles()->attach($role_search_user);

        $group->roles()->attach($role_list_news);
        $group->roles()->attach($role_create_news);
        $group->roles()->attach($role_details_news);
        $group->roles()->attach($role_edit_news);
        $group->roles()->attach($role_delete_news);
        $group->roles()->attach($role_search_news);

        $group->roles()->attach($role_list_gallery);
        $group->roles()->attach($role_create_gallery);
        $group->roles()->attach($role_details_gallery);
        $group->roles()->attach($role_edit_gallery);
        $group->roles()->attach($role_delete_gallery);
        $group->roles()->attach($role_search_gallery);

        $group->roles()->attach($role_list_event);
        $group->roles()->attach($role_create_event);
        $group->roles()->attach($role_details_event);
        $group->roles()->attach($role_edit_event);
        $group->roles()->attach($role_delete_event);
        $group->roles()->attach($role_search_event);

        $group->roles()->attach($role_list_staff);
        $group->roles()->attach($role_create_staff);
        $group->roles()->attach($role_details_staff);
        $group->roles()->attach($role_edit_staff);
        $group->roles()->attach($role_delete_staff);
        $group->roles()->attach($role_search_staff);

        $group->roles()->attach($role_list_category);
        $group->roles()->attach($role_create_category);
        $group->roles()->attach($role_details_category);
        $group->roles()->attach($role_edit_category);
        $group->roles()->attach($role_delete_category);
        $group->roles()->attach($role_search_category);  

        $group->roles()->attach($role_list_kependudukan);
        $group->roles()->attach($role_create_kependudukan);
        $group->roles()->attach($role_details_kependudukan);
        $group->roles()->attach($role_edit_kependudukan);
        $group->roles()->attach($role_delete_kependudukan);
        $group->roles()->attach($role_search_kependudukan);  

        $group->roles()->attach($role_list_slider);
        $group->roles()->attach($role_create_slider);
        $group->roles()->attach($role_details_slider);
        $group->roles()->attach($role_edit_slider);
        $group->roles()->attach($role_delete_slider);
        $group->roles()->attach($role_search_slider);  

        $group->roles()->attach($role_list_rule);
        $group->roles()->attach($role_create_rule);
        $group->roles()->attach($role_details_rule);
        $group->roles()->attach($role_edit_rule);
        $group->roles()->attach($role_delete_rule);
        $group->roles()->attach($role_search_rule);  

        $group->roles()->attach($role_list_top_up);
        $group->roles()->attach($role_create_top_up);
        $group->roles()->attach($role_details_top_up);
        $group->roles()->attach($role_edit_top_up);
        $group->roles()->attach($role_delete_top_up);
        $group->roles()->attach($role_search_top_up); 

        $group->roles()->attach($role_list_download);
        $group->roles()->attach($role_create_download);
        $group->roles()->attach($role_details_download);
        $group->roles()->attach($role_edit_download);
        $group->roles()->attach($role_delete_download);
        $group->roles()->attach($role_search_download);  

        $group->roles()->attach($role_list_forum);
        $group->roles()->attach($role_create_forum);
        $group->roles()->attach($role_details_forum);
        $group->roles()->attach($role_edit_forum);
        $group->roles()->attach($role_delete_forum);
        $group->roles()->attach($role_search_forum); 

        $group->roles()->attach($role_list_iklan);
        $group->roles()->attach($role_create_iklan);
        $group->roles()->attach($role_details_iklan);
        $group->roles()->attach($role_edit_iklan);
        $group->roles()->attach($role_delete_iklan);
        $group->roles()->attach($role_search_iklan);   

        $group->roles()->attach($role_list_sponsor);
        $group->roles()->attach($role_create_sponsor);
        $group->roles()->attach($role_details_sponsor);
        $group->roles()->attach($role_edit_sponsor);
        $group->roles()->attach($role_delete_sponsor);
        $group->roles()->attach($role_search_sponsor);     
        
        $group->roles()->attach($role_list_contact_info);
        $group->roles()->attach($role_create_contact_info);
        $group->roles()->attach($role_details_contact_info);
        $group->roles()->attach($role_edit_contact_info);
        $group->roles()->attach($role_delete_contact_info);
        $group->roles()->attach($role_search_contact_info);          

        $group->roles()->attach($role_list_slider);
        $group->roles()->attach($role_create_slider);
        $group->roles()->attach($role_details_slider);
        $group->roles()->attach($role_edit_slider);
        $group->roles()->attach($role_delete_slider);
        $group->roles()->attach($role_search_slider);  

        $group->roles()->attach($role_list_berita);
        $group->roles()->attach($role_create_berita);
        $group->roles()->attach($role_details_berita);
        $group->roles()->attach($role_edit_berita);
        $group->roles()->attach($role_delete_berita);
        $group->roles()->attach($role_search_berita);  

        $group->roles()->attach($role_list_event);
        $group->roles()->attach($role_create_event);
        $group->roles()->attach($role_details_event);
        $group->roles()->attach($role_edit_event);
        $group->roles()->attach($role_delete_event);
        $group->roles()->attach($role_search_event);  

        $group->roles()->attach($role_list_category);
        $group->roles()->attach($role_create_category);
        $group->roles()->attach($role_details_category);
        $group->roles()->attach($role_edit_category);
        $group->roles()->attach($role_delete_category);
        $group->roles()->attach($role_search_category);  

        $group->roles()->attach($role_list_guide);
        $group->roles()->attach($role_create_guide);
        $group->roles()->attach($role_details_guide);
        $group->roles()->attach($role_edit_guide);
        $group->roles()->attach($role_delete_guide);
        $group->roles()->attach($role_search_guide);  

    }
}
