<?php

/**
 * ⚠️ Edition not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Không tìm thấy liên hệ',
    'people_list_number_kids' => '1 con|:count con',
    'people_list_last_updated' => 'Danh sách liên hệ mới cập nhật:',
    'people_list_number_reminders' => '1 lời nhắc|:count lời nhắc',
    'people_list_blank_title' => 'Bạn không có ai trong tài khoản',
    'people_list_blank_cta' => 'Thêm ai đó',
    'people_list_sort' => 'Sắp xếp',
    'people_list_stats' => '1 liên hệ|:count liên hệ',
    'people_list_firstnameAZ' => 'Xếp theo tên A → Z',
    'people_list_firstnameZA' => 'Xếp theo tên Z → A',
    'people_list_lastnameAZ' => 'Xếp theo họ A → Z',
    'people_list_lastnameZA' => 'Xếp theo họ Z → A',
    'people_list_lastactivitydateNewtoOld' => 'Xếp theo hoạt động gần đây nhất',
    'people_list_lastactivitydateOldtoNew' => 'Xếp theo hoạt động lâu nhất',
    'people_list_filter_tag' => 'Hiện tất cả liên hệ được tag với',
    'people_list_clear_filter' => 'Xoá bộ lọc',
    'people_list_contacts_per_tags' => '1 liên hệ|:count liên hệ',
    'people_list_show_dead' => 'Hiện người đã qua đời (:count)',
    'people_list_hide_dead' => 'Ẩn người đã qua đời (:count)',
    'people_search' => 'Tìm kiếm liên hệ...',
    'people_search_no_results' => 'Không tìm thấy kết quả',
    'people_search_next' => 'Kế tiếp',
    'people_search_prev' => 'Trước đó',
    'people_search_rows_per_page' => 'Số dòng trên mỗi trang:',
    'people_search_of' => 'của',
    'people_search_page' => 'Trang',
    'people_search_all' => 'Tất cả',
    'people_add_new' => 'Thêm người mới',
    'people_list_account_usage' => 'Your account usage: :current/:limit contacts',
    'people_list_account_upgrade_title' => 'Nâng cấp tài khoản của bạn để mở khoá tất cả tính năng.',
    'people_list_account_upgrade_cta' => 'Nâng cấp ngay',
    'people_list_untagged' => 'Xem liên hệ không được gắn thẻ',
    'people_list_filter_untag' => 'Hiện tất cả liên hệ không được gắn thẻ',

    // people add
    'people_add_title' => 'Thêm người mới',
    'people_add_missing' => 'Không có người nào Thêm người mới ngay bây giờ',
    'people_add_firstname' => 'Tên',
    'people_add_middlename' => 'Tên đệm (Tuỳ chọn)',
    'people_add_lastname' => 'Họ (Tuỳ chọn)',
    'people_add_nickname' => 'Biệt danh (Tuỳ chọn)',
    'people_add_cta' => 'Thêm',
    'people_save_and_add_another_cta' => 'Gửi và thêm một người khác',
    'people_add_success' => ':name đã được tạo thành công',
    'people_add_gender' => 'Giới tính',
    'people_delete_success' => 'Liên hệ đã bị xoá',
    'people_delete_message' => 'Xóa liên hệ',
    'people_delete_confirmation' => 'Bạn chắc chắn muốn xoá liên hệ? Việc xoá sẽ không thể khôi phục.',
    'people_add_birthday_reminder' => 'Chúc mừng sinh nhật tới :name',
    'people_add_birthday_reminder_deceased' => 'On this date, :name, would have celebrated his birthday',
    'people_add_import' => 'Bạn có muốn <a href=":url">nhập danh bạ của bạn</a>?',
    'people_edit_email_error' => 'Đã có liên hệ trong tài khoản của bạn sử dụng địa chỉ email này. Hãy chọn một cái khác.',
    'people_export' => 'Xuất dưới dạng vCard',
    'people_add_reminder_for_birthday' => 'Tạo lời nhắc hàng năm cho sinh nhật này',

    // show
    'section_contact_information' => 'Thông tin liên hệ',
    'section_personal_activities' => 'Hoạt động',
    'section_personal_reminders' => 'Lời nhắc',
    'section_personal_tasks' => 'Tasks',
    'section_personal_gifts' => 'Quà tặng',
    'section_personal_notes' => 'Notes',

    // archived contacts
    'list_link_to_active_contacts' => 'You are viewing archived contacts. See the <a href=":url">list of active contacts</a> instead.',
    'list_link_to_archived_contacts' => 'List of archived contacts',

    // Header
    'me' => 'This is you',
    'edit_contact_information' => 'Edit contact information',
    'contact_archive' => 'Archive contact',
    'contact_unarchive' => 'Unarchive contact',
    'contact_archive_help' => 'Archived contacts will not be shown on the contact list, but still appear in search results.',
    'call_button' => 'Log a call',
    'set_favorite' => 'Favorite contacts are placed at the top of the contact list',

    // Stay in touch
    'stay_in_touch' => 'Stay in touch',
    'stay_in_touch_frequency' => 'Stay in touch every day|Stay in touch every {count} days',
    'stay_in_touch_invalid' => 'The frequency must be a number greater than 0.',
    'stay_in_touch_premium' => 'You need to upgrade your account to make use of this feature',
    'stay_in_touch_modal_title' => 'Giữ liên lạc',
    'stay_in_touch_modal_desc' => 'We can remind you by email to keep in touch with {firstname} at a regular interval.',
    'stay_in_touch_modal_label' => 'Send me an email every... {count} day|Send me an email every... {count} days',

    // Calls
    'modal_call_title' => 'Log a call',
    'modal_call_comment' => 'What did you talk about? (optional)',
    'modal_call_exact_date' => 'The phone call happened on',
    'modal_call_who_called' => 'Who called?',
    'modal_call_emotion' => 'Do you want to log how you felt during this call? (optional)',
    'calls_add_success' => 'The phone call has been saved.',
    'call_delete_confirmation' => 'Are you sure you want to delete this call?',
    'call_delete_success' => 'The call has been deleted successfully',
    'call_title' => 'Phone calls',
    'call_empty_comment' => 'No details',
    'call_blank_title' => 'Keep track of the phone calls you’ve done with {name}',
    'call_blank_desc' => 'You called {name}',
    'call_you_called' => 'You called',
    'call_he_called' => '{name} called',
    'call_emotions' => 'Emotions:',

    // Conversation
    'conversation_blank' => 'Record conversations you have with :name on social media, SMS, ...',
    'conversation_delete_link' => 'Delete the conversation',
    'conversation_edit_title' => 'Edit conversation',
    'conversation_edit_delete' => 'Are you sure you want to delete this conversation? Deletion is permanent.',
    'conversation_add_success' => 'The conversation has been successfully added.',
    'conversation_edit_success' => 'The conversation has been successfully updated.',
    'conversation_delete_success' => 'The conversation has been successfully deleted.',
    'conversation_add_title' => 'Record a new conversation',
    'conversation_add_when' => 'When did you have this conversation?',
    'conversation_add_who_wrote' => 'Who said this message?',
    'conversation_add_how' => 'How did you communicate?',
    'conversation_add_you' => 'bạn',
    'conversation_add_content' => 'Write down what was said',
    'conversation_add_what_was_said' => 'What did you say?',
    'conversation_add_another' => 'Thêm tin nhắn khác',
    'conversation_add_error' => 'Phải có ít nhất một tin nhắn.',
    'conversation_list_table_messages' => 'Tin nhắn',
    'conversation_list_table_content' => 'Một phần nội dung (tin nhắn mới nhất)',
    'conversation_list_title' => 'Cuộc trò chuyện',
    'conversation_list_cta' => 'Nhật ký trò chuyện',

    // age - birthday
    'birthdate_not_set' => 'Ngày sinh chưa được cài đặt',
    'age_approximate_in_years' => 'khoảng :age tuổi',
    'age_exact_in_years' => ':age tuổi',
    'age_exact_birthdate' => 'sinh ngày :date',

    // Last called
    'last_called' => 'Lần gọi gần đây nhất: date',
    'last_called_empty' => 'Lần gọi gần đây nhất: không rõ',
    'last_activity_date' => 'Lần hoạt động cùng nhau gần đây nhất: :date',
    'last_activity_date_empty' => 'Lần hoạt động cùng nhau gần đây nhất: không rõ',

    // additional information
    'information_edit_success' => 'Hồ sơ đã được cập nhật thành công',
    'information_edit_title' => 'Sửa thông tin cá nhân của :name',
    'information_edit_max_size' => 'Tối đa :size Kb.',
    'information_edit_max_size2' => 'Tối đa {size} Kb.',
    'information_edit_firstname' => 'Tên',
    'information_edit_lastname' => 'Họ (Tuỳ chọn)',
    'information_edit_description' => 'Mô tả (tùy chọn)',
    'information_edit_description_help' => 'Used on the contact list to add some context, if necessary.',
    'information_edit_unknown' => 'Tôi không biết tuổi người này',
    'information_edit_probably' => 'Người này có lẽ là...',
    'information_edit_not_year' => 'Tôi biết ngày tháng sinh của người này, nhưng không biết năm sinh…',
    'information_edit_exact' => 'Tôi biết chính xác ngày tháng năm sinh của người này...',
    'information_edit_birthdate_label' => 'Ngày sinh',
    'information_no_work_defined' => 'Không có thông tin công việc',
    'information_work_at' => 'ở :company',
    'work_add_cta' => 'Cập nhật thông tin công việc',
    'work_edit_success' => 'Cập nhật thông tin công việc thành công',
    'work_edit_title' => 'Cập nhật thông tin công việc của :name',
    'work_edit_job' => 'Tên công việc (tuỳ chọn)',
    'work_edit_company' => 'Tên công ty (nếu có)',
    'work_information' => 'Chi tiết công việc',

    // food preferences
    'food_preferences_add_success' => 'Sở thích ăn uống đã được lưu',
    'food_preferences_edit_description' => 'Perhaps :firstname or someone in the :family’s family has an allergy. Or doesn’t like a specific bottle of wine. Indicate them here so you will remember it next time you invite them for dinner',
    'food_preferences_edit_description_no_last_name' => 'Perhaps :firstname has an allergy. Or doesn’t like a specific bottle of wine. Indicate them here so you will remember it next time you invite them for dinner',
    'food_preferences_edit_title' => 'Trình bày sở thích ăn uống',
    'food_preferences_edit_cta' => 'Lưu sở thích ăn uống',
    'food_preferences_title' => 'Sở thích ăn uống',
    'food_preferences_cta' => 'Thêm sở thích ăn uống',

    // reminders
    'reminders_blank_title' => 'Có điều gì bạn muốn được nhắc về :name?',
    'reminders_blank_add_activity' => 'Thêm lời nhắc',
    'reminders_add_title' => 'Bạn muốn được nhắc điều gì về :name?',
    'reminders_add_description' => 'Hãy nhắc tôi...',
    'reminders_add_next_time' => 'When is the next time you would like to be reminded about this?',
    'reminders_add_once' => 'Nhắc tôi về cái này một lần',
    'reminders_add_recurrent' => 'Nhắc tôi về cái này mỗi',
    'reminders_add_starting_from' => 'starting from the date specified above',
    'reminders_add_cta' => 'Add reminder',
    'reminders_edit_update_cta' => 'Update reminder',
    'reminders_add_error_custom_text' => 'You need to indicate a text for this reminder',
    'reminders_create_success' => 'The reminder has been added successfully',
    'reminders_delete_success' => 'The reminder has been deleted successfully',
    'reminders_update_success' => 'The reminder has been updated successfully',
    'reminders_add_optional_comment' => 'Optional comment',

    'reminder_frequency_day' => 'every day|every :number days',
    'reminder_frequency_week' => 'every week|every :number weeks',
    'reminder_frequency_month' => 'every month|every :number months',
    'reminder_frequency_year' => 'every year|every :number year',
    'reminder_frequency_one_time' => 'on :date',
    'reminders_delete_confirmation' => 'Are you sure you want to delete this reminder?',
    'reminders_delete_cta' => 'Delete',
    'reminders_next_expected_date' => 'on',
    'reminders_cta' => 'Add a reminder',
    'reminders_description' => 'We will send an email for each one of the reminders below. Reminders are sent every morning the day events will happen. Reminders automatically added for birthdates can not be deleted. If you want to change those dates, edit the birthdate of the contacts.',
    'reminders_one_time' => 'One time',
    'reminders_type_week' => 'week',
    'reminders_type_month' => 'month',
    'reminders_type_year' => 'year',
    'reminders_birthday' => 'Birthday of :name',
    'reminders_free_plan_warning' => 'You are on the Free plan. No emails are sent on this plan. To receive your reminders by email, upgrade your account.',

    // relationships
    'relationship_form_add' => 'Add a new relationship',
    'relationship_form_edit' => 'Edit an existing relationship',
    'relationship_form_is_with' => 'This person is...',
    'relationship_form_is_with_name' => ':name is...',
    'relationship_form_add_choice' => 'Who is the relationship with?',
    'relationship_form_create_contact' => 'Add a new person',
    'relationship_form_associate_contact' => 'An existing contact',
    'relationship_form_associate_dropdown' => 'Search and select an existing contact from the dropdown below',
    'relationship_form_associate_dropdown_placeholder' => 'Search and select an existing contact',
    'relationship_form_also_create_contact' => 'Create a Contact entry for this person.',
    'relationship_form_add_description' => 'This will let you treat this person like any other contact.',
    'relationship_form_add_no_existing_contact' => 'You don’t have any contacts who can be related to :name at the moment.',
    'relationship_delete_confirmation' => 'Are you sure you want to delete this relationship? Deletion is permanent.',
    'relationship_unlink_confirmation' => 'Are you sure you want to delete this relationship? This person will not be deleted – only the relationship between the two.',
    'relationship_form_add_success' => 'The relationship has been successfully set.',
    'relationship_form_deletion_success' => 'The relationship has been deleted.',

    // tasks
    'tasks_title' => 'Tasks',
    'tasks_blank_title' => 'You don’t have any tasks yet.',
    'tasks_form_title' => 'Title',
    'tasks_form_description' => 'Description (optional)',
    'tasks_add_task' => 'Add a task',
    'tasks_delete_success' => 'The task has been deleted successfully',
    'tasks_complete_success' => 'The task has changed status successfully',

    // activities
    'activity_title' => 'Hoạt động',
    'activity_type_category_simple_activities' => 'Hoạt động đơn giản',
    'activity_type_category_sport' => 'Thể thao',
    'activity_type_category_food' => 'Ẩm thực',
    'activity_type_category_cultural_activities' => 'Hoạt động văn hoá',
    'activity_type_just_hung_out' => 'vừa đi chơi',
    'activity_type_watched_movie_at_home' => 'xem phim ở nhà',
    'activity_type_talked_at_home' => 'nói chuyện ở nhà',
    'activity_type_did_sport_activities_together' => 'chơi thể thao cùng nhau',
    'activity_type_ate_at_his_place' => 'ăn ở chỗ của họ',
    'activity_type_went_bar' => 'đến bar',
    'activity_type_ate_at_home' => 'ăn ở nhà',
    'activity_type_picnicked' => 'picnic',
    'activity_type_ate_restaurant' => 'ăn ở nhà hàng',
    'activity_type_went_theater' => 'đến rạp chiếu phim',
    'activity_type_went_concert' => 'đến concert',
    'activity_type_went_play' => 'đi chơi',
    'activity_type_went_museum' => 'đến viện bảo tàng',
    'activities_add_activity' => 'Thêm hoạt động',
    'activities_add_more_details' => 'Thêm thông tin chi tiết hơn',
    'activities_add_emotions' => 'Thêm cảm xúc',
    'activities_add_category' => 'Cho biết một danh mục',
    'activities_add_participants_cta' => 'Thêm người tham gia',
    'activities_item_information' => ':Activity. Đã xảy ra vào :date',
    'activities_add_title' => 'Bạn đã làm gì với {name}?',
    'activities_summary' => 'Mô tả những gì bạn đã làm',
    'activities_add_pick_activity' => '(Không bắt buộc) Bạn có muốn phân loại hoạt động này không? Bạn không nhất thiết phải làm, nhưng nó sẽ giúp thống kê sau này',
    'activities_add_date_occured' => 'Hoạt động này xảy ra vào...',
    'activities_add_participants' => 'Ai đã tham gia hoạt động này ngoài {name}? (không bắt buộc)',
    'activities_add_emotions_title' => 'Bạn có muốn ghi lại cảm giác của mình trong hoạt động này không? (không bắt buộc)',
    'activities_blank_title' => 'Theo dõi những gì bạn đã làm với {name} trong quá khứ và những gì bạn đã nói',
    'activities_blank_add_activity' => 'Thêm hoạt động',
    'activities_add_success' => 'Thêm hoạt động thành công',
    'activities_add_error' => 'Có lỗi xảy ra khi thêm hoạt động',
    'activities_update_success' => 'Cập nhật hoạt động thành công',
    'activities_delete_success' => 'Xoá hoạt động thành công',
    'activities_who_was_involved' => 'Ai đã tham gia?',
    'activities_activity' => 'Danh mục hoạt động',
    'activities_view_activities_report' => 'Xem báo cáo hoạt động',
    'activities_profile_title' => 'Báo cáo hoạt động giữa :name và bạn',
    'activities_profile_subtitle' => 'Bạn đã ghi lại tất cả :total_activities hoạt động với :name và :activities_last_twelve_months hoạt động trong 12 tháng qua.|Bạn đã ghi lại tất cả :total_activities hoạt động với :name và :activities_last_twelve_months hoạt động trong 12 tháng qua.',
    'activities_profile_year_summary_activity_types' => 'Dưới đây là bảng phân tích các loại hoạt động các bạn đã làm cùng nhau trong năm :year',
    'activities_profile_year_summary' => 'Dưới đây là những gì hai bạn đã làm trong năm :year',
    'activities_profile_number_occurences' => ':value hoạt động|:value hoạt động',
    'activities_list_participants' => 'Người tham gia:',
    'activities_list_emotions' => 'Emotions felt:',
    'activities_list_date' => 'Happened on',
    'activities_list_category' => 'Category:',

    // notes
    'notes_create_success' => 'Tạo ghi chú thành công',
    'notes_update_success' => 'The note has been saved successfully',
    'notes_delete_success' => 'The note has been deleted successfully',
    'notes_add_cta' => 'Add note',
    'notes_favorite' => 'Add/remove from favorites',
    'notes_delete_title' => 'Delete a note',
    'notes_delete_confirmation' => 'Are you sure you want to delete this note? Deletion is permanent',

    // gifts
    'gifts_title' => 'Gifts',
    'gifts_add_success' => 'The gift has been added successfully',
    'gifts_delete_success' => 'The gift has been deleted successfully',
    'gifts_delete_confirmation' => 'Are you sure you want to delete this gift?',
    'gifts_add_gift' => 'Add a gift',
    'gifts_link' => 'Link',
    'gifts_for' => 'For: {name}',
    'gifts_delete_cta' => 'Delete',
    'gifts_add_title' => 'Gift management for :name',
    'gifts_add_gift_idea' => 'Gift idea',
    'gifts_add_gift_already_offered' => 'Gift offered',
    'gifts_add_gift_received' => 'Gift received',
    'gifts_add_gift_title' => 'What is this gift?',
    'gifts_add_gift_name' => 'Gift name',
    'gifts_add_link' => 'Link to the web page (optional)',
    'gifts_add_value' => 'Value (optional)',
    'gifts_add_comment' => 'Comment (optional)',
    'gifts_add_recipient' => 'Recipient (optional)',
    'gifts_add_recipient_field' => 'Recipient',
    'gifts_add_photo' => 'Photo (optional)',
    'gifts_add_photo_title' => 'Add a photo for this gift',
    'gifts_add_someone' => 'This gift is for someone in {name}’s family in particular',
    'gifts_delete_title' => 'Delete a gift',
    'gifts_ideas' => 'Gift ideas',
    'gifts_offered' => 'Gifts offered',
    'gifts_offered_as_an_idea' => 'Mark as an idea',
    'gifts_received' => 'Gifts received',
    'gifts_view_comment' => 'View comment',
    'gifts_mark_offered' => 'Mark as offered',
    'gifts_update_success' => 'The gift has been updated successfully',

    // debts
    'debt_delete_confirmation' => 'Are you sure you want to delete this debt?',
    'debt_delete_success' => 'The debt has been deleted successfully',
    'debt_add_success' => 'The debt has been added successfully',
    'debt_title' => 'Debts',
    'debt_add_cta' => 'Add debt',
    'debt_you_owe' => 'You owe :amount',
    'debt_they_owe' => ':name owes you :amount',
    'debt_add_title' => 'Debt management',
    'debt_add_you_owe' => 'You owe :name',
    'debt_add_they_owe' => ':name owes you',
    'debt_add_amount' => 'the sum of',
    'debt_add_reason' => 'for the following reason (optional)',
    'debt_add_add_cta' => 'Thêm khoản nợ',
    'debt_edit_update_cta' => 'Cập nhật khoản nợ',
    'debt_edit_success' => 'Cập nhật khoản nợ thành công',
    'debts_blank_title' => 'Quản lý các khoản bạn nợ :name hoặc :name nợ bạn',

    // tags
    'tag_edit' => 'Sửa thẻ tag',
    'tag_add' => 'Thêm thẻ tag',
    'tag_add_search' => 'Thêm hoặc tìm thẻ tag',
    'tag_no_tags' => 'Không có thẻ tag nào',

    // Introductions
    'introductions_sidebar_title' => 'Bạn đã gặp nhau như thế nào',
    'introductions_blank_cta' => 'Trình bày bạn đã gặp :name như thế nào',
    'introductions_title_edit' => 'How did you meet :name?',
    'introductions_additional_info' => 'Diễn giải làm thế nào bạn gặp và ở đâu',
    'introductions_edit_met_through' => 'Có ai đó giới thiệu bạn cho người này?',
    'introductions_no_met_through' => 'Không có ai',
    'introductions_first_met_date' => 'Ngày bạn gặp',
    'introductions_no_first_met_date' => 'Tôi không biết ngày chúng tôi gặp',
    'introductions_first_met_date_known' => 'Đây là ngày chúng tôi gặp',
    'introductions_add_reminder' => 'Thêm lời nhắc để kỷ niệm cuộc gặp gỡ này vào ngày kỷ niệm sự kiện này đã xảy ra',
    'introductions_update_success' => 'Cập nhật thông tin làm thế nào gặp người này thành công',
    'introductions_met_through' => 'Met through <a href=":url">:name</a>',
    'introductions_met_date' => 'Gặp vào :date',
    'introductions_reminder_title' => 'Anniversary of the day you first met',

    // Deceased
    'deceased_reminder_title' => 'Anniversary of the death of :name',
    'deceased_mark_person_deceased' => 'Mark this person as deceased',
    'deceased_know_date' => 'I know the date this person died',
    'deceased_add_reminder' => 'Add a reminder for this date',
    'deceased_label' => 'Đã qua đời',
    'deceased_date_label' => 'Ngày mất',
    'deceased_label_with_date' => 'Đã mất vào :date',
    'deceased_age' => 'Tuổi thọ',

    // Contact information
    'contact_info_title' => 'Thông tin liên hệ',
    'contact_info_form_content' => 'Nội dung',
    'contact_info_form_contact_type' => 'Loại liên hệ',
    'contact_info_form_personalize' => 'Cá nhân hoá',
    'contact_info_address' => 'Sống tại',

    // Addresses
    'contact_address_title' => 'Địa chỉ',
    'contact_address_form_name' => 'Nhãn (không bắt buộc)',
    'contact_address_form_street' => 'Tên đường (không bắt buộc)',
    'contact_address_form_city' => 'Thành phố (không bắt buộc)',
    'contact_address_form_province' => 'Tỉnh (không bắt buộc)',
    'contact_address_form_postal_code' => 'Mã bưu điện (không bắt buộc)',
    'contact_address_form_country' => 'Quốc gia (không bắt buộc)',
    'contact_address_form_latitude' => 'Vĩ độ (chỉ số) (không bắt buộc)',
    'contact_address_form_longitude' => 'Kinh độ (chỉ số) (không bắt buộc)',

    // Pets
    'pets_kind' => 'Loại thú cưng',
    'pets_name' => 'Tên (tùy chọn)',
    'pets_create_success' => 'Thêm thú cưng thành công',
    'pets_update_success' => 'Cập nhật thú cưng thành công',
    'pets_delete_success' => 'The pet has been deleted',
    'pets_title' => 'Pets',
    'pets_reptile' => 'Reptile',
    'pets_bird' => 'Bird',
    'pets_cat' => 'Cat',
    'pets_dog' => 'Dog',
    'pets_fish' => 'Fish',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Horse',
    'pets_rabbit' => 'Rabbit',
    'pets_rat' => 'Rat',
    'pets_small_animal' => 'Small animal',
    'pets_other' => 'Other',

    // life events
    'life_event_list_tab_life_events' => 'Life events',
    'life_event_list_tab_other' => 'Notes, reminders, ...',
    'life_event_list_title' => 'Life events',
    'life_event_blank' => 'Log what happens to the life of {name} for your future reference.',
    'life_event_list_cta' => 'Add life event',
    'life_event_create_category' => 'All categories',
    'life_event_create_life_event' => 'Add life event',
    'life_event_create_default_title' => 'Title (optional)',
    'life_event_create_default_story' => 'Story (optional)',
    'life_event_create_date' => 'You do not need to indicate a month or a day - only the year is mandatory.',
    'life_event_create_default_description' => 'Add information about what you know',
    'life_event_create_add_yearly_reminder' => 'Add a yearly reminder for this event',
    'life_event_create_success' => 'The life event has been added',
    'life_event_delete_title' => 'Delete a life event',
    'life_event_delete_description' => 'Are you sure you want to delete this life event? Deletion is permanent.',
    'life_event_delete_success' => 'The life event has been deleted',
    'life_event_date_it_happened' => 'Date it happened',
    'life_event_category_work_education' => 'Work & education',
    'life_event_category_family_relationships' => 'Family & relationships',
    'life_event_category_home_living' => 'Home & living',
    'life_event_category_health_wellness' => 'Health & wellness',
    'life_event_category_travel_experiences' => 'Travel & experiences',
    'life_event_sentence_new_job' => 'Started a new job',
    'life_event_sentence_retirement' => 'Retired',
    'life_event_sentence_new_school' => 'Started school',
    'life_event_sentence_study_abroad' => 'Studied abroad',
    'life_event_sentence_volunteer_work' => 'Started volunteering',
    'life_event_sentence_published_book_or_paper' => 'Published a paper',
    'life_event_sentence_military_service' => 'Đã bắt đầu nghĩa vụ quân sự',
    'life_event_sentence_new_relationship' => 'Đã bắt đầu mối quan hệ',
    'life_event_sentence_engagement' => 'Đã đính hôn',
    'life_event_sentence_marriage' => 'Đã kết hơn',
    'life_event_sentence_anniversary' => 'Kỉ niệm',
    'life_event_sentence_expecting_a_baby' => 'Muốn có con',
    'life_event_sentence_new_child' => 'Đã có con',
    'life_event_sentence_new_family_member' => 'Đã thêm thành viên gia đình',
    'life_event_sentence_new_pet' => 'Đã có thú cưng',
    'life_event_sentence_end_of_relationship' => 'Đã kết thúc mối quan hệ',
    'life_event_sentence_loss_of_a_loved_one' => 'Đã mất một người thân yêu',
    'life_event_sentence_moved' => 'Đã chuyển đi',
    'life_event_sentence_bought_a_home' => 'Đã mua nhà',
    'life_event_sentence_home_improvement' => 'Cải tạo nhà',
    'life_event_sentence_holidays' => 'Went on holidays',
    'life_event_sentence_new_vehicle' => 'Đã có xe mới',
    'life_event_sentence_new_roommate' => 'Đã có bạn cùng phòng',
    'life_event_sentence_overcame_an_illness' => 'Đã vượt qua bệnh tật',
    'life_event_sentence_quit_a_habit' => 'Bỏ một thói quen',
    'life_event_sentence_new_eating_habits' => 'Đã bắt đầu một thói quen ăn uống mới',
    'life_event_sentence_weight_loss' => 'Giảm cân',
    'life_event_sentence_wear_glass_or_contact' => 'Started to wear glass or contact lenses',
    'life_event_sentence_broken_bone' => 'Broke a bone',
    'life_event_sentence_removed_braces' => 'Removed braces',
    'life_event_sentence_surgery' => 'Had surgery',
    'life_event_sentence_dentist' => 'Went to the dentist',
    'life_event_sentence_new_sport' => 'Started a sport',
    'life_event_sentence_new_hobby' => 'Started a hobby',
    'life_event_sentence_new_instrument' => 'Learned a new instrument',
    'life_event_sentence_new_language' => 'Learned a new language',
    'life_event_sentence_tattoo_or_piercing' => 'Got a tattoo or piercing',
    'life_event_sentence_new_license' => 'Got a license',
    'life_event_sentence_travel' => 'Traveled',
    'life_event_sentence_achievement_or_award' => 'Got an achievement or award',
    'life_event_sentence_changed_beliefs' => 'Changed beliefs',
    'life_event_sentence_first_word' => 'Spoke for the first time',
    'life_event_sentence_first_kiss' => 'Kissed for the first time',

    // documents
    'document_list_title' => 'Tài liệu',
    'document_list_cta' => 'Tải tài liệu lên',
    'document_list_blank_desc' => 'Here you can store documents related to this person.',
    'document_upload_zone_cta' => 'Tải lên tệp tin',
    'document_upload_zone_progress' => 'Đang tải lên tài liệu...',
    'document_upload_zone_error' => 'Có lỗi xảy ra khi tải tài liệu lên. Hãy thử lại sau.',

    // Photos
    'photo_title' => 'Ảnh',
    'photo_list_title' => 'Ảnh liên quan',
    'photo_list_cta' => 'Tải ảnh lên',
    'photo_list_blank_desc' => 'Bạn có thể lưu ảnh về liên hệ này. Tải lên ngay!',
    'photo_upload_zone_cta' => 'Tải ảnh lên',
    'photo_current_profile_pic' => 'Ảnh đại diện hiện tại',
    'photo_make_profile_pic' => 'Tạo ảnh đại diện',
    'photo_delete' => 'Delete photo',
    'photo_next' => 'Next photo',
    'photo_previous' => 'Previous photo',

    // Avatars
    'avatar_change_title' => 'Change your avatar',
    'avatar_question' => 'Which avatar would you like to use?',
    'avatar_default_avatar' => 'The default avatar',
    'avatar_adorable_avatar' => 'The Adorable avatar',
    'avatar_gravatar' => 'The Gravatar associated with the email address of this person. <a href="https://gravatar.com/">Gravatar</a> is a global system that lets users associate email addresses with photos.',
    'avatar_current' => 'Keep the current avatar',
    'avatar_photo' => 'From a photo that you upload',
    'avatar_crop_new_avatar_photo' => 'Crop new avatar photo',

    // emotions
    'emotion_this_made_me_feel' => 'This made you feel…',

    // logs
    'auditlogs_link' => 'History',
    'auditlogs_title' => 'Everything that happened to :name',
    'auditlogs_breadcrumb' => 'History',
    'auditlogs_author' => 'By :name on :date',

    // contact field label
    'contact_field_label_home' => 'Home',
    'contact_field_label_work' => 'Work',
    'contact_field_label_cell' => 'Mobile',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Pager',
    'contact_field_label_main' => 'Main',
    'contact_field_label_other' => 'Other',
    'contact_field_label_personal' => 'Personal',
];