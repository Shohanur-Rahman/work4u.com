<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('pages.index');
Route::get('/contact-us', 'PagesController@contact_page')->name('contact_page');
Route::get('/about-us', 'PagesController@about_us_page')->name('about_us_page');
Route::post('/send_message', 'PagesController@send_contact_message')->name('send_contact_message');
Route::get('/faq', 'PagesController@faq_page')->name('faq_page');
Route::get('/privacy-policy', 'PagesController@privacy_policy')->name('privacy_policy_page');
Route::get('/terms-conditions', 'PagesController@terms_condition')->name('terms_condition_page');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'study'], function () {
	Route::get('/countries', 'admin\StudyCountryController@user_country_list')->name('user_study_country');
	Route::get('countries/{countryname}/{id}/offers', 'admin\StudyCountryController@user_study_offeres')->name('user_study_offeres');
	Route::get('countries/{countryname}/{countryid}/offers/{id}/details', 'admin\StudyOfferController@user_study_offeres_details')->name('user_study_offeres_details');
	Route::post('/save-comments', 'StudyOfferCommentsController@save_comments')->name('study_offer_comments');
	Route::get('countries/{countryname}/{countryid}/offers/{id}/application', 'admin\StudyOfferController@user_study_offeres_application')->name('user_study_offeres_application');
	Route::post('/application', 'admin\StudyOfferController@send_application')->name('send_application');
});


Route::group(['prefix' => 'jobs'], function () {
	Route::get('/countries', 'admin\job\JobCountriesController@user_job_countries')->name('user_job_countries');
	Route::get('countries/{countryname}/{id}/offers', 'admin\job\JobOffersController@user_job_offeres')->name('user_job_offeres');
	Route::get('countries/{countryname}/{countryid}/offers/{id}/details', 'admin\job\JobOffersController@user_job_offeres_details')->name('user_job_offeres_details');
	Route::post('/save-comments', 'admin\job\JobCommentsController@save_comments')->name('job_offer_comments');
	Route::get('countries/{countryname}/{countryid}/offers/{id}/application', 'admin\job\JobOffersController@user_job_offeres_application')->name('user_job_offeres_application');

	Route::post('/application', 'admin\job\JobOffersController@send_application')->name('job_send_application');
});

Route::group(['prefix' => 'immigrations'], function () {
	Route::get('/countries', 'admin\immigration\ImmigrationOffersController@user_immigrationm_countries')->name('user_immigrationm_countries');
	Route::get('countries/{countryname}/{id}/offers', 'admin\immigration\ImmigrationOffersController@user_immigration_offeres')->name('user_immigration_offeres');
	Route::get('countries/{countryname}/{countryid}/offers/{id}/details', 'admin\immigration\ImmigrationOffersController@user_immigration_offeres_details')->name('user_immigration_offeres_details');
	Route::post('/save-comments', 'admin\immigration\ImmigrationCommentsController@save_comments')->name('immigration_offer_comments');

	Route::get('countries/{countryname}/{countryid}/offers/{id}/application', 'admin\immigration\ImmigrationOffersController@user_immigration_offeres_application')->name('user_immigration_offeres_application');

	Route::post('/application', 'admin\immigration\ImmigrationOffersController@send_application')->name('immigration_send_application');
});





Route::group(['middleware' => 'auth'], function() {

	Route::group(['prefix' => 'admin'], function () {

    	Route::get('/dashboard', 'admin\AdminController@index')->name('dashboard');
    	Route::get('/icons', 'admin\AdminController@icons')->name('dashboard_icons');

    	/*
    	*
    	*
    	* Json Data URL for chart **/



    	Route::group(['prefix' => 'json'], function () {
	    	Route::get('/get_comments_by_date', 'admin\AdminController@get_comments_by_date')->name('get_comments_by_date');
	  	});



    	Route::group(['prefix' => 'mails'], function () {
	    	Route::get('/', 'admin\UserEmailController@index')->name('mail_index');
	    	Route::post('/send_email', 'admin\UserEmailController@send_email')->name('mail_send_email');
	  	});


	  	Route::group(['prefix' => 'sms'], function () {
	    	Route::get('/', 'admin\SMSRecordsController@index')->name('sms_list');
	    	Route::get('/send-sms', 'admin\SMSRecordsController@send_sms')->name('send_sms');

	    	Route::post('/send-sms', 'admin\SMSRecordsController@send_sms_to_number')->name('send_sms_to_number');

	    	Route::get('/view-sms/{id}', 'admin\SMSRecordsController@view_sms')->name('view_sms');
	    	Route::get('/delete-sms/{id}', 'admin\SMSRecordsController@delete_sms')->name('delete_sms');
	    	Route::post('/delete_sms/{id}', 'admin\SMSRecordsController@delete_sms_post')->name('delete_sms_post');
	  	});


	  	Route::group(['prefix' => 'faq'], function () {
	    	Route::get('/', 'admin\FAQQuestionsController@index')->name('faqs.index');
	    	Route::get('/create', 'admin\FAQQuestionsController@create')->name('faqs.create');
	    	Route::post('/create', 'admin\FAQQuestionsController@store')->name('faqs.store');
	    	Route::get('{faq}/edit', 'admin\FAQQuestionsController@edit')->name('faqs.edit');

	    	Route::patch('{faq}/edit', 'admin\FAQQuestionsController@update')->name('faqs.update');

	    	Route::get('{faq}/delete', 'admin\FAQQuestionsController@delete')->name('faqs.delete');
	  	});


	  	Route::group(['prefix' => 'notifications'], function () {
	    	Route::get('/', 'NotificationsController@index')->name('notification_list');
	    	Route::get('/delete-notification/{id}', 'NotificationsController@delete_notification')->name('delete_notification');
	  	});




    	/*
    	*
    	*
    	* Admin Settings Routes ***/



	  	Route::group(['prefix' => 'settings'], function () {
	    	Route::get('/site-settings', 'admin\WebSiteSettingsController@site_settings')->name('site_settings');
	    	Route::post('/save-site-settings', 'admin\WebSiteSettingsController@save_site_settings')->name('save_site_settings');
	    	Route::post('/update-site-settings/{id}', 'admin\WebSiteSettingsController@update_site_settings')->name('update_site_settings');
	    	Route::get('/about-us-settings', 'admin\WebSiteSettingsController@about_us_settings')->name('about_us_settings');
	    	Route::post('/save-about-settings', 'admin\WebSiteSettingsController@save_about_settings')->name('save_about_settings');
	    	Route::post('/update-about-settings/{id}', 'admin\WebSiteSettingsController@update_about_settings')->name('update_about_settings');

	    	Route::get('/others-settings', 'admin\WebSiteSettingsController@others_settings')->name('others_settings');

	    	Route::get('/privacy-settings', 'admin\WebSiteSettingsController@privacy_policy')->name('privacy_policy');

	    	Route::get('/terms-conditions-settings', 'admin\WebSiteSettingsController@terms_conditions')->name('terms_conditions');

	    	Route::post('/save-others-settings', 'admin\WebSiteSettingsController@save_others_settings')->name('save_others_settings');

	    	Route::post('/update-others-settings/{id}', 'admin\WebSiteSettingsController@update_others_settings')->name('update_others_settings');

	    	Route::post('/save-privacy-settings', 'admin\WebSiteSettingsController@save_privacy_settings')->name('save_privacy_settings');

	    	Route::post('/update-privacy-settings/{id}', 'admin\WebSiteSettingsController@update_privacy_settings')->name('update_privacy_settings');

	    	Route::post('/save-terms-settings', 'admin\WebSiteSettingsController@save_terms_settings')->name('save_terms_settings');

	    	Route::post('/update-terms-settings/{id}', 'admin\WebSiteSettingsController@update_terms_settings')->name('update_terms_settings');

	  	});

    	/*
    	*
    	*Job routes for admin
    	*
    	*/

	  	Route::group(['prefix' => 'job'], function () {

	  		Route::group(['prefix' => 'benefits'], function () {

		    	Route::get('/', 'admin\job\JobBenfefitesController@index')->name('admin_job_benefits');
		    	Route::post('/save-benefit', 'admin\job\JobBenfefitesController@admin_save_benefite')->name('admin_save_benefite');
		    	Route::get('/edit-benefit/{id}', 'admin\job\JobBenfefitesController@edit_benefite')->name('admin_edit_benefite');
		    	Route::post('/update-benefit/{id}', 'admin\job\JobBenfefitesController@update_benefite')->name('admin_update_benefite');
		    	Route::get('/delete-benefit/{id}', 'admin\job\JobBenfefitesController@delete_admin_job_benefit')->name('delete_admin_job_benefit');
		    	Route::post('/delete_benefit/{id}', 'admin\job\JobBenfefitesController@delete_admin_job_benefit_post')->name('delete_admin_job_benefit_post');
		  	});

		  	Route::group(['prefix' => 'employment'], function () {
		    	Route::get('/', 'admin\job\EmploymentStatusController@index')->name('admin_job_employment');
		    	Route::post('/save-employment', 'admin\job\EmploymentStatusController@admin_save_employment')->name('admin_save_employment');
		    	Route::get('/edit-employment/{id}', 'admin\job\EmploymentStatusController@edit_employment')->name('admin_edit_employment');
		    	Route::post('/update-employment/{id}', 'admin\job\EmploymentStatusController@update_employment')->name('admin_update_employment');
		    	Route::get('/delete-employment/{id}', 'admin\job\EmploymentStatusController@delete_job_employment_status')->name('delete_job_employment_status');
		    	Route::post('/delete_employment/{id}', 'admin\job\EmploymentStatusController@delete_job_employment_status_post')->name('delete_job_employment_status_post');
		  	});


		  	Route::group(['prefix' => 'categories'], function () {
		    	Route::get('/', 'admin\job\JobCategoriesController@index')->name('admin_job_category');
		    	Route::post('/save-category', 'admin\job\JobCategoriesController@admin_save_category')->name('admin_save_category');
		    	Route::get('/edit-category/{id}', 'admin\job\JobCategoriesController@edit_category')->name('admin_edit_category');
		    	Route::post('/update-category/{id}', 'admin\job\JobCategoriesController@update_category')->name('admin_update_category');
		    	Route::get('/delete-category/{id}', 'admin\job\JobCategoriesController@admin_delete_job_category')->name('admin_delete_job_category');

		    	Route::post('/delete_category/{id}', 'admin\job\JobCategoriesController@admin_delete_job_category_post')->name('admin_delete_job_category_post');
		  	});

	    	Route::group(['prefix' => 'countries'], function () {
		    	Route::get('/', 'admin\job\JobCountriesController@index')->name('admin_job_countries');
		    	Route::post('/save-country', 'admin\job\JobCountriesController@admin_save_country')->name('admin_save_country');
		    	Route::get('/edit-country/{id}', 'admin\job\JobCountriesController@edit_job_country')->name('edit_job_country');
		    	Route::post('/update-country/{id}', 'admin\job\JobCountriesController@update_coutry')->name('update_job_country');
		    	Route::get('/delete-country/{id}', 'admin\job\JobCountriesController@delete_job_country')->name('delete_job_country');

		    	Route::post('/delete_country/{id}', 'admin\job\JobCountriesController@delete_job_country_post')->name('delete_job_country_post');
		  	});

		  	Route::group(['prefix' => 'all-jobs'], function () {
		    	Route::get('/', 'admin\job\JobOffersController@admin_all_job')->name('admin_all_job');
		    	Route::get('/create-job', 'admin\job\JobOffersController@create_job')->name('create_job');
		    	Route::post('/save-job', 'admin\job\JobOffersController@admin_save_job')->name('admin_save_job');
		    	Route::get('/edit-job/{id}', 'admin\job\JobOffersController@edit_job')->name('edit_job');
		    	Route::post('/update_job/{id}', 'admin\job\JobOffersController@admin_edit_job')->name('admin_edit_job');
		    	Route::get('/copy-job/{id}', 'admin\job\JobOffersController@copy_job_offer')->name('copy_job_offer');
				Route::get('/view-job/{id}', 'admin\job\JobOffersController@admin_view_job')->name('admin_view_job');
				Route::get('/delete-job/{id}', 'admin\job\JobOffersController@admin_delete_job')->name('admin_delete_job');

				Route::post('/delete_job/{id}', 'admin\job\JobOffersController@admin_delete_job_post')->name('admin_delete_job_post');

		  	});

		  	Route::group(['prefix' => 'comments'], function () {
		    	Route::get('/', 'admin\job\JobCommentsController@all_comments')->name('admin_job_comments');
		    	Route::get('/edit-comment/{id}', 'admin\job\JobCommentsController@edit_comment')->name('edit_job_offer_comments');
		    	Route::post('/update-comment/{id}', 'admin\job\JobCommentsController@edit_comments')->name('admin_update_job_comment');

		    	Route::get('/delete-comment/{id}', 'admin\job\JobCommentsController@delet_job_comment')->name('delet_job_comment');
		  	});


		  	Route::group(['prefix' => 'applications'], function () {
		    	Route::get('/', 'admin\job\JobOffersController@seeker_application')->name('job_seeker_application');
		    	Route::get('/review/{id}', 'admin\job\JobOffersController@review_job_application')->name('review_job_application');
		    	Route::post('/approve_application/{id}', 'admin\job\JobOffersController@approve_application')->name('approve_job_application');
		    	Route::get('/deleted_job_application/{id}', 'admin\job\JobOffersController@deleted_job_application')->name('deleted_job_application');
		  	});


	  	});


    	Route::group(['prefix' => 'study'], function () {

    		Route::group(['prefix' => 'countries'], function () {
		    	Route::get('/', 'admin\StudyCountryController@country')->name('admin_study_country');
		    	Route::post('/save-country', 'admin\StudyCountryController@save_coutry')->name('admin_study_save_country');
		    	Route::get('/edit-country/{id}', 'admin\StudyCountryController@edit_country')->name('admin_study_country_edit');
		    	Route::post('/update-country/{id}', 'admin\StudyCountryController@update_coutry')->name('admin_study_update_country');
		    	Route::get('/delete-country/{id}', 'admin\StudyCountryController@admin_study_country_delete')->name('admin_study_country_delete');
		    	Route::post('/delete_country/{id}', 'admin\StudyCountryController@admin_study_country_delete_post')->name('admin_study_country_delete_post');
		  	});

		  	Route::group(['prefix' => 'offers'], function () {
		    	Route::get('/', 'admin\StudyOfferController@index')->name('admin_study_offer');
		    	Route::get('/new-offer', 'admin\StudyOfferController@study_offer')->name('new_study_offer');
		    	Route::post('/save-offer', 'admin\StudyOfferController@save_offer')->name('save_study_offer');
		    	Route::get('/edit-offer/{id}', 'admin\StudyOfferController@edit_offer')->name('edit_study_offer');
		    	Route::post('/update-offer/{id}', 'admin\StudyOfferController@update_offer')->name('update_study_offer');
		    	Route::get('/view-offer/{id}', 'admin\StudyOfferController@admin_view_study_offer')->name('admin_view_study_offer');
		    	Route::get('/copy-offer/{id}', 'admin\StudyOfferController@admin_copy_study_offer')->name('admin_copy_study_offer');

		    	Route::get('/delete-offer/{id}', 'admin\StudyOfferController@admin_delete_study_offer')->name('admin_delete_study_offer');

		    	Route::post('/delete_offer/{id}', 'admin\StudyOfferController@admin_delete_study_offer_post')->name('admin_delete_study_offer_post');
		  	});

		  	Route::group(['prefix' => 'comments'], function () {
		    	Route::get('/', 'admin\StudyOfferController@all_comments')->name('admin_study_comments');
		    	Route::get('/edit-comment/{id}', 'admin\StudyOfferController@edit_comment')->name('edit_study_offer_comments');
		    	Route::post('/update-comment/{id}', 'StudyOfferCommentsController@edit_comments')->name('admin_update_study_comment');

		    	Route::get('/delete-comment/{id}', 'admin\StudyOfferController@delete_study_offer_comments')->name('delete_study_offer_comments');
		  	});

		  	Route::group(['prefix' => 'applications'], function () {
		    	Route::get('/', 'admin\StudyOfferController@seeker_application')->name('admin_study_seeker_application');
		    	Route::get('/review/{id}', 'admin\StudyOfferController@review_study_application')->name('review_study_application');
		    	Route::post('/approve_application/{id}', 'admin\StudyOfferController@approve_application')->name('approve_study_application');
		    	Route::get('/deleted_study_application/{id}', 'admin\StudyOfferController@deleted_study_application')->name('deleted_study_application');
		  	});

	  	});


    	/*
    	*
    	*
    	*
    	*
    	*
    	* Immigration Section Routing * * */

	  	Route::group(['prefix' => 'immigrations'], function () {

    		Route::group(['prefix' => 'countries'], function () {
		    	Route::get('/', 'admin\immigration\ImmigrationCountryController@index')->name('admin_immigrations_countries');

		    	Route::post('/save-country', 'admin\immigration\ImmigrationCountryController@save_coutry')->name('admin_immigration_save_country');
		    	Route::get('/edit-country/{id}', 'admin\immigration\ImmigrationCountryController@edit_country')->name('admin_immigration_country_edit');

		    	Route::post('/update-country/{id}', 'admin\immigration\ImmigrationCountryController@update_coutry')->name('admin_immigration_update_country');

		    	Route::get('/delete-country/{id}', 'admin\immigration\ImmigrationCountryController@delete_imm_country')->name('delete_imm_country');

		    	Route::post('/delete_country/{id}', 'admin\immigration\ImmigrationCountryController@delete_imm_country_post')->name('delete_imm_country_post');
		  	});


		  	Route::group(['prefix' => 'categories'], function () {
		    	Route::get('/', 'admin\immigration\ImmigrationCategoriesController@index')->name('admin_immigrations_categories');
		    	Route::post('/save-category', 'admin\immigration\ImmigrationCategoriesController@save_category')->name('admin_immigration_save_category');
		    	Route::get('/edit-category/{id}', 'admin\immigration\ImmigrationCategoriesController@edit_category')->name('admin_immigration_category_edit');

		    	Route::post('/update-category/{id}', 'admin\immigration\ImmigrationCategoriesController@update_category')->name('admin_immigration_update_category');

		    	Route::get('/delete-category/{id}', 'admin\immigration\ImmigrationCategoriesController@delete_imm_category')->name('delete_imm_category');

		    	Route::post('/delete_category/{id}', 'admin\immigration\ImmigrationCategoriesController@delete_imm_category_post')->name('delete_imm_category_post');
		  	});


		  	Route::group(['prefix' => 'all-immigrations'], function () {
		    	Route::get('/', 'admin\immigration\ImmigrationOffersController@index')->name('admin_immigrations_offer');

		    	Route::get('/add-immigration', 'admin\immigration\ImmigrationOffersController@add_immigration')->name('admin_add_immigrations');

		    	Route::post('/save-immigration', 'admin\immigration\ImmigrationOffersController@save_immigration')->name('admin_save_immigration');

		    	Route::get('/edit-immigration/{id}', 'admin\immigration\ImmigrationOffersController@edit_immigration')->name('admin_edit_immigration');

		    	Route::post('/update-immigration/{id}', 'admin\immigration\ImmigrationOffersController@update_immigration')->name('admin_update_immigration');


		    	Route::get('/copy-immigration/{id}', 'admin\immigration\ImmigrationOffersController@copy_immigration')->name('admin_copy_immigration');

		    	Route::get('/view-immigration/{id}', 'admin\immigration\ImmigrationOffersController@view_immigration')->name('view_immigration');

		    	Route::get('/delete-immigration/{id}', 'admin\immigration\ImmigrationOffersController@delete_immigration_offer')->name('delete_immigration_offer');

		    	Route::post('/delete_immigration/{id}', 'admin\immigration\ImmigrationOffersController@delete_immigration_offer_post')->name('delete_immigration_offer_post');

		  	});


		  	Route::group(['prefix' => 'comments'], function () {
		    	Route::get('/', 'admin\immigration\ImmigrationCommentsController@all_comments')->name('admin_immigration_comments');
		    	Route::get('/edit-comment/{id}', 'admin\immigration\ImmigrationCommentsController@edit_comment')->name('edit_immigration_offer_comments');

		    	Route::post('/update-comment/{id}', 'admin\immigration\ImmigrationCommentsController@update_comments')->name('admin_update_immigration_comment');

		  	});



		  	Route::group(['prefix' => 'applications'], function () {
		    	Route::get('/', 'admin\immigration\ImmigrationOffersController@seeker_application')->name('admin_immigration_seeker_application');

		    	Route::get('/review/{id}', 'admin\immigration\ImmigrationOffersController@review_immigration_application')->name('review_immigration_application');

		    	Route::post('/approve_application/{id}', 'admin\immigration\ImmigrationOffersController@approve_application')->name('approve_immigration_application');

		    	Route::get('/deleted_study_application/{id}', 'admin\immigration\ImmigrationOffersController@deleted_immigration_application')->name('deleted_immigration_application');
		  	});


	  	});

  	});

});


