-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2025 at 01:14 PM
-- Server version: 9.1.0
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuba_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('translations-ar', 'a:316:{s:16:\"last_month_rides\";s:34:\"رحلات الشهر الماضي\";s:14:\"total_customer\";s:27:\"إجمالي العملاء\";s:32:\"translation_updated_successfully\";s:41:\"تم تحديث الترجمة بنجاح\";s:11:\"add_service\";s:19:\"إضافة خدمة\";s:6:\"hybrid\";s:8:\"هجين\";s:9:\"full_time\";s:17:\"دوام كامل\";s:6:\"remote\";s:8:\"بعيد\";s:13:\"select_option\";s:19:\"حدد الخيار\";s:12:\"service_name\";s:19:\"اسم الخدمة\";s:9:\"dashboard\";s:23:\"لوحة القيادة\";s:7:\"modules\";s:10:\"وحدات\";s:11:\"permissions\";s:16:\"الأذونات\";s:5:\"roles\";s:14:\"الأدوار\";s:9:\"subadmins\";s:33:\"المشرفين الفرعيين\";s:8:\"services\";s:10:\"خدمات\";s:7:\"careers\";s:10:\"المهن\";s:4:\"blog\";s:10:\"مدونة\";s:8:\"add_blog\";s:23:\"إضافة _ مدونة\";s:23:\"blog_added_successfully\";s:44:\"تمت إضافة المدونة بنجاح.\";s:13:\"blog_and_news\";s:23:\"مدونة وأخبار\";s:25:\"blog_deleted_successfully\";s:38:\"تم حذف المدونة بنجاح.\";s:10:\"blog_image\";s:21:\"مدونة _ صورة\";s:25:\"blog_updated_successfully\";s:42:\"تم تحديث المدونة بنجاح.\";s:24:\"blog_update_successfully\";s:42:\"تم تحديث المدونة بنجاح.\";s:9:\"edit_blog\";s:25:\"تعديل_المدونة\";s:3:\"cms\";s:34:\"نظام إدارة المحتوى\";s:9:\"cms_pages\";s:45:\"صفحات نظام إدارة المحتوى\";s:7:\"setting\";s:8:\"جلسة\";s:15:\"account_setting\";s:27:\"إعدادات الحساب\";s:3:\"faq\";s:18:\"التعليمات\";s:24:\"faq_deleted_successfully\";s:52:\"تم حذف الأسئلة الشائعة بنجاح\";s:7:\"add_faq\";s:40:\"إضافة الأسئلة الشائعة\";s:9:\"languages\";s:12:\"اللغات\";s:12:\"translations\";s:10:\"ترجمة\";s:35:\"you_will_not_be_able_to_revert_this\";s:35:\"لن تتمكن من عكس هذا!\";s:21:\"you_are_change_status\";s:29:\"أنت تغير حالتك..!\";s:13:\"yes_delete_it\";s:18:\"نعم احذفه!\";s:33:\"vehicle_type_updated_successfully\";s:49:\"تم تحديث نوع المركبة بنجاح.\";s:20:\"vehicle_type_updated\";s:37:\"تم تحديث نوع المركبة\";s:31:\"vehicle_type_passenger_capecity\";s:41:\"نوع المركبة_سعة_الركاب\";s:17:\"vehicle_type_name\";s:28:\"اسم نوع المركبة\";s:18:\"vehicle_type_image\";s:30:\"صورة نوع المركبة\";s:33:\"vehicle_type_deleted_successfully\";s:45:\"تم حذف نوع المركبة بنجاح.\";s:20:\"vehicle_type_created\";s:50:\"نوع المركبة التي تم إنشاؤها\";s:31:\"vehicle_type_added_successfully\";s:51:\"تمت إضافة نوع المركبة بنجاح.\";s:13:\"vehicle_types\";s:27:\"أنواع المركبات\";s:26:\"vehicle_passenger_capecity\";s:30:\"سعة ركاب المركبة\";s:13:\"vehicle_image\";s:23:\"صورة المركبة\";s:7:\"vehicle\";s:8:\"عربة\";s:4:\"type\";s:8:\"يكتب\";s:17:\"translation_setup\";s:25:\"إعداد الترجمة\";s:15:\"translation_key\";s:25:\"مفتاح الترجمة\";s:23:\"total_service_providers\";s:38:\"إجمالي مقدمي الخدمات\";s:14:\"total_services\";s:27:\"إجمالي الخدمات\";s:23:\"total_rides_umrah__hajj\";s:53:\"إجمالي الرحلات (العمرة والحج)\";s:11:\"total_rides\";s:27:\"إجمالي الرحلات\";s:12:\"total_drives\";s:40:\"إجمالي محركات الأقراص\";s:2:\"to\";s:10:\"بحيرة\";s:8:\"title_16\";s:17:\"العنوان_16\";s:8:\"title_15\";s:17:\"العنوان_15\";s:8:\"title_14\";s:17:\"العنوان_14\";s:8:\"title_13\";s:17:\"العنوان_13\";s:8:\"title_12\";s:17:\"العنوان_12\";s:8:\"title_11\";s:17:\"العنوان_11\";s:8:\"title_10\";s:17:\"العنوان_10\";s:7:\"title_9\";s:16:\"العنوان_9\";s:7:\"title_8\";s:16:\"العنوان_8\";s:7:\"title_7\";s:16:\"العنوان_7\";s:7:\"title_6\";s:16:\"العنوان_6\";s:7:\"title_5\";s:16:\"العنوان_5\";s:7:\"title_4\";s:16:\"العنوان_4\";s:7:\"title_3\";s:16:\"العنوان_3\";s:7:\"title_2\";s:16:\"العنوان_2\";s:7:\"title_1\";s:16:\"العنوان_1\";s:5:\"title\";s:14:\"العنوان\";s:22:\"this_field_is_required\";s:33:\"هذه الخانة مطلوبه.\";s:33:\"the_select_role_field_is_required\";s:40:\"حقل تحديد الدور مطلوب.\";s:53:\"the_profile_image_must_be_a_file_of_type_jpeg_png_jpg\";s:95:\"يجب أن تكون صورة الملف الشخصي من نوع الملف: jpeg، png، jpg.\";s:32:\"the_profile_image_must_be_a_file\";s:65:\"يجب أن تكون صورة الملف الشخصي ملفًا.\";s:35:\"the_profile_image_field_is_required\";s:51:\"حقل صورة الملف الشخصي مطلوب.\";s:46:\"the_phone_number_must_be_at_least_9_characters\";s:70:\"يجب أن يكون رقم الهاتف 9 أحرف على الأقل.\";s:54:\"the_phone_number_may_not_be_greater_than_11_characters\";s:67:\"لا يجوز أن يزيد رقم الهاتف عن 11 حرفًا.\";s:39:\"the_phone_number_has_already_been_taken\";s:52:\"لقد تم أخذ رقم الهاتف بالفعل.\";s:34:\"the_phone_number_field_is_required\";s:38:\"حقل رقم الهاتف مطلوب.\";s:30:\"the_password_field_is_required\";s:40:\"حقل كلمة المرور مطلوب.\";s:57:\"the_password_confirmation_does_not_match_the_new_password\";s:92:\"تأكيد كلمة المرور لا يتطابق مع كلمة المرور الجديدة\";s:32:\"the_first_name_field_is_required\";s:40:\"حقل الاسم الأول مطلوب.\";s:40:\"the_field_must_not_exceed_max_characters\";s:60:\"يجب ألا يتجاوز الحقل :max الشخصيات.\";s:26:\"the_field_must_be_a_string\";s:58:\"يجب أن يكون الحقل عبارة عن سلسلة\";s:38:\"the_email_must_be_in_lowercase_letters\";s:77:\"يجب أن يكون البريد الإلكتروني بأحرف صغيرة.\";s:32:\"the_email_has_already_been_taken\";s:66:\"لقد تم أخذ البريد الإلكتروني بالفعل.\";s:27:\"the_email_field_is_required\";s:52:\"حقل البريد الإلكتروني مطلوب.\";s:29:\"the_country_field_is_required\";s:29:\"حقل البلد مطلوب.\";s:44:\"the_confirm_password_must_match_the_password\";s:93:\"يجب أن تتطابق كلمة المرور التأكيدية مع كلمة المرور.\";s:38:\"the_confirm_password_field_is_required\";s:51:\"حقل تأكيد كلمة المرور مطلوب.\";s:12:\"text_field_3\";s:17:\"حقل النص 3\";s:12:\"text_field_2\";s:17:\"حقل النص 2\";s:12:\"text_field_1\";s:17:\"حقل النص 1\";s:6:\"text_3\";s:10:\"النص_3\";s:6:\"text_2\";s:10:\"النص_2\";s:6:\"text_1\";s:10:\"النص_1\";s:7:\"suspend\";s:10:\"تعليق\";s:16:\"sub_admin_detail\";s:38:\"تفاصيل المشرف الفرعي\";s:37:\"sub_admin_account_update_successfully\";s:62:\"تم تحديث حساب المشرف الفرعي بنجاح.\";s:38:\"sub_admin_account_suspend_successfully\";s:62:\"تم تعليق حساب المشرف الفرعي بنجاح.\";s:38:\"sub_admin_account_deleted_successfully\";s:58:\"تم حذف حساب المشرف الفرعي بنجاح.\";s:39:\"sub_admin_account_approved_successfully\";s:77:\"تمت الموافقة على حساب المشرف الفرعي بنجاح.\";s:36:\"sub_admin_account_added_successfully\";s:64:\"تمت إضافة حساب المشرف الفرعي بنجاح.\";s:9:\"sub_admin\";s:25:\"المشرف الفرعي\";s:6:\"submit\";s:14:\"يُقدِّم\";s:6:\"status\";s:8:\"حالة\";s:15:\"sort_descending\";s:23:\"ترتيب تنازلي\";s:14:\"sort_ascending\";s:19:\"فرز تصاعدي\";s:4:\"slug\";s:10:\"سبيكة\";s:7:\"showing\";s:6:\"عرض\";s:27:\"service_update_successfully\";s:40:\"تم تحديث الخدمة بنجاح.\";s:28:\"service_updated_successfully\";s:40:\"تم تحديث الخدمة بنجاح.\";s:15:\"service_updated\";s:34:\"الخدمة _ تم تحديثها\";s:17:\"service_not_found\";s:44:\"لم يتم العثور على الخدمة\";s:15:\"service_image_4\";s:31:\"الخدمة _ الصورة _ 4\";s:15:\"service_image_3\";s:31:\"الخدمة _ الصورة _ 3\";s:15:\"service_image_2\";s:31:\"الخدمة _ الصورة _ 2\";s:15:\"service_image_1\";s:31:\"الخدمة _ الصورة _ 1\";s:13:\"service_image\";s:27:\"الخدمة _ الصورة\";s:28:\"service_deleted_successfully\";s:36:\"تم حذف الخدمة بنجاح.\";s:15:\"service_created\";s:28:\"تم إنشاء الخدمة\";s:20:\"service_banner_image\";s:32:\"صورة لافتة الخدمة\";s:13:\"enter_title_8\";s:25:\"أدخل العنوان 8\";s:13:\"enter_title_9\";s:28:\"أدخل _ العنوان _9\";s:14:\"enter_title_10\";s:29:\"أدخل _ العنوان _10\";s:14:\"enter_title_11\";s:29:\"أدخل _ العنوان _11\";s:14:\"enter_title_12\";s:29:\"أدخل _ العنوان _12\";s:14:\"enter_title_13\";s:29:\"أدخل _ العنوان _13\";s:14:\"enter_title_14\";s:29:\"أدخل _ العنوان _14\";s:14:\"enter_title_15\";s:29:\"أدخل _ العنوان _15\";s:14:\"enter_title_16\";s:29:\"أدخل _ العنوان _16\";s:10:\"enter_type\";s:19:\"أدخل النوع\";s:13:\"enter_vehicle\";s:23:\"أدخل المركبة\";s:35:\"enter_your_email__password_to_login\";s:90:\"أدخل بريدك الإلكتروني وكلمة المرور لتسجيل الدخول\";s:7:\"entries\";s:18:\"الإدخالات\";s:6:\"female\";s:8:\"أنثى\";s:8:\"filtered\";s:10:\"مُصفى\";s:13:\"select_status\";s:19:\"حدد الحالة\";s:5:\"first\";s:10:\"أولاً\";s:15:\"for_translation\";s:14:\"للترجمة\";s:12:\"full_time_ch\";s:17:\"دوام كامل\";s:6:\"gender\";s:6:\"جنس\";s:9:\"heading_1\";s:16:\"العنوان_1\";s:9:\"heading_2\";s:16:\"العنوان_2\";s:9:\"hybrid_ch\";s:13:\"هجين_تش\";s:2:\"id\";s:6:\"وقت\";s:7:\"image_1\";s:14:\"الصورة_1\";s:8:\"inactive\";s:13:\"غير نشط\";s:3:\"key\";s:10:\"مفتاح\";s:27:\"language_added_successfully\";s:40:\"تمت إضافة اللغة بنجاح.\";s:13:\"language_code\";s:17:\"رمز اللغة\";s:28:\"language_code_already_exists\";s:41:\"رمز اللغة موجود بالفعل\";s:13:\"language_flag\";s:17:\"علم اللغة\";s:19:\"language_is_default\";s:33:\"زبان_یہ_ڈیفالٹ ہے۔\";s:15:\"language_is_rtl\";s:19:\"اللغة هي RTL\";s:13:\"language_name\";s:17:\"اسم اللغة\";s:28:\"language_name_already_exists\";s:41:\"اسم اللغة موجود بالفعل\";s:28:\"language_update_successfully\";s:38:\"تم تحديث اللغة بنجاح.\";s:4:\"last\";s:6:\"آخر\";s:9:\"last_name\";s:21:\"اسم العائلة\";s:8:\"location\";s:8:\"موقع\";s:5:\"login\";s:23:\"تسجيل الدخول\";s:6:\"logout\";s:23:\"تسجيل الخروج\";s:4:\"male\";s:6:\"ذكر\";s:6:\"module\";s:12:\"الوحدة\";s:25:\"module_added_successfully\";s:42:\"تمت إضافة الوحدة بنجاح.\";s:27:\"module_deleted_successfully\";s:36:\"تم حذف الوحدة بنجاح.\";s:11:\"module_name\";s:19:\"اسم الوحدة\";s:4:\"name\";s:6:\"اسم\";s:12:\"new_password\";s:36:\"كلمة المرور الجديدة\";s:4:\"next\";s:12:\"التالي\";s:2:\"no\";s:10:\"امرأة\";s:17:\"no_data_available\";s:37:\"لا توجد بيانات متاحة\";s:25:\"no_matching_records_found\";s:55:\"لم يتم العثور على سجلات مطابقة\";s:16:\"no_records_found\";s:47:\"لم يتم العثور على أي سجلات\";s:2:\"of\";s:2:\"ل\";s:12:\"order_number\";s:17:\"رقم الطلب\";s:8:\"password\";s:21:\"كلمة المرور\";s:21:\"password_confirmation\";s:32:\"تأكيد كلمة المرور\";s:29:\"permission_added_successfully\";s:40:\"تمت إضافة الإذن بنجاح.\";s:31:\"permission_deleted_successfully\";s:34:\"تم حذف الإذن بنجاح.\";s:5:\"phone\";s:8:\"هاتف\";s:34:\"please_enter_a_valid_email_address\";s:66:\"يرجى إدخال عنوان بريد إلكتروني صالح.\";s:8:\"previous\";s:8:\"سابق\";s:10:\"processing\";s:10:\"يعالج\";s:25:\"profile_edit_successfully\";s:50:\"تم تعديل الملف الشخصي بنجاح\";s:13:\"profile_image\";s:32:\"صورة الملف الشخصي\";s:8:\"question\";s:8:\"سؤال\";s:9:\"remote_ch\";s:19:\"قناة بعيدة\";s:23:\"role_added_successfully\";s:40:\"تمت إضافة الدور بنجاح.\";s:25:\"role_deleted_successfully\";s:34:\"تم حذف الدور بنجاح.\";s:25:\"role_updated_successfully\";s:38:\"تم تحديث الدور بنجاح.\";s:13:\"enter_title_7\";s:25:\"أدخل العنوان 7\";s:13:\"enter_title_6\";s:25:\"أدخل العنوان 6\";s:13:\"enter_title_5\";s:25:\"أدخل العنوان 5\";s:13:\"enter_title_4\";s:25:\"أدخل العنوان 4\";s:13:\"enter_title_3\";s:25:\"أدخل العنوان 3\";s:13:\"enter_title_2\";s:25:\"أدخل العنوان 2\";s:13:\"enter_title_1\";s:25:\"أدخل العنوان 1\";s:11:\"enter_title\";s:23:\"أدخل العنوان\";s:14:\"enter_text_for\";s:22:\"أدخل النص لـ\";s:18:\"enter_text_field_3\";s:33:\"أدخل حقل النص رقم 3\";s:18:\"enter_text_field_2\";s:33:\"أدخل حقل النص رقم 2\";s:18:\"enter_text_field_1\";s:33:\"أدخل حقل النص رقم 1\";s:24:\"enter_text_3_description\";s:30:\"أدخل النص 3 الوصف\";s:12:\"enter_text_3\";s:13:\"输入文本3\";s:24:\"enter_text_2_description\";s:30:\"أدخل النص 2 الوصف\";s:12:\"enter_text_2\";s:19:\"أدخل النص 2\";s:12:\"enter_text_1\";s:19:\"أدخل النص 1\";s:24:\"enter_text_1_description\";s:35:\"أدخل وصف النص الأول\";s:13:\"enter_service\";s:21:\"أدخل الخدمة\";s:14:\"enter_question\";s:21:\"أدخل السؤال\";s:11:\"enter_order\";s:19:\"أدخل الطلب\";s:14:\"enter_location\";s:21:\"أدخل الموقع\";s:20:\"enter_language_order\";s:30:\"أدخل ترتيب اللغة\";s:9:\"enter_key\";s:25:\"مفتاح الإدخال\";s:15:\"enter_heading_2\";s:25:\"أدخل العنوان 2\";s:15:\"enter_heading_1\";s:25:\"أدخل العنوان 1\";s:20:\"enter_description_16\";s:29:\"أدخل الوصف رقم 16\";s:20:\"enter_description_15\";s:29:\"أدخل الوصف رقم 15\";s:20:\"enter_description_14\";s:29:\"أدخل الوصف رقم 14\";s:20:\"enter_description_13\";s:29:\"أدخل الوصف رقم 13\";s:20:\"enter_description_12\";s:29:\"أدخل الوصف رقم 12\";s:20:\"enter_description_11\";s:29:\"أدخل الوصف رقم 11\";s:20:\"enter_description_10\";s:29:\"أدخل الوصف رقم 10\";s:19:\"enter_description_9\";s:28:\"أدخل الوصف رقم 9\";s:19:\"enter_description_8\";s:28:\"أدخل الوصف رقم 8\";s:19:\"enter_description_7\";s:28:\"أدخل الوصف رقم 7\";s:19:\"enter_description_6\";s:28:\"أدخل الوصف رقم 6\";s:19:\"enter_description_5\";s:28:\"أدخل الوصف رقم 5\";s:19:\"enter_description_4\";s:28:\"أدخل الوصف رقم 4\";s:19:\"enter_description_3\";s:28:\"أدخل الوصف رقم 3\";s:19:\"enter_description_2\";s:28:\"أدخل الوصف رقم 2\";s:19:\"enter_description_1\";s:28:\"أدخل الوصف رقم 1\";s:17:\"enter_description\";s:26:\"أدخل الوصف رقم\";s:13:\"enter_content\";s:23:\"أدخل المحتوى\";s:12:\"enter_career\";s:23:\"دخول_الوظيفة\";s:12:\"enter_answer\";s:23:\"أدخل الإجابة\";s:2:\"en\";s:6:\"أنا\";s:5:\"email\";s:25:\"بريد إلكتروني\";s:12:\"edit_vehicle\";s:25:\"تعديل_المركبة\";s:14:\"edit_sub_admin\";s:36:\"تعديل المشرف الفرعي\";s:12:\"edit_service\";s:23:\"خدمة التحرير\";s:9:\"edit_role\";s:21:\"تعديل الدور\";s:12:\"edit_profile\";s:34:\"تعديل الملف الشخصي\";s:17:\"edit_language_key\";s:32:\"تحرير مفتاح اللغة\";s:13:\"edit_language\";s:21:\"تعديل اللغة\";s:13:\"edit_category\";s:21:\"تعديل الفئة\";s:11:\"edit_career\";s:23:\"تعديل_المهنة\";s:4:\"edit\";s:8:\"يحرر\";s:14:\"description_16\";s:13:\"الوصف_16\";s:14:\"description_15\";s:13:\"الوصف_15\";s:14:\"description_14\";s:13:\"الوصف_14\";s:14:\"description_13\";s:13:\"الوصف_13\";s:14:\"description_12\";s:13:\"الوصف_12\";s:14:\"description_11\";s:13:\"الوصف_11\";s:14:\"description_10\";s:13:\"الوصف_10\";s:13:\"description_9\";s:12:\"الوصف_9\";s:13:\"description_8\";s:12:\"الوصف_8\";s:13:\"description_7\";s:12:\"الوصف_7\";s:13:\"description_6\";s:12:\"الوصف_6\";s:13:\"description_5\";s:12:\"الوصف_5\";s:13:\"description_4\";s:12:\"الوصف_4\";s:13:\"description_3\";s:12:\"الوصف_3\";s:13:\"description_2\";s:12:\"الوصف_2\";s:13:\"description_1\";s:12:\"الوصف_1\";s:11:\"description\";s:10:\"الوصف\";s:6:\"delete\";s:8:\"يمسح\";s:19:\"create_language_key\";s:32:\"إنشاء مفتاح اللغة\";s:15:\"create_category\";s:21:\"إنشاء_الفئة\";s:10:\"created_at\";s:22:\"تم إنشاؤه في\";s:6:\"create\";s:8:\"يخلق\";s:10:\"country_id\";s:25:\"البلد _ الهوية\";s:7:\"content\";s:10:\"محتوى\";s:16:\"confirm_password\";s:32:\"تأكيد كلمة المرور\";s:9:\"confirmed\";s:10:\"مؤكد..\";s:5:\"close\";s:8:\"يغلق\";s:15:\"change_password\";s:32:\"تغيير كلمة المرور\";s:29:\"category_updated_successfully\";s:38:\"تم تحديث الفئة بنجاح.\";s:13:\"category_name\";s:17:\"اسم الفئة\";s:8:\"category\";s:6:\"فئة\";s:10:\"categories\";s:8:\"فئات\";s:27:\"career_updated_successfully\";s:40:\"تم تحديث المهنة بنجاح.\";s:11:\"career_type\";s:19:\"نوع المهنة\";s:11:\"career_name\";s:19:\"اسم المهنة\";s:15:\"career_location\";s:21:\"موقع المهنة\";s:18:\"career_description\";s:19:\"وصف المهنة\";s:27:\"career_deleted_successfully\";s:36:\"تم حذف المهنة بنجاح.\";s:14:\"career_created\";s:28:\"مهنة تم إنشاؤها\";s:25:\"career_added_successfully\";s:42:\"تمت إضافة المهنة بنجاح.\";s:6:\"cancel\";s:8:\"يلغي\";s:11:\"button_text\";s:13:\"نص الزر\";s:12:\"banner_title\";s:25:\"عنوان اللافتة\";s:12:\"banner_image\";s:21:\"صورة الشعار\";s:4:\"back\";s:6:\"خلف\";s:11:\"author_name\";s:19:\"اسم المؤلف\";s:12:\"are_you_sure\";s:24:\"هل أنت متأكد؟\";s:8:\"approved\";s:12:\"موافقة\";s:6:\"answer\";s:10:\"إجابة\";s:11:\"add_vehicle\";s:17:\"أضف مركبة\";s:13:\"add_sub_admin\";s:30:\"إضافة مسؤول فرعي\";s:8:\"add_role\";s:17:\"إضافة دور\";s:10:\"add_module\";s:30:\"إضافة وحدة نمطية\";s:14:\"add_permission\";s:17:\"إضافة إذن\";s:7:\"add_new\";s:19:\"إضافة جديد\";s:12:\"add_language\";s:17:\"إضافة لغة\";s:10:\"add_career\";s:19:\"إضافة مهنة\";s:15:\"additional_info\";s:27:\"معلومات إضافية\";s:6:\"active\";s:8:\"نشيط\";s:7:\"actions\";s:14:\"الأفعال\";s:16:\"acceptpngjpgjpeg\";s:24:\"قبول: png،jpg،jpeg\";}', 2058354184),
('translations-en', 'a:356:{s:9:\"dashboard\";s:9:\"dashboard\";s:14:\"total_customer\";s:14:\"Total Customer\";s:23:\"total_service_providers\";s:23:\"total_service_providers\";s:12:\"total_drives\";s:12:\"total_drives\";s:11:\"total_rides\";s:11:\"total_rides\";s:23:\"total_rides_umrah__hajj\";s:26:\"total_rides (Umrah & Hajj)\";s:14:\"total_services\";s:14:\"total_services\";s:16:\"last_month_rides\";s:16:\"Last Month Rides\";s:4:\"back\";s:4:\"Back\";s:7:\"setting\";s:7:\"Setting\";s:19:\"create_language_key\";s:19:\"Create Language Key\";s:3:\"key\";s:3:\"Key\";s:9:\"enter_key\";s:9:\"Enter key\";s:15:\"for_translation\";s:15:\"for Translation\";s:14:\"enter_text_for\";s:14:\"Enter text for\";s:15:\"account_setting\";s:15:\"Account Setting\";s:12:\"edit_profile\";s:12:\"Edit Profile\";s:10:\"first_name\";s:10:\"first_name\";s:9:\"last_name\";s:9:\"last_name\";s:13:\"profile_image\";s:13:\"profile_image\";s:16:\"acceptpngjpgjpeg\";s:19:\"accept:png,jpg,jpeg\";s:5:\"email\";s:5:\"email\";s:5:\"phone\";s:5:\"phone\";s:6:\"submit\";s:6:\"submit\";s:6:\"cancel\";s:6:\"cancel\";s:15:\"change_password\";s:15:\"change_password\";s:12:\"new_password\";s:12:\"new_password\";s:21:\"password_confirmation\";s:21:\"password_confirmation\";s:17:\"edit_language_key\";s:17:\"Edit Language Key\";s:32:\"translation_updated_successfully\";s:32:\"Translation updated successfully\";s:5:\"login\";s:5:\"login\";s:35:\"enter_your_email__password_to_login\";s:36:\"Enter your email & password to login\";s:8:\"password\";s:8:\"Password\";s:12:\"enter_answer\";s:12:\"Enter Answer\";s:24:\"faq_deleted_successfully\";s:24:\"Faq deleted successfully\";s:13:\"enter_content\";s:13:\"Enter content\";s:9:\"sub_admin\";s:9:\"Sub Admin\";s:7:\"add_new\";s:7:\"Add New\";s:2:\"id\";s:2:\"ID\";s:16:\"sub_admin_detail\";s:16:\"Sub Admin Detail\";s:6:\"gender\";s:6:\"Gender\";s:6:\"status\";s:6:\"Status\";s:6:\"action\";s:6:\"Action\";s:13:\"add_sub_admin\";s:13:\"Add Sub Admin\";s:15:\"select_a_gender\";s:15:\"Select a Gender\";s:4:\"male\";s:4:\"Male\";s:6:\"female\";s:6:\"Female\";s:16:\"confirm_password\";s:16:\"Confirm Password\";s:11:\"select_role\";s:11:\"Select Role\";s:13:\"select_a_role\";s:13:\"Select a role\";s:5:\"close\";s:5:\"Close\";s:10:\"processing\";s:10:\"Processing\";s:4:\"show\";s:4:\"Show\";s:7:\"entries\";s:7:\"Entries\";s:25:\"no_matching_records_found\";s:25:\"No matching records found\";s:16:\"no_records_found\";s:16:\"No records found\";s:7:\"showing\";s:7:\"Showing\";s:2:\"to\";s:2:\"To\";s:2:\"of\";s:2:\"Of\";s:8:\"filtered\";s:8:\"Filtered\";s:6:\"search\";s:6:\"Search\";s:5:\"first\";s:5:\"First\";s:4:\"last\";s:4:\"Last\";s:4:\"next\";s:4:\"Next\";s:8:\"previous\";s:8:\"Previous\";s:7:\"profile\";s:7:\"Profile\";s:6:\"logout\";s:6:\"Logout\";s:12:\"are_you_sure\";s:13:\"Are you sure?\";s:21:\"you_are_change_status\";s:24:\"You are change status..!\";s:9:\"confirmed\";s:11:\"Confirmed..\";s:35:\"you_will_not_be_able_to_revert_this\";s:36:\"You will not be able to revert this!\";s:13:\"yes_delete_it\";s:15:\"Yes, delete it!\";s:8:\"approved\";s:8:\"Approved\";s:4:\"edit\";s:4:\"Edit\";s:6:\"delete\";s:6:\"Delete\";s:7:\"suspend\";s:7:\"Suspend\";s:32:\"the_first_name_field_is_required\";s:33:\"The first name field is required.\";s:44:\"the_first_name_must_be_at_least_4_characters\";s:45:\"The first name must be at least 4 characters.\";s:31:\"the_last_name_field_is_required\";s:32:\"The last name field is required.\";s:34:\"the_phone_number_field_is_required\";s:35:\"The phone number field is required.\";s:46:\"the_phone_number_must_be_at_least_9_characters\";s:47:\"The phone number must be at least 9 characters.\";s:54:\"the_phone_number_may_not_be_greater_than_11_characters\";s:55:\"The phone number may not be greater than 11 characters.\";s:39:\"the_phone_number_has_already_been_taken\";s:40:\"The phone number has already been taken.\";s:28:\"the_gender_field_is_required\";s:29:\"The gender field is required.\";s:27:\"the_email_field_is_required\";s:28:\"The email field is required.\";s:34:\"please_enter_a_valid_email_address\";s:35:\"Please enter a valid email address.\";s:32:\"the_email_has_already_been_taken\";s:33:\"The email has already been taken.\";s:35:\"the_profile_image_field_is_required\";s:36:\"The profile image field is required.\";s:32:\"the_profile_image_must_be_a_file\";s:33:\"The profile image must be a file.\";s:53:\"the_profile_image_must_be_a_file_of_type_jpeg_png_jpg\";s:57:\"The profile image must be a file of type: jpeg, png, jpg.\";s:30:\"the_password_field_is_required\";s:31:\"The password field is required.\";s:44:\"the_confirm_password_must_match_the_password\";s:45:\"The confirm password must match the password.\";s:38:\"the_confirm_password_field_is_required\";s:39:\"The confirm password field is required.\";s:36:\"sub_admin_account_added_successfully\";s:37:\"Sub Admin Account Added Successfully.\";s:38:\"sub_admin_account_suspend_successfully\";s:39:\"Sub Admin Account Suspend Successfully.\";s:14:\"edit_sub_admin\";s:14:\"Edit Sub Admin\";s:33:\"the_select_role_field_is_required\";s:34:\"The select role field is required.\";s:22:\"this_field_is_required\";s:22:\"This field is required\";s:40:\"the_field_must_not_exceed_max_characters\";s:42:\"The field must not exceed :max characters.\";s:35:\"the_email_address_is_already_in_use\";s:36:\"The email address is already in use.\";s:37:\"sub_admin_account_update_successfully\";s:38:\"Sub Admin Account Update Successfully.\";s:38:\"sub_admin_account_deleted_successfully\";s:39:\"Sub Admin Account Deleted Successfully.\";s:5:\"roles\";s:5:\"Roles\";s:4:\"name\";s:4:\"Name\";s:8:\"add_role\";s:8:\"Add Role\";s:6:\"module\";s:6:\"Module\";s:10:\"select_all\";s:10:\"Select All\";s:13:\"blog_and_news\";s:13:\"blog_and_news\";s:10:\"blog_image\";s:10:\"blog_image\";s:5:\"title\";s:5:\"title\";s:4:\"slug\";s:4:\"slug\";s:11:\"author_name\";s:11:\"author_name\";s:10:\"created_at\";s:10:\"created_at\";s:8:\"add_blog\";s:8:\"add_blog\";s:12:\"order_number\";s:12:\"order_number\";s:7:\"content\";s:7:\"content\";s:13:\"select_status\";s:13:\"select_status\";s:6:\"active\";s:6:\"active\";s:8:\"inactive\";s:8:\"inactive\";s:9:\"edit_blog\";s:9:\"edit_blog\";s:20:\"enter_language_order\";s:20:\"enter_language_order\";s:24:\"blog_update_successfully\";s:25:\"Blog Update Successfully.\";s:26:\"the_field_must_be_a_string\";s:26:\"The field must be a string\";s:38:\"the_email_must_be_in_lowercase_letters\";s:39:\"The email must be in lowercase letters.\";s:25:\"profile_edit_successfully\";s:25:\"Profile edit Successfully\";s:39:\"sub_admin_account_approved_successfully\";s:40:\"Sub Admin Account Approved Successfully.\";s:14:\"select_country\";s:14:\"select_country\";s:29:\"the_country_field_is_required\";s:30:\"The country field is required.\";s:10:\"country_id\";s:10:\"country_id\";s:23:\"role_added_successfully\";s:24:\"Role Added Successfully.\";s:13:\"vehicle_types\";s:13:\"vehicle_types\";s:18:\"vehicle_type_image\";s:18:\"vehicle_type_image\";s:31:\"vehicle_type_passenger_capecity\";s:31:\"vehicle_type_passenger_capecity\";s:17:\"vehicle_type_name\";s:17:\"vehicle_type_name\";s:20:\"vehicle_type_created\";s:20:\"vehicle_type_created\";s:20:\"vehicle_type_updated\";s:20:\"vehicle_type_updated\";s:11:\"add_service\";s:11:\"Add Service\";s:13:\"service_image\";s:13:\"service_image\";s:7:\"service\";s:7:\"service\";s:13:\"enter_service\";s:13:\"enter_service\";s:16:\"select_countries\";s:16:\"select_countries\";s:11:\"add_vehicle\";s:11:\"add_vehicle\";s:13:\"vehicle_image\";s:13:\"vehicle_image\";s:26:\"vehicle_passenger_capecity\";s:26:\"vehicle_passenger_capecity\";s:7:\"vehicle\";s:7:\"vehicle\";s:13:\"enter_vehicle\";s:13:\"enter_vehicle\";s:31:\"vehicle_type_added_successfully\";s:32:\"vehicle_type_added_successfully.\";s:33:\"vehicle_type_deleted_successfully\";s:34:\"vehicle_type_deleted_successfully.\";s:12:\"edit_service\";s:12:\"edit_service\";s:8:\"services\";s:8:\"services\";s:12:\"service_name\";s:12:\"service_name\";s:15:\"service_created\";s:15:\"service_created\";s:15:\"service_updated\";s:15:\"service_updated\";s:26:\"service_added_successfully\";s:27:\"Service Added Successfully.\";s:27:\"service_update_successfully\";s:28:\"Service Update Successfully.\";s:17:\"service_not_found\";s:17:\"Service not found\";s:12:\"edit_vehicle\";s:12:\"edit_vehicle\";s:33:\"vehicle_type_updated_successfully\";s:34:\"vehicle_type_updated_successfully.\";s:23:\"blog_added_successfully\";s:24:\"Blog Added Successfully.\";s:9:\"languages\";s:9:\"languages\";s:13:\"language_flag\";s:13:\"language_flag\";s:13:\"language_name\";s:13:\"language_name\";s:13:\"language_code\";s:13:\"language_code\";s:15:\"language_is_rtl\";s:15:\"language_is_RTL\";s:12:\"add_language\";s:12:\"add_language\";s:19:\"language_is_default\";s:19:\"language_is_default\";s:13:\"edit_language\";s:13:\"edit_language\";s:28:\"language_code_already_exists\";s:28:\"Language code already exists\";s:28:\"language_name_already_exists\";s:28:\"Language name already exists\";s:28:\"language_update_successfully\";s:29:\"Language Update Successfully.\";s:12:\"translations\";s:12:\"translations\";s:17:\"translation_setup\";s:17:\"translation_setup\";s:15:\"translation_key\";s:15:\"translation_key\";s:9:\"subadmins\";s:10:\"sub-admins\";s:7:\"modules\";s:7:\"modules\";s:11:\"permissions\";s:11:\"permissions\";s:25:\"role_deleted_successfully\";s:26:\"Role Deleted Successfully.\";s:9:\"edit_role\";s:9:\"edit_role\";s:25:\"role_updated_successfully\";s:26:\"Role Updated Successfully.\";s:10:\"add_module\";s:10:\"add_module\";s:27:\"module_deleted_successfully\";s:28:\"Module Deleted Successfully.\";s:14:\"add_permission\";s:14:\"add_permission\";s:11:\"module_name\";s:11:\"module_name\";s:13:\"select_module\";s:13:\"select_module\";s:31:\"permission_deleted_successfully\";s:32:\"Permission Deleted Successfully.\";s:25:\"module_added_successfully\";s:26:\"Module Added Successfully.\";s:29:\"permission_added_successfully\";s:30:\"Permission Added Successfully.\";s:57:\"the_password_confirmation_does_not_match_the_new_password\";s:57:\"The_password_confirmation_does_not_match_the_new_password\";s:3:\"cms\";s:3:\"CMS\";s:14:\"banner_heading\";s:14:\"Banner Heading\";s:12:\"banner_title\";s:12:\"Banner Title\";s:11:\"button_text\";s:11:\"Button Text\";s:3:\"faq\";s:3:\"FAQ\";s:28:\"service_deleted_successfully\";s:29:\"Service Deleted Successfully.\";s:7:\"add_faq\";s:7:\"add_faq\";s:11:\"enter_order\";s:11:\"enter_order\";s:8:\"question\";s:8:\"question\";s:14:\"enter_question\";s:14:\"enter_question\";s:6:\"answer\";s:6:\"answer\";s:4:\"blog\";s:4:\"Blog\";s:11:\"description\";s:11:\"description\";s:17:\"enter_description\";s:17:\"enter_description\";s:28:\"service_updated_successfully\";s:29:\"Service Updated Successfully.\";s:15:\"service_image_1\";s:15:\"service_image_1\";s:15:\"service_image_2\";s:15:\"service_image_2\";s:15:\"service_image_3\";s:15:\"service_image_3\";s:15:\"service_image_4\";s:15:\"service_image_4\";s:20:\"service_banner_image\";s:20:\"service_banner_image\";s:15:\"additional_info\";s:15:\"additional_info\";s:12:\"text_field_1\";s:12:\"text_field_1\";s:18:\"enter_text_field_1\";s:18:\"enter_text_field_1\";s:12:\"text_field_2\";s:12:\"text_field_2\";s:18:\"enter_text_field_2\";s:18:\"enter_text_field_2\";s:12:\"text_field_3\";s:12:\"text_field_3\";s:18:\"enter_text_field_3\";s:18:\"enter_text_field_3\";s:13:\"description_1\";s:13:\"description_1\";s:19:\"enter_description_1\";s:19:\"enter_description_1\";s:13:\"description_2\";s:13:\"description_2\";s:19:\"enter_description_2\";s:19:\"enter_description_2\";s:13:\"description_3\";s:13:\"description_3\";s:19:\"enter_description_3\";s:19:\"enter_description_3\";s:6:\"text_1\";s:6:\"text_1\";s:12:\"enter_text_1\";s:12:\"enter_text_1\";s:24:\"enter_text_1_description\";s:24:\"enter_text_1_description\";s:6:\"text_2\";s:6:\"text_2\";s:12:\"enter_text_2\";s:12:\"enter_text_2\";s:24:\"enter_text_2_description\";s:24:\"enter_text_2_description\";s:6:\"text_3\";s:6:\"text_3\";s:12:\"enter_text_3\";s:12:\"enter_text_3\";s:24:\"enter_text_3_description\";s:24:\"enter_text_3_description\";s:7:\"title_1\";s:7:\"title_1\";s:13:\"enter_title_1\";s:13:\"enter_title_1\";s:7:\"title_2\";s:7:\"title_2\";s:13:\"enter_title_2\";s:13:\"enter_title_2\";s:7:\"title_3\";s:7:\"title_3\";s:13:\"enter_title_3\";s:13:\"enter_title_3\";s:7:\"image_1\";s:7:\"image_1\";s:9:\"heading_1\";s:9:\"heading_1\";s:15:\"enter_heading_1\";s:15:\"enter_heading_1\";s:7:\"title_4\";s:7:\"title_4\";s:13:\"enter_title_4\";s:13:\"enter_title_4\";s:7:\"title_5\";s:7:\"title_5\";s:13:\"enter_title_5\";s:13:\"enter_title_5\";s:7:\"title_6\";s:7:\"title_6\";s:13:\"enter_title_6\";s:13:\"enter_title_6\";s:7:\"title_7\";s:7:\"title_7\";s:13:\"enter_title_7\";s:13:\"enter_title_7\";s:13:\"description_4\";s:13:\"description_4\";s:19:\"enter_description_4\";s:19:\"enter_description_4\";s:13:\"description_5\";s:13:\"description_5\";s:19:\"enter_description_5\";s:19:\"enter_description_5\";s:13:\"description_6\";s:13:\"description_6\";s:19:\"enter_description_6\";s:19:\"enter_description_6\";s:11:\"enter_title\";s:11:\"enter_title\";s:12:\"banner_image\";s:12:\"Banner Image\";s:9:\"heading_2\";s:9:\"heading_2\";s:15:\"enter_heading_2\";s:15:\"enter_heading_2\";s:7:\"title_8\";s:7:\"title_8\";s:13:\"enter_title_8\";s:13:\"enter_title_8\";s:7:\"title_9\";s:7:\"title_9\";s:13:\"enter_title_9\";s:13:\"enter_title_9\";s:8:\"title_10\";s:8:\"title_10\";s:14:\"enter_title_10\";s:14:\"enter_title_10\";s:8:\"title_11\";s:8:\"title_11\";s:14:\"enter_title_11\";s:14:\"enter_title_11\";s:8:\"title_12\";s:8:\"title_12\";s:14:\"enter_title_12\";s:14:\"enter_title_12\";s:8:\"title_13\";s:8:\"title_13\";s:14:\"enter_title_13\";s:14:\"enter_title_13\";s:8:\"title_14\";s:8:\"title_14\";s:14:\"enter_title_14\";s:14:\"enter_title_14\";s:8:\"title_15\";s:8:\"title_15\";s:14:\"enter_title_15\";s:14:\"enter_title_15\";s:8:\"title_16\";s:8:\"title_16\";s:14:\"enter_title_16\";s:14:\"enter_title_16\";s:13:\"description_7\";s:13:\"description_7\";s:19:\"enter_description_7\";s:19:\"enter_description_7\";s:13:\"description_8\";s:13:\"description_8\";s:19:\"enter_description_8\";s:19:\"enter_description_8\";s:13:\"description_9\";s:13:\"description_9\";s:19:\"enter_description_9\";s:19:\"enter_description_9\";s:14:\"description_10\";s:14:\"description_10\";s:20:\"enter_description_10\";s:20:\"enter_description_10\";s:14:\"description_11\";s:14:\"description_11\";s:20:\"enter_description_11\";s:20:\"enter_description_11\";s:14:\"description_12\";s:14:\"description_12\";s:20:\"enter_description_12\";s:20:\"enter_description_12\";s:14:\"description_13\";s:14:\"description_13\";s:20:\"enter_description_13\";s:20:\"enter_description_13\";s:14:\"description_14\";s:14:\"description_14\";s:20:\"enter_description_14\";s:20:\"enter_description_14\";s:14:\"description_15\";s:14:\"description_15\";s:20:\"enter_description_15\";s:20:\"enter_description_15\";s:14:\"description_16\";s:14:\"description_16\";s:20:\"enter_description_16\";s:20:\"enter_description_16\";s:9:\"cms_pages\";s:9:\"cms_pages\";s:2:\"no\";s:2:\"no\";s:7:\"actions\";s:7:\"actions\";s:17:\"no_data_available\";s:17:\"no_data_available\";s:14:\"sort_ascending\";s:14:\"sort_ascending\";s:15:\"sort_descending\";s:15:\"sort_descending\";s:25:\"blog_updated_successfully\";s:26:\"Blog updated successfully.\";s:25:\"blog_deleted_successfully\";s:26:\"Blog Deleted Successfully.\";s:15:\"create_category\";s:15:\"create_category\";s:13:\"category_name\";s:13:\"category_name\";s:6:\"create\";s:6:\"create\";s:13:\"edit_category\";s:13:\"edit_category\";s:6:\"update\";s:6:\"update\";s:10:\"categories\";s:10:\"categories\";s:29:\"category_updated_successfully\";s:30:\"Category Updated Successfully.\";s:7:\"careers\";s:7:\"careers\";s:11:\"career_name\";s:11:\"career_name\";s:11:\"career_type\";s:11:\"career_type\";s:15:\"career_location\";s:15:\"career_location\";s:14:\"career_created\";s:14:\"career_created\";s:10:\"add_career\";s:10:\"add_career\";s:12:\"enter_career\";s:12:\"enter_career\";s:8:\"location\";s:8:\"location\";s:14:\"enter_location\";s:14:\"enter_location\";s:4:\"type\";s:4:\"type\";s:10:\"enter_type\";s:10:\"enter_type\";s:8:\"category\";s:8:\"category\";s:15:\"select_category\";s:15:\"select_category\";s:6:\"hybrid\";s:6:\"Hybrid\";s:9:\"full_time\";s:9:\"Full Time\";s:6:\"remote\";s:6:\"Remote\";s:13:\"select_option\";s:13:\"Select Option\";s:18:\"career_description\";s:18:\"career_description\";s:27:\"language_added_successfully\";s:28:\"Language Added Successfully.\";s:25:\"career_added_successfully\";s:26:\"Career added successfully.\";s:11:\"edit_career\";s:11:\"edit_career\";s:2:\"en\";s:2:\"en\";s:27:\"career_updated_successfully\";s:28:\"Career updated successfully.\";s:27:\"career_deleted_successfully\";s:28:\"Career deleted successfully.\";s:12:\"full_time_ch\";s:12:\"full_time_ch\";s:9:\"remote_ch\";s:9:\"remote_ch\";s:9:\"hybrid_ch\";s:9:\"hybrid_ch\";s:0:\"\";s:9:\"偏僻的\";s:3:\"_ch\";s:3:\"_ch\";s:19:\"relevant_experience\";s:19:\"relevant_experience\";s:25:\"enter_relevant_experience\";s:25:\"enter_relevant_experience\";s:16:\"total_experience\";s:16:\"total_experience\";s:22:\"enter_total_experience\";s:22:\"enter_total_experience\";s:8:\"job_type\";s:8:\"job_type\";s:14:\"enter_job_type\";s:14:\"enter_job_type\";s:14:\"no_of_openings\";s:14:\"no_of_openings\";s:20:\"enter_no_of_openings\";s:20:\"enter_no_of_openings\";s:6:\"text_4\";s:6:\"text_4\";s:12:\"enter_text_4\";s:12:\"enter_text_4\";s:15:\"job_description\";s:15:\"job_description\";s:21:\"enter_job_description\";s:21:\"enter_job_description\";s:14:\"responsibility\";s:14:\"responsibility\";s:20:\"enter_responsibility\";s:20:\"enter_responsibility\";s:11:\"edit_module\";s:11:\"edit_module\";s:28:\"profile_updated_successfully\";s:28:\"profile_updated_successfully\";s:24:\"please_enter_a_role_name\";s:25:\"Please enter a role name.\";}', 2058351159);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint DEFAULT NULL,
  `phonecode` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_flag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` int NOT NULL DEFAULT '0',
  `lang_is_rtl` int NOT NULL DEFAULT '0',
  `is_delete` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `lang_name`, `lang_code`, `lang_flag`, `is_default`, `lang_is_rtl`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', '1741166259_lang_flag.gif', 0, 1, 0, '2025-02-13 03:10:11', '2025-03-05 14:17:39'),
(2, 'Arabic', 'ar', '1741166249_lang_flag.gif', 0, 0, 0, '2025-02-13 03:12:02', '2025-03-05 14:17:29'),
(3, 'Urdu', 'ur', '1741166228_lang_flag.gif', 0, 0, 0, '2025-02-13 03:13:03', '2025-03-05 14:17:08'),
(10, 'Chinese', 'ch', '1742990075_lang_flag.png', 0, 0, 0, '2025-03-19 09:13:15', '2025-03-26 06:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `languages_m`
--

DROP TABLE IF EXISTS `languages_m`;
CREATE TABLE IF NOT EXISTS `languages_m` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `lang_is_rtl` tinyint(1) NOT NULL,
  `lang_flag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_06_095834_add_fields_to_users_table', 2),
(5, '2025_02_06_110438_create_permissions_table', 3),
(6, '2025_02_06_110737_add_fields_to_permissions_table', 4),
(7, '2025_02_06_112527_create_modules_table', 5),
(10, '2025_02_06_121852_create_translations_table', 6),
(12, '2025_02_07_045200_create_modules_table', 7),
(13, '2025_02_07_045835_create_permissions_table', 8),
(14, '2025_02_07_051239_add_fields_to_permissions_table', 8),
(15, '2025_02_07_051747_create_modules_table', 9),
(16, '2025_02_07_052054_create_languages_table', 10),
(17, '2025_02_12_063433_create_oauth_auth_codes_table', 11),
(18, '2025_02_12_063434_create_oauth_access_tokens_table', 11),
(19, '2025_02_12_063435_create_oauth_refresh_tokens_table', 11),
(20, '2025_02_12_063436_create_oauth_clients_table', 11),
(21, '2025_02_12_063437_create_oauth_personal_access_clients_table', 11),
(22, '2025_02_13_061516_create_user_languages_table', 12),
(26, '2023_12_01_095622_create_languages_table', 13),
(31, '2025_02_14_055437_create_platform_keys_table', 14),
(32, '2025_02_14_055438_create_platform_translations_table', 14),
(35, '2025_02_17_044359_create_faqs_table', 15),
(39, '2025_02_17_103810_create_blogs_table', 16),
(42, '2025_02_18_055359_create_services_table', 17),
(44, '2025_02_18_083625_create_sub_services_table', 18),
(47, '2025_02_27_050249_create_model_names_table', 19),
(50, '2025_02_28_054740_create_vehicles_table', 20),
(51, '2025_03_07_063452_add_is_delete_to_service_translations_table', 21),
(53, '2025_03_18_105516_create_careers_table', 22),
(54, '2025_03_19_073454_rename_careers_to_career_translate', 23),
(56, '2025_03_19_074123_create_careers_table', 24),
(58, '2025_03_20_103021_add_column_in_careers_table', 25),
(60, '2025_03_21_105455_create_career_job_applications_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 8),
(1, 'App\\Models\\User', 9),
(1, 'App\\Models\\User', 10),
(1, 'App\\Models\\User', 11),
(1, 'App\\Models\\User', 12),
(1, 'App\\Models\\User', 13);

-- --------------------------------------------------------

--
-- Table structure for table `model_names`
--

DROP TABLE IF EXISTS `model_names`;
CREATE TABLE IF NOT EXISTS `model_names` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Faq', '2025-02-18 05:58:05', '2025-02-18 05:58:05'),
(5, 'Country', '2025-02-18 05:58:19', '2025-02-18 05:58:19'),
(6, 'Service', '2025-02-18 05:58:26', '2025-02-18 05:58:26'),
(7, 'Sub-Service', '2025-02-18 05:58:35', '2025-02-18 05:58:35'),
(8, 'Translation', '2025-02-18 05:58:44', '2025-02-18 05:58:44'),
(9, 'Dashboard', '2025-02-18 05:58:55', '2025-02-18 05:58:55'),
(10, 'Language', '2025-03-05 14:36:50', '2025-03-05 14:36:50'),
(11, 'Sub Admin', '2025-03-05 14:39:29', '2025-03-05 14:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Labbah Personal Access Client', 'Zd2rjKiQU6YzlcKeuBo56s6gibFFBjoJ18Eb4GTq', NULL, 'http://localhost', 1, 0, 0, '2025-02-12 01:04:54', '2025-02-12 01:04:54'),
(2, NULL, 'Labbah Password Grant Client', 'JoQmzzxuyWtG0HSCeq1ObsDnsbxpiLIgedgUMUpl', 'users', 'http://localhost', 0, 1, 0, '2025-02-12 01:04:54', '2025-02-12 01:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-02-12 01:04:54', '2025-02-12 01:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `module_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'language-create', 'Language', 'web', '2025-03-05 14:37:15', '2025-03-05 14:37:15'),
(3, 'language-edit', 'Language', 'web', '2025-03-05 14:37:27', '2025-03-05 14:37:27'),
(4, 'language-delete', 'Language', 'web', '2025-03-05 14:37:38', '2025-03-05 14:37:38'),
(5, 'language-list', 'Language', 'web', '2025-03-05 14:37:49', '2025-03-05 14:37:49'),
(6, 'dashboard', 'Dashboard', 'web', '2025-03-05 14:38:06', '2025-03-05 14:38:06'),
(7, 'translation-create', 'Translation', 'web', '2025-03-05 14:38:36', '2025-03-05 14:38:36'),
(8, 'translation-edit', 'Translation', 'web', '2025-03-05 14:38:46', '2025-03-05 14:38:46'),
(9, 'translation-delete', 'Translation', 'web', '2025-03-05 14:38:58', '2025-03-05 14:38:58'),
(10, 'translation-list', 'Translation', 'web', '2025-03-05 14:39:08', '2025-03-05 14:39:08'),
(11, 'subadmin-create', 'Sub Admin', 'web', '2025-03-05 14:39:50', '2025-03-05 14:39:50'),
(12, 'subadmin-edit', 'Sub Admin', 'web', '2025-03-05 14:40:01', '2025-03-05 14:40:01'),
(13, 'subadmin-delete', 'Sub Admin', 'web', '2025-03-05 14:40:17', '2025-03-05 14:40:17'),
(14, 'subadmin-list', 'Sub Admin', 'web', '2025-03-05 14:40:42', '2025-03-05 14:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `platform_keys`
--

DROP TABLE IF EXISTS `platform_keys`;
CREATE TABLE IF NOT EXISTS `platform_keys` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `platform_keys_key_unique` (`key`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platform_keys`
--

INSERT INTO `platform_keys` (`id`, `key`, `created_at`, `updated_at`) VALUES
(11, 'login', '2025-02-14 03:30:18', '2025-02-14 03:30:18'),
(10, 'Duis sequi similique', '2025-02-14 01:54:00', '2025-02-14 01:54:00'),
(9, 'Welcome', '2025-02-14 01:46:20', '2025-02-14 01:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `platform_key_translations`
--

DROP TABLE IF EXISTS `platform_key_translations`;
CREATE TABLE IF NOT EXISTS `platform_key_translations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `platform_key_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `platform_key_translations_platform_key_id_locale_unique` (`platform_key_id`,`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platform_key_translations`
--

INSERT INTO `platform_key_translations` (`id`, `platform_key_id`, `locale`, `translation`) VALUES
(6, 9, 'en', 'Welcome EN'),
(7, 9, 'ar', 'Welcome AR'),
(8, 9, 'ur', 'Welcome UR'),
(9, 10, 'en', 'Praesentium nisi aut'),
(10, 10, 'ar', 'Voluptas culpa debi'),
(11, 10, 'ur', 'Elit perferendis in'),
(12, 10, 'sp-en', 'In aut illo hic ex s'),
(13, 10, 'sp-en-new', 'Quas nobis voluptatu'),
(14, 11, 'en', 'login en'),
(15, 11, 'ar', 'login ar'),
(16, 11, 'ur', 'login ur');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'sub-admin', 'web', '2025-02-18 06:02:11', '2025-03-05 14:28:04'),
(3, 'testing', 'web', '2025-03-26 06:50:20', '2025-03-26 06:50:20'),
(5, 'okay', 'web', '2025-03-26 07:01:17', '2025-03-26 07:01:17'),
(6, 'checking', 'web', '2025-03-26 07:01:37', '2025-03-26 07:01:37'),
(7, 'do this', 'web', '2025-03-26 07:01:48', '2025-03-26 07:01:48'),
(8, 'sdfsdf', 'web', '2025-03-26 07:28:01', '2025-03-26 07:28:01'),
(9, 'dfg', 'web', '2025-03-26 07:32:40', '2025-03-26 07:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(2, 5),
(3, 5),
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(6, 6),
(7, 6),
(8, 6),
(9, 6),
(10, 6),
(11, 6),
(12, 6),
(13, 6),
(14, 6),
(2, 7),
(3, 7),
(4, 7),
(5, 7),
(6, 7),
(7, 7),
(8, 7),
(9, 7),
(10, 7),
(11, 7),
(12, 7),
(13, 7),
(14, 7),
(2, 8),
(3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JkfQaxNpTzmaT8W88RcZbNgr9KCAHLjwMfts7jot', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU2RIZ0pZUjRaREtFcTVDZ2Y3V2l2THlQdjZIbkRGektLQWhrSEJiRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvQ3ViYUFkbWluL2FkbWluL3JvbGUvMy9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742993979),
('kT9xPU4enm3teJN7NTMdrOvZQzmc4D46E5UmKkoY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDVLTVg1N3ZpdlhOMEh0dUdPcTFCYlo2QWlBRFZxRXl1TWN5WERCcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvQ3ViYUFkbWluL2FkbWluL3JvbGUvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742990692),
('nJxZe85nVx40Rhkwq8yBPfsB3QktGzSbmrR2z30n', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnVHOVd4T2hEYXZDSTJ1U0FWYXRPcWF3VTVteEY5ZXNYQTlZU052bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvQ3ViYUFkbWluL2FkbWluL3JvbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742993992),
('OIZHQSXbxWw2OaXTvRHDUln8iLDnAJpX3jL1cy8M', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYVkySXJNUnIxcGdKelhtcnFDTmxCZnBDY0JGRWNZbkVMbVhacXdXMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3QvQ3ViYUFkbWluL2FkbWluL3NldHRpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NjoibG9jYWxlIjtzOjI6ImVuIjt9', 1742994733);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `play_store` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `email`, `contact_number`, `whatsapp_number`, `about_us`, `address`, `facebook`, `twitter`, `linkedin`, `instagram`, `google_play`, `play_store`, `created_at`, `updated_at`) VALUES
(1, '1741265887-logo.png', 'info@labbah.com', '+ 123 456 7890', '+ 123 456 7890', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et.', 'Misfah Dist., P.O.Box: 250472, Riyadh Saudi Arabia', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/in/', 'https://www.instagram.com/', 'https://play.google.com/store', 'https://play.google.com/console', '2025-03-04 23:24:34', '2025-03-07 10:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `sub_service`
--

DROP TABLE IF EXISTS `sub_service`;
CREATE TABLE IF NOT EXISTS `sub_service` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `is_delete` int NOT NULL DEFAULT '0' COMMENT '0 not delete,1 delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_service_translations`
--

DROP TABLE IF EXISTS `sub_service_translations`;
CREATE TABLE IF NOT EXISTS `sub_service_translations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sub_service_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sub_service_translations_sub_service_id_locale_unique` (`sub_service_id`,`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
CREATE TABLE IF NOT EXISTS `translations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_key` text COLLATE utf8mb4_unicode_ci,
  `lang_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1431 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `lang`, `lang_key`, `lang_value`, `created_at`, `updated_at`) VALUES
(128, 'en', 'dashboard', 'dashboard', '2025-02-14 08:26:29', '2025-02-14 08:26:29'),
(129, 'en', 'total_customer', 'Total Customer', '2025-02-14 08:26:29', '2025-02-18 00:20:37'),
(130, 'en', 'total_service_providers', 'total_service_providers', '2025-02-14 08:26:29', '2025-02-14 08:26:29'),
(131, 'en', 'total_drives', 'total_drives', '2025-02-14 08:26:29', '2025-02-14 08:26:29'),
(132, 'en', 'total_rides', 'total_rides', '2025-02-14 08:26:29', '2025-02-14 08:26:29'),
(133, 'en', 'total_rides_umrah__hajj', 'total_rides (Umrah & Hajj)', '2025-02-14 08:26:29', '2025-02-14 08:26:29'),
(134, 'en', 'total_services', 'total_services', '2025-02-14 08:26:29', '2025-02-14 08:26:29'),
(135, 'en', 'last_month_rides', 'Last Month Rides', '2025-02-14 08:26:29', '2025-02-14 08:28:01'),
(136, 'en', 'back', 'Back', '2025-02-14 08:26:29', '2025-02-14 08:26:29'),
(137, 'en', 'setting', 'Setting', '2025-02-14 08:26:29', '2025-02-14 08:26:29'),
(138, 'en', 'create_language_key', 'Create Language Key', '2025-02-14 08:26:53', '2025-02-14 08:26:53'),
(139, 'en', 'key', 'Key', '2025-02-14 08:26:53', '2025-02-14 08:26:53'),
(140, 'en', 'enter_key', 'Enter key', '2025-02-14 08:26:53', '2025-02-14 08:26:53'),
(141, 'en', 'for_translation', 'for Translation', '2025-02-14 08:26:53', '2025-02-14 08:26:53'),
(142, 'en', 'enter_text_for', 'Enter text for', '2025-02-14 08:26:53', '2025-02-14 08:26:53'),
(143, 'en', 'account_setting', 'Account Setting', '2025-02-14 08:26:56', '2025-02-14 08:26:56'),
(144, 'en', 'edit_profile', 'Edit Profile', '2025-02-14 08:26:56', '2025-02-14 08:26:56'),
(145, 'en', 'first_name', 'first_name', '2025-02-14 08:26:56', '2025-02-14 08:26:56'),
(146, 'en', 'last_name', 'last_name', '2025-02-14 08:26:56', '2025-02-14 08:26:56'),
(147, 'en', 'profile_image', 'profile_image', '2025-02-14 08:26:56', '2025-02-14 08:26:56'),
(148, 'en', 'acceptpngjpgjpeg', 'accept:png,jpg,jpeg', '2025-02-14 08:26:56', '2025-02-14 08:26:56'),
(149, 'en', 'email', 'email', '2025-02-14 08:26:56', '2025-02-14 08:26:56'),
(150, 'en', 'phone', 'phone', '2025-02-14 08:26:57', '2025-02-14 08:26:57'),
(151, 'en', 'submit', 'submit', '2025-02-14 08:26:57', '2025-02-14 08:26:57'),
(152, 'en', 'cancel', 'cancel', '2025-02-14 08:26:57', '2025-02-14 08:26:57'),
(153, 'en', 'change_password', 'change_password', '2025-02-14 08:26:57', '2025-02-14 08:26:57'),
(154, 'en', 'new_password', 'new_password', '2025-02-14 08:26:57', '2025-02-14 08:26:57'),
(155, 'en', 'password_confirmation', 'password_confirmation', '2025-02-14 08:26:57', '2025-02-14 08:26:57'),
(156, 'en', 'edit_language_key', 'Edit Language Key', '2025-02-14 08:27:33', '2025-02-14 08:27:33'),
(157, 'ar', 'last_month_rides', 'رحلات الشهر الماضي', '2025-02-14 08:28:01', '2025-02-14 08:28:01'),
(158, 'ur', 'last_month_rides', 'پچھلے مہینے کی سواریاں', '2025-02-14 08:28:01', '2025-02-14 08:28:01'),
(159, 'en', 'translation_updated_successfully', 'Translation updated successfully', '2025-02-14 08:28:01', '2025-02-14 08:28:01'),
(160, 'en', 'login', 'login', '2025-02-14 08:29:41', '2025-02-14 08:29:41'),
(161, 'en', 'enter_your_email__password_to_login', 'Enter your email & password to login', '2025-02-14 08:29:41', '2025-02-14 08:29:41'),
(162, 'en', 'password', 'Password', '2025-02-14 08:29:41', '2025-02-14 08:29:41'),
(163, 'en', 'enter_answer', 'Enter Answer', '2025-02-16 23:51:08', '2025-02-16 23:51:08'),
(164, 'en', 'faq_deleted_successfully', 'Faq deleted successfully', '2025-02-17 04:26:03', '2025-02-17 04:26:03'),
(165, 'en', 'enter_content', 'Enter content', '2025-02-17 06:13:11', '2025-02-17 06:13:11'),
(166, 'ar', 'total_customer', 'إجمالي العملاء', '2025-02-18 00:20:37', '2025-02-18 00:20:37'),
(167, 'ur', 'total_customer', 'کل گاہک', '2025-02-18 00:20:37', '2025-02-18 00:20:37'),
(168, 'ar', 'translation_updated_successfully', 'تم تحديث الترجمة بنجاح', '2025-02-18 05:32:11', '2025-03-19 16:59:50'),
(169, 'ur', 'translation_updated_successfully', 'ترجمہ کامیابی کے ساتھ اپ ڈیٹ ہو گیا۔', '2025-02-18 05:32:11', '2025-03-19 16:59:50'),
(170, 'en', 'sub_admin', 'Sub Admin', '2025-02-27 01:55:13', '2025-02-27 01:55:13'),
(171, 'en', 'add_new', 'Add New', '2025-02-27 01:55:13', '2025-02-27 01:55:13'),
(172, 'en', 'id', 'ID', '2025-02-27 01:55:13', '2025-02-27 01:55:13'),
(173, 'en', 'sub_admin_detail', 'Sub Admin Detail', '2025-02-27 01:55:13', '2025-02-27 01:55:13'),
(174, 'en', 'gender', 'Gender', '2025-02-27 01:55:13', '2025-02-27 01:55:13'),
(175, 'en', 'status', 'Status', '2025-02-27 01:55:13', '2025-02-27 01:55:13'),
(176, 'en', 'action', 'Action', '2025-02-27 01:55:13', '2025-02-27 01:55:13'),
(177, 'en', 'add_sub_admin', 'Add Sub Admin', '2025-02-27 01:55:13', '2025-02-27 01:55:13'),
(178, 'en', 'select_a_gender', 'Select a Gender', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(179, 'en', 'male', 'Male', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(180, 'en', 'female', 'Female', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(181, 'en', 'confirm_password', 'Confirm Password', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(182, 'en', 'select_role', 'Select Role', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(183, 'en', 'select_a_role', 'Select a role', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(184, 'en', 'close', 'Close', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(185, 'en', 'processing', 'Processing', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(186, 'en', 'show', 'Show', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(187, 'en', 'entries', 'Entries', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(188, 'en', 'no_matching_records_found', 'No matching records found', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(189, 'en', 'no_records_found', 'No records found', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(190, 'en', 'showing', 'Showing', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(191, 'en', 'to', 'To', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(192, 'en', 'of', 'Of', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(193, 'en', 'filtered', 'Filtered', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(194, 'en', 'search', 'Search', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(195, 'en', 'first', 'First', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(196, 'en', 'last', 'Last', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(197, 'en', 'next', 'Next', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(198, 'en', 'previous', 'Previous', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(199, 'en', 'profile', 'Profile', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(200, 'en', 'logout', 'Logout', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(201, 'en', 'are_you_sure', 'Are you sure?', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(202, 'en', 'you_are_change_status', 'You are change status..!', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(203, 'en', 'confirmed', 'Confirmed..', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(204, 'en', 'you_will_not_be_able_to_revert_this', 'You will not be able to revert this!', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(205, 'en', 'yes_delete_it', 'Yes, delete it!', '2025-02-27 01:55:14', '2025-02-27 01:55:14'),
(206, 'en', 'approved', 'Approved', '2025-02-27 01:55:15', '2025-02-27 01:55:15'),
(207, 'en', 'edit', 'Edit', '2025-02-27 01:55:15', '2025-02-27 01:55:15'),
(208, 'en', 'delete', 'Delete', '2025-02-27 01:55:15', '2025-02-27 01:55:15'),
(209, 'en', 'suspend', 'Suspend', '2025-02-27 01:55:15', '2025-02-27 01:55:15'),
(210, 'en', 'the_first_name_field_is_required', 'The first name field is required.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(211, 'en', 'the_first_name_must_be_at_least_4_characters', 'The first name must be at least 4 characters.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(212, 'en', 'the_last_name_field_is_required', 'The last name field is required.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(213, 'en', 'the_phone_number_field_is_required', 'The phone number field is required.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(214, 'en', 'the_phone_number_must_be_at_least_9_characters', 'The phone number must be at least 9 characters.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(215, 'en', 'the_phone_number_may_not_be_greater_than_11_characters', 'The phone number may not be greater than 11 characters.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(216, 'en', 'the_phone_number_has_already_been_taken', 'The phone number has already been taken.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(217, 'en', 'the_gender_field_is_required', 'The gender field is required.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(218, 'en', 'the_email_field_is_required', 'The email field is required.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(219, 'en', 'please_enter_a_valid_email_address', 'Please enter a valid email address.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(220, 'en', 'the_email_has_already_been_taken', 'The email has already been taken.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(221, 'en', 'the_profile_image_field_is_required', 'The profile image field is required.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(222, 'en', 'the_profile_image_must_be_a_file', 'The profile image must be a file.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(223, 'en', 'the_profile_image_must_be_a_file_of_type_jpeg_png_jpg', 'The profile image must be a file of type: jpeg, png, jpg.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(224, 'en', 'the_password_field_is_required', 'The password field is required.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(225, 'en', 'the_confirm_password_must_match_the_password', 'The confirm password must match the password.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(226, 'en', 'the_confirm_password_field_is_required', 'The confirm password field is required.', '2025-02-27 01:55:20', '2025-02-27 01:55:20'),
(227, 'en', 'sub_admin_account_added_successfully', 'Sub Admin Account Added Successfully.', '2025-02-27 01:55:53', '2025-02-27 01:55:53'),
(228, 'en', 'sub_admin_account_suspend_successfully', 'Sub Admin Account Suspend Successfully.', '2025-02-27 01:56:47', '2025-02-27 01:56:47'),
(229, 'en', 'edit_sub_admin', 'Edit Sub Admin', '2025-02-27 01:56:49', '2025-02-27 01:56:49'),
(230, 'en', 'the_select_role_field_is_required', 'The select role field is required.', '2025-02-27 01:56:50', '2025-02-27 01:56:50'),
(231, 'en', 'this_field_is_required', 'This field is required', '2025-02-27 01:56:50', '2025-02-27 01:56:50'),
(232, 'en', 'the_field_must_not_exceed_max_characters', 'The field must not exceed :max characters.', '2025-02-27 01:56:50', '2025-02-27 01:56:50'),
(233, 'en', 'the_email_address_is_already_in_use', 'The email address is already in use.', '2025-02-27 01:56:50', '2025-02-27 01:56:50'),
(234, 'en', 'sub_admin_account_update_successfully', 'Sub Admin Account Update Successfully.', '2025-02-27 01:56:50', '2025-02-27 01:56:50'),
(235, 'en', 'sub_admin_account_deleted_successfully', 'Sub Admin Account Deleted Successfully.', '2025-02-27 01:56:56', '2025-02-27 01:56:56'),
(236, 'en', 'roles', 'Roles', '2025-02-27 01:57:29', '2025-02-27 01:57:29'),
(237, 'en', 'name', 'Name', '2025-02-27 01:57:29', '2025-02-27 01:57:29'),
(238, 'en', 'add_role', 'Add Role', '2025-02-27 01:57:29', '2025-02-27 01:57:29'),
(239, 'en', 'module', 'Module', '2025-02-27 01:57:29', '2025-02-27 01:57:29'),
(240, 'en', 'select_all', 'Select All', '2025-02-27 01:57:29', '2025-02-27 01:57:29'),
(241, 'en', 'blog_and_news', 'blog_and_news', '2025-02-27 05:33:54', '2025-02-27 05:33:54'),
(242, 'en', 'blog_image', 'blog_image', '2025-02-27 05:33:54', '2025-02-27 05:33:54'),
(243, 'en', 'title', 'title', '2025-02-27 05:33:54', '2025-02-27 05:33:54'),
(244, 'en', 'slug', 'slug', '2025-02-27 05:33:54', '2025-02-27 05:33:54'),
(245, 'en', 'author_name', 'author_name', '2025-02-27 05:33:54', '2025-02-27 05:33:54'),
(246, 'en', 'created_at', 'created_at', '2025-02-27 05:33:54', '2025-02-27 05:33:54'),
(247, 'en', 'add_blog', 'add_blog', '2025-02-27 05:33:58', '2025-02-27 05:33:58'),
(248, 'en', 'order_number', 'order_number', '2025-02-27 05:33:58', '2025-02-27 05:33:58'),
(249, 'en', 'content', 'content', '2025-02-27 05:33:58', '2025-02-27 05:33:58'),
(250, 'en', 'select_status', 'select_status', '2025-02-27 05:33:58', '2025-02-27 05:33:58'),
(251, 'en', 'active', 'active', '2025-02-27 05:33:58', '2025-02-27 05:33:58'),
(252, 'en', 'inactive', 'inactive', '2025-02-27 05:33:58', '2025-02-27 05:33:58'),
(253, 'en', 'edit_blog', 'edit_blog', '2025-02-27 05:36:24', '2025-02-27 05:36:24'),
(254, 'en', 'enter_language_order', 'enter_language_order', '2025-02-27 05:36:24', '2025-02-27 05:36:24'),
(255, 'en', 'blog_update_successfully', 'Blog Update Successfully.', '2025-02-27 05:36:29', '2025-02-27 05:36:29'),
(256, 'en', 'the_field_must_be_a_string', 'The field must be a string', '2025-02-27 06:40:04', '2025-02-27 06:40:04'),
(257, 'en', 'the_email_must_be_in_lowercase_letters', 'The email must be in lowercase letters.', '2025-02-27 06:40:04', '2025-02-27 06:40:04'),
(258, 'en', 'profile_edit_successfully', 'Profile edit Successfully', '2025-02-27 06:40:04', '2025-02-27 06:40:04'),
(259, 'en', 'sub_admin_account_approved_successfully', 'Sub Admin Account Approved Successfully.', '2025-02-27 06:44:41', '2025-02-27 06:44:41'),
(260, 'en', 'select_country', 'select_country', '2025-02-27 06:52:46', '2025-02-27 06:52:46'),
(261, 'en', 'the_country_field_is_required', 'The country field is required.', '2025-02-27 07:01:31', '2025-02-27 07:01:31'),
(262, 'en', 'country_id', 'country_id', '2025-02-27 07:31:00', '2025-02-27 07:31:00'),
(263, 'en', 'role_added_successfully', 'Role Added Successfully.', '2025-02-27 07:37:35', '2025-02-27 07:37:35'),
(264, 'en', 'vehicle_types', 'vehicle_types', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(265, 'en', 'vehicle_type_image', 'vehicle_type_image', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(266, 'en', 'vehicle_type_passenger_capecity', 'vehicle_type_passenger_capecity', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(267, 'en', 'vehicle_type_name', 'vehicle_type_name', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(268, 'en', 'vehicle_type_created', 'vehicle_type_created', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(269, 'en', 'vehicle_type_updated', 'vehicle_type_updated', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(270, 'en', 'add_service', 'Add Service', '2025-02-28 01:32:12', '2025-03-07 10:14:23'),
(271, 'en', 'service_image', 'service_image', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(272, 'en', 'service', 'service', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(273, 'en', 'enter_service', 'enter_service', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(274, 'en', 'select_countries', 'select_countries', '2025-02-28 01:32:12', '2025-02-28 01:32:12'),
(275, 'en', 'add_vehicle', 'add_vehicle', '2025-02-28 01:33:52', '2025-02-28 01:33:52'),
(276, 'en', 'vehicle_image', 'vehicle_image', '2025-02-28 01:33:52', '2025-02-28 01:33:52'),
(277, 'en', 'vehicle_passenger_capecity', 'vehicle_passenger_capecity', '2025-02-28 01:33:52', '2025-02-28 01:33:52'),
(278, 'en', 'vehicle', 'vehicle', '2025-02-28 01:33:52', '2025-02-28 01:33:52'),
(279, 'en', 'enter_vehicle', 'enter_vehicle', '2025-02-28 01:33:52', '2025-02-28 01:33:52'),
(280, 'en', 'vehicle_type_added_successfully', 'vehicle_type_added_successfully.', '2025-02-28 01:45:41', '2025-02-28 01:45:41'),
(281, 'en', 'vehicle_type_deleted_successfully', 'vehicle_type_deleted_successfully.', '2025-02-28 01:59:44', '2025-02-28 01:59:44'),
(282, 'en', 'edit_service', 'edit_service', '2025-02-28 03:07:55', '2025-02-28 03:07:55'),
(283, 'en', 'services', 'services', '2025-02-28 03:08:24', '2025-02-28 03:08:24'),
(284, 'en', 'service_name', 'service_name', '2025-02-28 03:08:24', '2025-02-28 03:08:24'),
(285, 'en', 'service_created', 'service_created', '2025-02-28 03:08:24', '2025-02-28 03:08:24'),
(286, 'en', 'service_updated', 'service_updated', '2025-02-28 03:08:24', '2025-02-28 03:08:24'),
(287, 'en', 'service_added_successfully', 'Service Added Successfully.', '2025-02-28 03:13:15', '2025-02-28 03:13:15'),
(288, 'en', 'service_update_successfully', 'Service Update Successfully.', '2025-02-28 03:13:57', '2025-02-28 03:13:57'),
(289, 'en', 'service_not_found', 'Service not found', '2025-02-28 03:14:36', '2025-02-28 03:14:36'),
(290, 'en', 'edit_vehicle', 'edit_vehicle', '2025-02-28 03:24:51', '2025-02-28 03:24:51'),
(291, 'en', 'vehicle_type_updated_successfully', 'vehicle_type_updated_successfully.', '2025-02-28 03:30:32', '2025-02-28 03:30:32'),
(292, 'en', 'blog_added_successfully', 'Blog Added Successfully.', '2025-03-05 12:24:40', '2025-03-05 12:24:40'),
(293, 'en', 'languages', 'languages', '2025-03-05 14:16:46', '2025-03-05 14:16:46'),
(294, 'en', 'language_flag', 'language_flag', '2025-03-05 14:16:49', '2025-03-05 14:16:49'),
(295, 'en', 'language_name', 'language_name', '2025-03-05 14:16:49', '2025-03-05 14:16:49'),
(296, 'en', 'language_code', 'language_code', '2025-03-05 14:16:49', '2025-03-05 14:16:49'),
(297, 'en', 'language_is_rtl', 'language_is_RTL', '2025-03-05 14:16:49', '2025-03-05 14:16:49'),
(298, 'en', 'add_language', 'add_language', '2025-03-05 14:16:49', '2025-03-05 14:16:49'),
(299, 'en', 'language_is_default', 'language_is_default', '2025-03-05 14:16:49', '2025-03-05 14:16:49'),
(300, 'en', 'edit_language', 'edit_language', '2025-03-05 14:16:57', '2025-03-05 14:16:57'),
(301, 'en', 'language_code_already_exists', 'Language code already exists', '2025-03-05 14:17:08', '2025-03-05 14:17:08'),
(302, 'en', 'language_name_already_exists', 'Language name already exists', '2025-03-05 14:17:08', '2025-03-05 14:17:08'),
(303, 'en', 'language_update_successfully', 'Language Update Successfully.', '2025-03-05 14:17:08', '2025-03-05 14:17:08'),
(304, 'en', 'translations', 'translations', '2025-03-05 14:19:17', '2025-03-05 14:19:17'),
(305, 'en', 'translation_setup', 'translation_setup', '2025-03-05 14:23:28', '2025-03-05 14:23:28'),
(306, 'en', 'translation_key', 'translation_key', '2025-03-05 14:23:28', '2025-03-05 14:23:28'),
(307, 'en', 'subadmins', 'sub-admins', '2025-03-05 14:27:43', '2025-03-05 14:27:43'),
(308, 'en', 'modules', 'modules', '2025-03-05 14:27:43', '2025-03-05 14:27:43'),
(309, 'en', 'permissions', 'permissions', '2025-03-05 14:27:43', '2025-03-05 14:27:43'),
(310, 'en', 'role_deleted_successfully', 'Role Deleted Successfully.', '2025-03-05 14:27:57', '2025-03-05 14:27:57'),
(311, 'en', 'edit_role', 'edit_role', '2025-03-05 14:27:59', '2025-03-05 14:27:59'),
(312, 'en', 'role_updated_successfully', 'Role Updated Successfully.', '2025-03-05 14:28:04', '2025-03-05 14:28:04'),
(313, 'en', 'add_module', 'add_module', '2025-03-05 14:29:37', '2025-03-05 14:29:37'),
(314, 'en', 'module_deleted_successfully', 'Module Deleted Successfully.', '2025-03-05 14:36:14', '2025-03-05 14:36:14'),
(315, 'en', 'add_permission', 'add_permission', '2025-03-05 14:36:17', '2025-03-05 14:36:17'),
(316, 'en', 'module_name', 'module_name', '2025-03-05 14:36:17', '2025-03-05 14:36:17'),
(317, 'en', 'select_module', 'select_module', '2025-03-05 14:36:17', '2025-03-05 14:36:17'),
(318, 'en', 'permission_deleted_successfully', 'Permission Deleted Successfully.', '2025-03-05 14:36:28', '2025-03-05 14:36:28'),
(319, 'en', 'module_added_successfully', 'Module Added Successfully.', '2025-03-05 14:36:50', '2025-03-05 14:36:50'),
(320, 'en', 'permission_added_successfully', 'Permission Added Successfully.', '2025-03-05 14:37:15', '2025-03-05 14:37:15'),
(321, 'en', 'the_password_confirmation_does_not_match_the_new_password', 'The_password_confirmation_does_not_match_the_new_password', '2025-03-05 14:42:02', '2025-03-05 14:42:02'),
(322, 'en', 'cms', 'CMS', '2025-03-06 17:38:39', '2025-03-06 17:38:39'),
(323, 'en', 'banner_heading', 'Banner Heading', '2025-03-06 17:39:13', '2025-03-06 17:39:13'),
(324, 'en', 'banner_title', 'Banner Title', '2025-03-06 17:39:13', '2025-03-06 17:39:13'),
(325, 'en', 'button_text', 'Button Text', '2025-03-06 17:39:13', '2025-03-06 17:39:13'),
(326, 'ar', 'add_service', 'إضافة خدمة', '2025-03-07 10:14:23', '2025-03-07 10:14:23'),
(327, 'ur', 'add_service', 'سروس شامل کریں۔', '2025-03-07 10:14:23', '2025-03-07 10:14:23'),
(328, 'en', 'faq', 'FAQ', '2025-03-07 11:32:11', '2025-03-07 11:32:11'),
(329, 'en', 'service_deleted_successfully', 'Service Deleted Successfully.', '2025-03-07 11:37:30', '2025-03-07 11:37:30'),
(330, 'en', 'add_faq', 'add_faq', '2025-03-07 11:43:43', '2025-03-07 11:43:43'),
(331, 'en', 'enter_order', 'enter_order', '2025-03-07 11:43:43', '2025-03-07 11:43:43'),
(332, 'en', 'question', 'question', '2025-03-07 11:43:43', '2025-03-07 11:43:43'),
(333, 'en', 'enter_question', 'enter_question', '2025-03-07 11:43:43', '2025-03-07 11:43:43'),
(334, 'en', 'answer', 'answer', '2025-03-07 11:43:43', '2025-03-07 11:43:43'),
(335, 'en', 'blog', 'Blog', '2025-03-07 12:21:33', '2025-03-07 12:21:33'),
(336, 'en', 'description', 'description', '2025-03-07 14:04:21', '2025-03-07 14:04:21'),
(337, 'en', 'enter_description', 'enter_description', '2025-03-07 14:04:21', '2025-03-07 14:04:21'),
(338, 'en', 'service_updated_successfully', 'Service Updated Successfully.', '2025-03-07 14:07:49', '2025-03-07 14:07:49'),
(339, 'en', 'service_image_1', 'service_image_1', '2025-03-07 14:30:04', '2025-03-07 14:30:04'),
(340, 'en', 'service_image_2', 'service_image_2', '2025-03-07 14:33:12', '2025-03-07 14:33:12'),
(341, 'en', 'service_image_3', 'service_image_3', '2025-03-07 14:33:12', '2025-03-07 14:33:12'),
(342, 'en', 'service_image_4', 'service_image_4', '2025-03-07 14:33:59', '2025-03-07 14:33:59'),
(343, 'en', 'service_banner_image', 'service_banner_image', '2025-03-07 14:41:00', '2025-03-07 14:41:00'),
(344, 'en', 'additional_info', 'additional_info', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(345, 'en', 'text_field_1', 'text_field_1', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(346, 'en', 'enter_text_field_1', 'enter_text_field_1', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(347, 'en', 'text_field_2', 'text_field_2', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(348, 'en', 'enter_text_field_2', 'enter_text_field_2', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(349, 'en', 'text_field_3', 'text_field_3', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(350, 'en', 'enter_text_field_3', 'enter_text_field_3', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(351, 'en', 'description_1', 'description_1', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(352, 'en', 'enter_description_1', 'enter_description_1', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(353, 'en', 'description_2', 'description_2', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(354, 'en', 'enter_description_2', 'enter_description_2', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(355, 'en', 'description_3', 'description_3', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(356, 'en', 'enter_description_3', 'enter_description_3', '2025-03-07 14:41:05', '2025-03-07 14:41:05'),
(357, 'en', 'text_1', 'text_1', '2025-03-07 14:44:28', '2025-03-07 14:44:28'),
(358, 'en', 'enter_text_1', 'enter_text_1', '2025-03-07 14:44:28', '2025-03-07 14:44:28'),
(359, 'en', 'enter_text_1_description', 'enter_text_1_description', '2025-03-07 14:44:28', '2025-03-07 14:44:28'),
(360, 'en', 'text_2', 'text_2', '2025-03-07 14:44:28', '2025-03-07 14:44:28'),
(361, 'en', 'enter_text_2', 'enter_text_2', '2025-03-07 14:44:28', '2025-03-07 14:44:28'),
(362, 'en', 'enter_text_2_description', 'enter_text_2_description', '2025-03-07 14:44:28', '2025-03-07 14:44:28'),
(363, 'en', 'text_3', 'text_3', '2025-03-07 14:44:28', '2025-03-07 14:44:28'),
(364, 'en', 'enter_text_3', 'enter_text_3', '2025-03-07 14:44:28', '2025-03-07 14:44:28'),
(365, 'en', 'enter_text_3_description', 'enter_text_3_description', '2025-03-07 14:44:28', '2025-03-07 14:44:28'),
(366, 'en', 'title_1', 'title_1', '2025-03-07 15:11:25', '2025-03-07 15:11:25'),
(367, 'en', 'enter_title_1', 'enter_title_1', '2025-03-07 15:11:25', '2025-03-07 15:11:25'),
(368, 'en', 'title_2', 'title_2', '2025-03-07 15:11:25', '2025-03-07 15:11:25'),
(369, 'en', 'enter_title_2', 'enter_title_2', '2025-03-07 15:11:25', '2025-03-07 15:11:25'),
(370, 'en', 'title_3', 'title_3', '2025-03-07 15:11:25', '2025-03-07 15:11:25'),
(371, 'en', 'enter_title_3', 'enter_title_3', '2025-03-07 15:11:25', '2025-03-07 15:11:25'),
(372, 'en', 'image_1', 'image_1', '2025-03-07 16:39:37', '2025-03-07 16:39:37'),
(373, 'en', 'heading_1', 'heading_1', '2025-03-07 17:10:56', '2025-03-07 17:10:56'),
(374, 'en', 'enter_heading_1', 'enter_heading_1', '2025-03-07 17:10:56', '2025-03-07 17:10:56'),
(375, 'en', 'title_4', 'title_4', '2025-03-07 17:16:37', '2025-03-07 17:16:37'),
(376, 'en', 'enter_title_4', 'enter_title_4', '2025-03-07 17:16:37', '2025-03-07 17:16:37'),
(377, 'en', 'title_5', 'title_5', '2025-03-07 17:16:37', '2025-03-07 17:16:37'),
(378, 'en', 'enter_title_5', 'enter_title_5', '2025-03-07 17:16:37', '2025-03-07 17:16:37'),
(379, 'en', 'title_6', 'title_6', '2025-03-07 17:16:37', '2025-03-07 17:16:37'),
(380, 'en', 'enter_title_6', 'enter_title_6', '2025-03-07 17:16:37', '2025-03-07 17:16:37'),
(381, 'en', 'title_7', 'title_7', '2025-03-07 17:16:37', '2025-03-07 17:16:37'),
(382, 'en', 'enter_title_7', 'enter_title_7', '2025-03-07 17:16:37', '2025-03-07 17:16:37'),
(383, 'en', 'description_4', 'description_4', '2025-03-07 17:41:32', '2025-03-07 17:41:32'),
(384, 'en', 'enter_description_4', 'enter_description_4', '2025-03-07 17:41:32', '2025-03-07 17:41:32'),
(385, 'en', 'description_5', 'description_5', '2025-03-07 17:41:32', '2025-03-07 17:41:32'),
(386, 'en', 'enter_description_5', 'enter_description_5', '2025-03-07 17:41:32', '2025-03-07 17:41:32'),
(387, 'en', 'description_6', 'description_6', '2025-03-07 17:41:32', '2025-03-07 17:41:32'),
(388, 'en', 'enter_description_6', 'enter_description_6', '2025-03-07 17:41:32', '2025-03-07 17:41:32'),
(389, 'en', 'enter_title', 'enter_title', '2025-03-10 12:26:51', '2025-03-10 12:26:51'),
(390, 'en', 'banner_image', 'Banner Image', '2025-03-10 12:31:50', '2025-03-10 12:31:50'),
(391, 'en', 'heading_2', 'heading_2', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(392, 'en', 'enter_heading_2', 'enter_heading_2', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(393, 'en', 'title_8', 'title_8', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(394, 'en', 'enter_title_8', 'enter_title_8', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(395, 'en', 'title_9', 'title_9', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(396, 'en', 'enter_title_9', 'enter_title_9', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(397, 'en', 'title_10', 'title_10', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(398, 'en', 'enter_title_10', 'enter_title_10', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(399, 'en', 'title_11', 'title_11', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(400, 'en', 'enter_title_11', 'enter_title_11', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(401, 'en', 'title_12', 'title_12', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(402, 'en', 'enter_title_12', 'enter_title_12', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(403, 'en', 'title_13', 'title_13', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(404, 'en', 'enter_title_13', 'enter_title_13', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(405, 'en', 'title_14', 'title_14', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(406, 'en', 'enter_title_14', 'enter_title_14', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(407, 'en', 'title_15', 'title_15', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(408, 'en', 'enter_title_15', 'enter_title_15', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(409, 'en', 'title_16', 'title_16', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(410, 'en', 'enter_title_16', 'enter_title_16', '2025-03-10 12:53:51', '2025-03-10 12:53:51'),
(411, 'en', 'description_7', 'description_7', '2025-03-10 14:02:14', '2025-03-10 14:02:14'),
(412, 'en', 'enter_description_7', 'enter_description_7', '2025-03-10 14:02:14', '2025-03-10 14:02:14'),
(413, 'en', 'description_8', 'description_8', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(414, 'en', 'enter_description_8', 'enter_description_8', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(415, 'en', 'description_9', 'description_9', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(416, 'en', 'enter_description_9', 'enter_description_9', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(417, 'en', 'description_10', 'description_10', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(418, 'en', 'enter_description_10', 'enter_description_10', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(419, 'en', 'description_11', 'description_11', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(420, 'en', 'enter_description_11', 'enter_description_11', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(421, 'en', 'description_12', 'description_12', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(422, 'en', 'enter_description_12', 'enter_description_12', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(423, 'en', 'description_13', 'description_13', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(424, 'en', 'enter_description_13', 'enter_description_13', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(425, 'en', 'description_14', 'description_14', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(426, 'en', 'enter_description_14', 'enter_description_14', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(427, 'en', 'description_15', 'description_15', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(428, 'en', 'enter_description_15', 'enter_description_15', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(429, 'en', 'description_16', 'description_16', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(430, 'en', 'enter_description_16', 'enter_description_16', '2025-03-10 14:15:29', '2025-03-10 14:15:29'),
(431, 'en', 'cms_pages', 'cms_pages', '2025-03-10 17:11:13', '2025-03-10 17:11:13'),
(432, 'en', 'no', 'no', '2025-03-10 17:11:13', '2025-03-10 17:11:13'),
(433, 'en', 'actions', 'actions', '2025-03-10 17:11:13', '2025-03-10 17:11:13'),
(434, 'en', 'no_data_available', 'no_data_available', '2025-03-10 17:12:09', '2025-03-10 17:12:09'),
(435, 'en', 'sort_ascending', 'sort_ascending', '2025-03-10 17:12:09', '2025-03-10 17:12:09'),
(436, 'en', 'sort_descending', 'sort_descending', '2025-03-10 17:12:09', '2025-03-10 17:12:09'),
(437, 'en', 'blog_updated_successfully', 'Blog updated successfully.', '2025-03-10 17:36:00', '2025-03-10 17:36:00'),
(438, 'en', 'blog_deleted_successfully', 'Blog Deleted Successfully.', '2025-03-10 17:48:18', '2025-03-10 17:48:18'),
(439, 'en', 'create_category', 'create_category', '2025-03-18 10:57:45', '2025-03-18 10:57:45'),
(440, 'en', 'category_name', 'category_name', '2025-03-18 10:57:45', '2025-03-18 10:57:45'),
(441, 'en', 'create', 'create', '2025-03-18 10:57:45', '2025-03-18 10:57:45'),
(442, 'en', 'edit_category', 'edit_category', '2025-03-18 11:27:40', '2025-03-18 11:27:40'),
(443, 'en', 'update', 'update', '2025-03-18 11:28:20', '2025-03-18 11:28:20'),
(444, 'en', 'categories', 'categories', '2025-03-18 14:34:21', '2025-03-18 14:34:21'),
(445, 'en', 'category_updated_successfully', 'Category Updated Successfully.', '2025-03-18 15:21:05', '2025-03-18 15:21:05'),
(446, 'en', 'careers', 'careers', '2025-03-18 15:44:26', '2025-03-18 15:44:26'),
(447, 'en', 'career_name', 'career_name', '2025-03-18 15:44:26', '2025-03-18 15:44:26'),
(448, 'en', 'career_type', 'career_type', '2025-03-18 15:44:26', '2025-03-18 15:44:26'),
(449, 'en', 'career_location', 'career_location', '2025-03-18 15:44:26', '2025-03-18 15:44:26'),
(450, 'en', 'career_created', 'career_created', '2025-03-18 15:44:26', '2025-03-18 15:44:26'),
(451, 'en', 'add_career', 'add_career', '2025-03-18 15:55:04', '2025-03-18 15:55:04'),
(452, 'en', 'enter_career', 'enter_career', '2025-03-18 15:55:04', '2025-03-18 15:55:04'),
(453, 'en', 'location', 'location', '2025-03-18 15:55:04', '2025-03-18 15:55:04'),
(454, 'en', 'enter_location', 'enter_location', '2025-03-18 15:55:04', '2025-03-18 15:55:04'),
(455, 'en', 'type', 'type', '2025-03-18 15:55:04', '2025-03-18 15:55:04'),
(456, 'en', 'enter_type', 'enter_type', '2025-03-18 15:55:04', '2025-03-18 15:55:04'),
(457, 'en', 'category', 'category', '2025-03-18 15:56:25', '2025-03-18 15:56:25'),
(458, 'en', 'select_category', 'select_category', '2025-03-18 15:56:25', '2025-03-18 15:56:25'),
(459, 'en', 'hybrid', 'Hybrid', '2025-03-19 08:04:52', '2025-03-19 08:19:18'),
(460, 'en', 'full_time', 'Full Time', '2025-03-19 08:04:52', '2025-03-19 08:21:16'),
(461, 'en', 'remote', 'Remote', '2025-03-19 08:04:52', '2025-03-19 08:21:51'),
(462, 'en', 'select_option', 'Select Option', '2025-03-19 08:05:26', '2025-03-19 08:25:13'),
(463, 'ar', 'hybrid', 'هجين', '2025-03-19 08:19:18', '2025-03-19 08:19:18'),
(464, 'ur', 'hybrid', 'ہائبرڈ', '2025-03-19 08:19:18', '2025-03-19 08:19:18'),
(465, 'ar', 'full_time', 'دوام كامل', '2025-03-19 08:21:16', '2025-03-19 08:21:16'),
(466, 'ur', 'full_time', 'کل وقتی', '2025-03-19 08:21:16', '2025-03-20 09:48:33'),
(467, 'ar', 'remote', 'بعيد', '2025-03-19 08:21:51', '2025-03-19 08:21:51'),
(468, 'ur', 'remote', 'ریموٹ', '2025-03-19 08:21:51', '2025-03-19 08:21:51'),
(469, 'ar', 'select_option', 'حدد الخيار', '2025-03-19 08:25:13', '2025-03-19 08:25:13'),
(470, 'ur', 'select_option', 'اختیار منتخب کریں۔', '2025-03-19 08:25:13', '2025-03-19 08:25:13'),
(471, 'en', 'career_description', 'career_description', '2025-03-19 08:35:09', '2025-03-19 08:35:09'),
(472, 'en', 'language_added_successfully', 'Language Added Successfully.', '2025-03-19 09:13:15', '2025-03-19 09:13:15'),
(473, 'en', 'career_added_successfully', 'Career added successfully.', '2025-03-19 10:53:18', '2025-03-19 10:53:18'),
(474, 'en', 'edit_career', 'edit_career', '2025-03-19 12:40:35', '2025-03-19 12:40:35'),
(475, 'en', 'en', 'en', '2025-03-19 12:46:43', '2025-03-19 12:46:43'),
(476, 'en', 'career_updated_successfully', 'Career updated successfully.', '2025-03-19 13:11:52', '2025-03-19 13:11:52'),
(477, 'en', 'career_deleted_successfully', 'Career deleted successfully.', '2025-03-19 13:20:00', '2025-03-19 13:20:00'),
(478, 'en', 'full_time_ch', 'full_time_ch', '2025-03-19 13:49:20', '2025-03-19 13:49:20'),
(479, 'en', 'remote_ch', 'remote_ch', '2025-03-19 14:13:05', '2025-03-19 14:13:05'),
(480, 'en', 'hybrid_ch', 'hybrid_ch', '2025-03-19 14:21:11', '2025-03-19 14:21:11'),
(481, 'ar', 'service_name', 'اسم الخدمة', '2025-03-19 15:42:54', '2025-03-19 15:42:54'),
(482, 'ur', 'service_name', 'سروس_نام', '2025-03-19 15:42:54', '2025-03-19 15:42:54'),
(483, 'ch', 'service_name', '服务名称', '2025-03-19 15:42:54', '2025-03-19 15:42:54'),
(484, 'ar', 'dashboard', 'لوحة القيادة', '2025-03-19 15:44:10', '2025-03-19 15:44:10'),
(485, 'ur', 'dashboard', 'ڈیش بورڈ', '2025-03-19 15:44:10', '2025-03-19 15:44:10'),
(486, 'ch', 'dashboard', '仪表板', '2025-03-19 15:44:10', '2025-03-19 15:44:10'),
(487, 'ar', 'modules', 'وحدات', '2025-03-19 15:44:44', '2025-03-19 15:44:44'),
(488, 'ur', 'modules', 'ماڈیولز', '2025-03-19 15:44:44', '2025-03-19 15:44:44'),
(489, 'ch', 'modules', '模块', '2025-03-19 15:44:44', '2025-03-19 15:44:44'),
(490, 'ar', 'permissions', 'الأذونات', '2025-03-19 15:45:24', '2025-03-19 15:45:24'),
(491, 'ur', 'permissions', 'اجازتیں', '2025-03-19 15:45:24', '2025-03-19 15:45:24'),
(492, 'ch', 'permissions', '权限', '2025-03-19 15:45:24', '2025-03-19 15:45:24'),
(493, 'ar', 'roles', 'الأدوار', '2025-03-19 15:46:01', '2025-03-19 15:46:01'),
(494, 'ur', 'roles', 'کردار', '2025-03-19 15:46:01', '2025-03-19 15:46:01'),
(495, 'ch', 'roles', '角色', '2025-03-19 15:46:01', '2025-03-19 15:46:01'),
(496, 'ar', 'subadmins', 'المشرفين الفرعيين', '2025-03-19 15:46:43', '2025-03-19 15:46:43'),
(497, 'ur', 'subadmins', 'ذیلی منتظمین', '2025-03-19 15:46:43', '2025-03-19 15:46:43'),
(498, 'ch', 'subadmins', '副管理员', '2025-03-19 15:46:43', '2025-03-19 15:46:43'),
(499, 'ar', 'services', 'خدمات', '2025-03-19 15:47:14', '2025-03-19 15:47:14'),
(500, 'ur', 'services', 'خدمات', '2025-03-19 15:47:14', '2025-03-19 15:47:14'),
(501, 'ch', 'services', '服务', '2025-03-19 15:47:14', '2025-03-19 15:47:14'),
(502, 'ar', 'careers', 'المهن', '2025-03-19 15:47:55', '2025-03-19 15:47:55'),
(503, 'ur', 'careers', 'کیریئر', '2025-03-19 15:47:55', '2025-03-19 15:47:55'),
(504, 'ch', 'careers', '职业', '2025-03-19 15:47:55', '2025-03-19 15:47:55'),
(505, 'ar', 'blog', 'مدونة', '2025-03-19 15:49:19', '2025-03-19 15:49:19'),
(506, 'ur', 'blog', 'بلاگ', '2025-03-19 15:49:19', '2025-03-19 15:49:19'),
(507, 'ch', 'blog', '博客', '2025-03-19 15:49:19', '2025-03-19 15:49:19'),
(508, 'ar', 'add_blog', 'إضافة _ مدونة', '2025-03-19 15:50:08', '2025-03-19 15:50:08'),
(509, 'ur', 'add_blog', '_ بلاگ شامل کریں۔', '2025-03-19 15:50:08', '2025-03-19 15:50:08'),
(510, 'ch', 'add_blog', '添加_博客', '2025-03-19 15:50:08', '2025-03-19 15:50:08'),
(511, 'ar', 'blog_added_successfully', 'تمت إضافة المدونة بنجاح.', '2025-03-19 15:50:51', '2025-03-19 15:50:51'),
(512, 'ur', 'blog_added_successfully', 'بلاگ کامیابی کے ساتھ شامل ہو گیا۔', '2025-03-19 15:50:51', '2025-03-19 15:50:51'),
(513, 'ch', 'blog_added_successfully', '博客添加成功。', '2025-03-19 15:50:51', '2025-03-19 15:50:51'),
(514, 'ar', 'blog_and_news', 'مدونة وأخبار', '2025-03-19 15:51:20', '2025-03-19 15:51:20'),
(515, 'ur', 'blog_and_news', 'بلاگ_اور_خبریں', '2025-03-19 15:51:20', '2025-03-19 15:51:20'),
(516, 'ch', 'blog_and_news', '博客和新闻', '2025-03-19 15:51:20', '2025-03-19 15:51:20'),
(517, 'ar', 'blog_deleted_successfully', 'تم حذف المدونة بنجاح.', '2025-03-19 15:51:46', '2025-03-19 15:51:46'),
(518, 'ur', 'blog_deleted_successfully', 'بلاگ کامیابی کے ساتھ حذف ہو گیا۔', '2025-03-19 15:51:46', '2025-03-19 15:51:46'),
(519, 'ch', 'blog_deleted_successfully', '博客已成功删除。', '2025-03-19 15:51:46', '2025-03-19 15:51:46'),
(520, 'ar', 'blog_image', 'مدونة _ صورة', '2025-03-19 15:52:25', '2025-03-19 15:52:25'),
(521, 'ur', 'blog_image', 'بلاگ _ تصویر', '2025-03-19 15:52:25', '2025-03-19 15:52:25'),
(522, 'ch', 'blog_image', '博客_图片', '2025-03-19 15:52:25', '2025-03-19 15:52:25'),
(523, 'ar', 'blog_updated_successfully', 'تم تحديث المدونة بنجاح.', '2025-03-19 15:52:55', '2025-03-19 15:52:55'),
(524, 'ur', 'blog_updated_successfully', 'بلاگ کامیابی کے ساتھ اپ ڈیٹ ہو گیا۔', '2025-03-19 15:52:55', '2025-03-19 15:52:55'),
(525, 'ch', 'blog_updated_successfully', '博客更新成功。', '2025-03-19 15:52:55', '2025-03-19 15:52:55'),
(526, 'ar', 'blog_update_successfully', 'تم تحديث المدونة بنجاح.', '2025-03-19 15:53:13', '2025-03-19 15:53:13'),
(527, 'ur', 'blog_update_successfully', 'بلاگ کی تازہ کاری کامیابی سے ہوئی۔', '2025-03-19 15:53:13', '2025-03-19 15:53:47'),
(528, 'ch', 'blog_update_successfully', '博客更新成功。', '2025-03-19 15:53:13', '2025-03-19 15:53:13'),
(529, 'ar', 'edit_blog', 'تعديل_المدونة', '2025-03-19 15:54:14', '2025-03-19 15:54:14'),
(530, 'ur', 'edit_blog', 'ترمیم_بلاگ', '2025-03-19 15:54:14', '2025-03-19 15:54:14'),
(531, 'ch', 'edit_blog', '编辑博客', '2025-03-19 15:54:14', '2025-03-19 15:54:14'),
(532, 'ar', 'cms', 'نظام إدارة المحتوى', '2025-03-19 15:54:44', '2025-03-19 15:54:44'),
(533, 'ur', 'cms', 'سی ایم ایس', '2025-03-19 15:54:44', '2025-03-19 15:54:44'),
(534, 'ch', 'cms', '内容管理系统', '2025-03-19 15:54:44', '2025-03-19 15:54:44'),
(535, 'ar', 'cms_pages', 'صفحات نظام إدارة المحتوى', '2025-03-19 15:57:29', '2025-03-19 15:57:29'),
(536, 'ur', 'cms_pages', 'سی ایم ایس_صفحات', '2025-03-19 15:57:29', '2025-03-19 15:57:29'),
(537, 'ch', 'cms_pages', '内容管理系统_页面', '2025-03-19 15:57:29', '2025-03-19 15:57:29'),
(538, 'ar', 'setting', 'جلسة', '2025-03-19 15:58:19', '2025-03-19 15:58:19'),
(539, 'ur', 'setting', 'ترتیب', '2025-03-19 15:58:19', '2025-03-19 15:58:19'),
(540, 'ch', 'setting', '环境', '2025-03-19 15:58:19', '2025-03-19 15:58:19'),
(541, 'ar', 'account_setting', 'إعدادات الحساب', '2025-03-19 15:58:43', '2025-03-19 15:58:43'),
(542, 'ur', 'account_setting', 'اکاؤنٹ کی ترتیبات', '2025-03-19 15:58:43', '2025-03-19 15:58:43'),
(543, 'ch', 'account_setting', '帐户设置', '2025-03-19 15:58:43', '2025-03-19 15:58:43'),
(544, 'ar', 'faq', 'التعليمات', '2025-03-19 15:59:16', '2025-03-19 15:59:16'),
(545, 'ur', 'faq', 'اکثر پوچھے گئے سوالات', '2025-03-19 15:59:16', '2025-03-19 15:59:16'),
(546, 'ch', 'faq', '常问问题', '2025-03-19 15:59:16', '2025-03-19 15:59:16'),
(547, 'ar', 'faq_deleted_successfully', 'تم حذف الأسئلة الشائعة بنجاح', '2025-03-19 15:59:44', '2025-03-19 15:59:44'),
(548, 'ur', 'faq_deleted_successfully', 'FAQ کامیابی کے ساتھ حذف کر دیا گیا۔', '2025-03-19 15:59:44', '2025-03-19 15:59:44'),
(549, 'ch', 'faq_deleted_successfully', '常见问题解答已成功删除', '2025-03-19 15:59:44', '2025-03-19 15:59:44'),
(550, 'ar', 'add_faq', 'إضافة الأسئلة الشائعة', '2025-03-19 16:00:31', '2025-03-19 16:00:31'),
(551, 'ur', 'add_faq', '_اکثر پوچھے گئے سوالات شامل کریں۔', '2025-03-19 16:00:31', '2025-03-19 16:00:31'),
(552, 'ch', 'add_faq', '添加常见问题解答', '2025-03-19 16:00:31', '2025-03-19 16:00:31'),
(553, 'ar', 'languages', 'اللغات', '2025-03-19 16:37:48', '2025-03-19 16:37:48'),
(554, 'ur', 'languages', 'زبانیں', '2025-03-19 16:37:48', '2025-03-19 16:37:48'),
(555, 'ch', 'languages', '语言', '2025-03-19 16:37:48', '2025-03-19 16:37:48'),
(556, 'ar', 'translations', 'ترجمة', '2025-03-19 16:38:30', '2025-03-19 16:38:30'),
(557, 'ur', 'translations', 'ترجمہ', '2025-03-19 16:38:30', '2025-03-19 16:38:30'),
(558, 'ch', 'translations', '翻译', '2025-03-19 16:38:30', '2025-03-19 16:38:30'),
(559, 'ar', 'you_will_not_be_able_to_revert_this', 'لن تتمكن من عكس هذا!', '2025-03-19 16:51:25', '2025-03-19 16:51:25'),
(560, 'ur', 'you_will_not_be_able_to_revert_this', 'آپ اسے ریورس نہیں کر سکیں گے!', '2025-03-19 16:51:25', '2025-03-19 16:51:25'),
(561, 'ch', 'you_will_not_be_able_to_revert_this', '你将无法逆转这一情况！', '2025-03-19 16:51:25', '2025-03-19 16:51:25'),
(562, 'ar', 'you_are_change_status', 'أنت تغير حالتك..!', '2025-03-19 16:51:48', '2025-03-19 16:51:48'),
(563, 'ur', 'you_are_change_status', 'تم سٹیٹس بدل رہے ہو..!', '2025-03-19 16:51:48', '2025-03-19 16:51:48'),
(564, 'ch', 'you_are_change_status', '您正在改变状态..！', '2025-03-19 16:51:48', '2025-03-19 16:51:48'),
(565, 'ar', 'yes_delete_it', 'نعم احذفه!', '2025-03-19 16:52:14', '2025-03-19 16:52:14'),
(566, 'ur', 'yes_delete_it', 'جی ہاں، اسے حذف کریں!', '2025-03-19 16:52:14', '2025-03-19 16:52:14'),
(567, 'ch', 'yes_delete_it', '是的，删除！', '2025-03-19 16:52:14', '2025-03-19 16:52:14'),
(568, 'ar', 'vehicle_type_updated_successfully', 'تم تحديث نوع المركبة بنجاح.', '2025-03-19 16:52:46', '2025-03-19 16:52:46'),
(569, 'ur', 'vehicle_type_updated_successfully', 'گاڑی کی_قسم_اپ ڈیٹ_کامیابی سے', '2025-03-19 16:52:46', '2025-03-19 16:52:46'),
(570, 'ch', 'vehicle_type_updated_successfully', '车辆类型更新成功。', '2025-03-19 16:52:46', '2025-03-19 16:52:46'),
(571, 'ar', 'vehicle_type_updated', 'تم تحديث نوع المركبة', '2025-03-19 16:53:18', '2025-03-19 16:53:18'),
(572, 'ur', 'vehicle_type_updated', 'گاڑی کی_قسم_اپ ڈیٹ کی گئی', '2025-03-19 16:53:18', '2025-03-19 16:53:18'),
(573, 'ch', 'vehicle_type_updated', '车辆类型已更新', '2025-03-19 16:53:18', '2025-03-19 16:53:18'),
(574, 'ar', 'vehicle_type_passenger_capecity', 'نوع المركبة_سعة_الركاب', '2025-03-19 16:54:16', '2025-03-19 16:54:16'),
(575, 'ur', 'vehicle_type_passenger_capecity', 'گاڑی کی_قسم_مسافر_کی صلاحیت', '2025-03-19 16:54:16', '2025-03-19 16:54:16'),
(576, 'ch', 'vehicle_type_passenger_capecity', '车辆类型_乘客_容量', '2025-03-19 16:54:16', '2025-03-19 16:54:16'),
(577, 'ar', 'vehicle_type_name', 'اسم نوع المركبة', '2025-03-19 16:54:43', '2025-03-19 16:54:43'),
(578, 'ur', 'vehicle_type_name', 'گاڑی_قسم_نام', '2025-03-19 16:54:43', '2025-03-19 16:54:43'),
(579, 'ch', 'vehicle_type_name', '车辆类型名称', '2025-03-19 16:54:43', '2025-03-19 16:54:43'),
(580, 'ar', 'vehicle_type_image', 'صورة نوع المركبة', '2025-03-19 16:55:14', '2025-03-19 16:55:14'),
(581, 'ur', 'vehicle_type_image', 'گاڑی کی_قسم_تصویر', '2025-03-19 16:55:14', '2025-03-19 16:55:14'),
(582, 'ch', 'vehicle_type_image', '车辆类型图片', '2025-03-19 16:55:14', '2025-03-19 16:55:14'),
(583, 'ar', 'vehicle_type_deleted_successfully', 'تم حذف نوع المركبة بنجاح.', '2025-03-19 16:55:37', '2025-03-19 16:55:37'),
(584, 'ur', 'vehicle_type_deleted_successfully', 'گاڑی کی_قسم_کامیابی سے_حذف', '2025-03-19 16:55:37', '2025-03-19 16:55:37'),
(585, 'ch', 'vehicle_type_deleted_successfully', '车辆类型删除成功。', '2025-03-19 16:55:37', '2025-03-19 16:55:37'),
(586, 'ar', 'vehicle_type_created', 'نوع المركبة التي تم إنشاؤها', '2025-03-19 16:56:09', '2025-03-19 16:56:09'),
(587, 'ur', 'vehicle_type_created', 'گاڑی _ قسم _ بنائی گئی۔', '2025-03-19 16:56:09', '2025-03-19 16:56:09'),
(588, 'ch', 'vehicle_type_created', '车辆类型已创建', '2025-03-19 16:56:09', '2025-03-19 16:56:09'),
(589, 'ar', 'vehicle_type_added_successfully', 'تمت إضافة نوع المركبة بنجاح.', '2025-03-19 16:56:41', '2025-03-19 16:56:41'),
(590, 'ur', 'vehicle_type_added_successfully', 'گاڑی_کی_قسم_کامیابی سے_شامل', '2025-03-19 16:56:41', '2025-03-19 16:56:41'),
(591, 'ch', 'vehicle_type_added_successfully', '车辆类型添加成功。', '2025-03-19 16:56:41', '2025-03-19 16:56:41'),
(592, 'ar', 'vehicle_types', 'أنواع المركبات', '2025-03-19 16:57:17', '2025-03-19 16:57:17'),
(593, 'ur', 'vehicle_types', 'گاڑی کی_قسم', '2025-03-19 16:57:17', '2025-03-19 16:57:17'),
(594, 'ch', 'vehicle_types', '车辆类型', '2025-03-19 16:57:17', '2025-03-19 16:57:17'),
(595, 'ar', 'vehicle_passenger_capecity', 'سعة ركاب المركبة', '2025-03-19 16:57:46', '2025-03-19 16:57:46'),
(596, 'ur', 'vehicle_passenger_capecity', 'گاڑی_مسافر_کی_صلاحیت', '2025-03-19 16:57:46', '2025-03-19 16:57:46'),
(597, 'ch', 'vehicle_passenger_capecity', '车辆乘客容量', '2025-03-19 16:57:46', '2025-03-19 16:57:46'),
(598, 'ar', 'vehicle_image', 'صورة المركبة', '2025-03-19 16:58:20', '2025-03-19 16:58:20'),
(599, 'ur', 'vehicle_image', 'گاڑی کی_تصویر', '2025-03-19 16:58:20', '2025-03-19 16:58:20'),
(600, 'ch', 'vehicle_image', '车辆图像', '2025-03-19 16:58:20', '2025-03-19 16:58:20'),
(601, 'ar', 'vehicle', 'عربة', '2025-03-19 16:58:51', '2025-03-19 16:58:51'),
(602, 'ur', 'vehicle', 'گاڑی', '2025-03-19 16:58:51', '2025-03-19 16:58:51'),
(603, 'ch', 'vehicle', '车辆', '2025-03-19 16:58:51', '2025-03-19 16:58:51'),
(604, 'ar', 'type', 'يكتب', '2025-03-19 16:59:21', '2025-03-19 16:59:21'),
(605, 'ur', 'type', 'قسم', '2025-03-19 16:59:21', '2025-03-19 16:59:21'),
(606, 'ch', 'type', '类型', '2025-03-19 16:59:21', '2025-03-19 16:59:21'),
(607, 'ch', 'translation_updated_successfully', '翻译更新成功', '2025-03-19 16:59:50', '2025-03-19 16:59:50'),
(608, 'ar', 'translation_setup', 'إعداد الترجمة', '2025-03-19 17:00:12', '2025-03-19 17:00:12'),
(609, 'ur', 'translation_setup', 'ترجمہ_سیٹ اپ', '2025-03-19 17:00:12', '2025-03-19 17:00:12'),
(610, 'ch', 'translation_setup', '翻译设置', '2025-03-19 17:00:12', '2025-03-19 17:00:12'),
(611, 'ar', 'translation_key', 'مفتاح الترجمة', '2025-03-19 17:01:31', '2025-03-19 17:01:31'),
(612, 'ur', 'translation_key', 'ترجمہ_کلید', '2025-03-19 17:01:31', '2025-03-19 17:01:31'),
(613, 'ch', 'translation_key', '翻译关键词', '2025-03-19 17:01:31', '2025-03-19 17:01:31'),
(614, 'ar', 'total_service_providers', 'إجمالي مقدمي الخدمات', '2025-03-19 17:02:06', '2025-03-19 17:02:06'),
(615, 'ur', 'total_service_providers', 'کل_سروس_فروائڈرز', '2025-03-19 17:02:06', '2025-03-19 17:02:06'),
(616, 'ch', 'total_service_providers', '总服务提供商', '2025-03-19 17:02:06', '2025-03-19 17:02:06'),
(617, 'ar', 'total_services', 'إجمالي الخدمات', '2025-03-19 17:02:30', '2025-03-19 17:02:30'),
(618, 'ur', 'total_services', 'کل_سروسز', '2025-03-19 17:02:30', '2025-03-19 17:02:30'),
(619, 'ch', 'total_services', '总服务量', '2025-03-19 17:02:30', '2025-03-19 17:02:30'),
(620, 'ar', 'total_rides_umrah__hajj', 'إجمالي الرحلات (العمرة والحج)', '2025-03-19 17:03:15', '2025-03-19 17:03:15'),
(621, 'ur', 'total_rides_umrah__hajj', 'کل سواری (عمرہ اور حج)', '2025-03-19 17:03:15', '2025-03-19 17:03:15'),
(622, 'ch', 'total_rides_umrah__hajj', '总行程次数（朝觐和副朝）', '2025-03-19 17:03:15', '2025-03-19 17:03:15'),
(623, 'ar', 'total_rides', 'إجمالي الرحلات', '2025-03-19 17:03:44', '2025-03-19 17:03:44'),
(624, 'ur', 'total_rides', 'کل_سواریاں', '2025-03-19 17:03:44', '2025-03-19 17:03:44'),
(625, 'ch', 'total_rides', '总骑行次数', '2025-03-19 17:03:44', '2025-03-19 17:03:44'),
(626, 'ar', 'total_drives', 'إجمالي محركات الأقراص', '2025-03-19 17:04:09', '2025-03-19 17:04:09'),
(627, 'ur', 'total_drives', 'کل_ڈرائیوز', '2025-03-19 17:04:09', '2025-03-19 17:04:09'),
(628, 'ch', 'total_drives', '总驱动器数', '2025-03-19 17:04:09', '2025-03-19 17:04:09'),
(629, 'ch', 'total_customer', '顾客总数', '2025-03-19 17:04:44', '2025-03-19 17:04:44'),
(630, 'ar', 'to', 'بحيرة', '2025-03-19 17:05:09', '2025-03-19 17:05:09'),
(631, 'ur', 'to', 'جھیل', '2025-03-19 17:05:09', '2025-03-19 17:05:09'),
(632, 'ch', 'to', '湖', '2025-03-19 17:05:09', '2025-03-19 17:05:09'),
(633, 'ar', 'title_16', 'العنوان_16', '2025-03-19 17:05:52', '2025-03-19 17:05:52'),
(634, 'ur', 'title_16', 'عنوان_16', '2025-03-19 17:05:52', '2025-03-19 17:05:52'),
(635, 'ch', 'title_16', '标题_16', '2025-03-19 17:05:52', '2025-03-19 17:05:52'),
(636, 'ar', 'title_15', 'العنوان_15', '2025-03-19 17:06:32', '2025-03-19 17:06:32'),
(637, 'ur', 'title_15', 'عنوان_15', '2025-03-19 17:06:32', '2025-03-19 17:06:32'),
(638, 'ch', 'title_15', '标题_15', '2025-03-19 17:06:32', '2025-03-19 17:06:32'),
(639, 'ar', 'title_14', 'العنوان_14', '2025-03-19 17:07:01', '2025-03-19 17:07:01'),
(640, 'ur', 'title_14', 'عنوان_14', '2025-03-19 17:07:01', '2025-03-19 17:07:01'),
(641, 'ch', 'title_14', '标题_14', '2025-03-19 17:07:01', '2025-03-19 17:07:01'),
(642, 'ar', 'title_13', 'العنوان_13', '2025-03-19 17:07:50', '2025-03-19 17:07:50'),
(643, 'ur', 'title_13', 'عنوان_13', '2025-03-19 17:07:50', '2025-03-19 17:07:50'),
(644, 'ch', 'title_13', '标题_13', '2025-03-19 17:07:50', '2025-03-19 17:07:50'),
(645, 'ar', 'title_12', 'العنوان_12', '2025-03-19 17:08:21', '2025-03-19 17:08:21'),
(646, 'ur', 'title_12', 'عنوان_12', '2025-03-19 17:08:21', '2025-03-19 17:08:21'),
(647, 'ch', 'title_12', '标题_12', '2025-03-19 17:08:21', '2025-03-19 17:08:21'),
(648, 'ar', 'title_11', 'العنوان_11', '2025-03-19 17:08:54', '2025-03-19 17:08:54'),
(649, 'ur', 'title_11', 'عنوان_11', '2025-03-19 17:08:54', '2025-03-19 17:08:54'),
(650, 'ch', 'title_11', '标题_11', '2025-03-19 17:08:54', '2025-03-19 17:08:54'),
(651, 'ar', 'title_10', 'العنوان_10', '2025-03-19 17:09:25', '2025-03-19 17:09:25'),
(652, 'ur', 'title_10', 'عنوان_10', '2025-03-19 17:09:25', '2025-03-19 17:09:25'),
(653, 'ch', 'title_10', '标题_10', '2025-03-19 17:09:25', '2025-03-19 17:09:25'),
(654, 'ar', 'title_9', 'العنوان_9', '2025-03-19 17:09:53', '2025-03-19 17:09:53'),
(655, 'ur', 'title_9', 'عنوان_9', '2025-03-19 17:09:53', '2025-03-19 17:09:53'),
(656, 'ch', 'title_9', '标题_9', '2025-03-19 17:09:53', '2025-03-19 17:09:53'),
(657, 'ar', 'title_8', 'العنوان_8', '2025-03-19 17:10:30', '2025-03-19 17:10:30');
INSERT INTO `translations` (`id`, `lang`, `lang_key`, `lang_value`, `created_at`, `updated_at`) VALUES
(658, 'ur', 'title_8', 'عنوان_8', '2025-03-19 17:10:30', '2025-03-19 17:10:30'),
(659, 'ch', 'title_8', '标题_8', '2025-03-19 17:10:30', '2025-03-19 17:10:30'),
(660, 'ar', 'title_7', 'العنوان_7', '2025-03-19 17:10:55', '2025-03-19 17:10:55'),
(661, 'ur', 'title_7', 'عنوان_7', '2025-03-19 17:10:55', '2025-03-19 17:10:55'),
(662, 'ch', 'title_7', '标题_7', '2025-03-19 17:10:55', '2025-03-19 17:10:55'),
(663, 'ar', 'title_6', 'العنوان_6', '2025-03-19 17:11:18', '2025-03-19 17:11:18'),
(664, 'ur', 'title_6', 'عنوان_6', '2025-03-19 17:11:18', '2025-03-19 17:11:18'),
(665, 'ch', 'title_6', '标题_6', '2025-03-19 17:11:18', '2025-03-19 17:11:18'),
(666, 'ar', 'title_5', 'العنوان_5', '2025-03-19 17:11:40', '2025-03-19 17:11:40'),
(667, 'ur', 'title_5', 'عنوان_5', '2025-03-19 17:11:40', '2025-03-19 17:11:40'),
(668, 'ch', 'title_5', '标题_5', '2025-03-19 17:11:40', '2025-03-19 17:11:40'),
(669, 'ar', 'title_4', 'العنوان_4', '2025-03-19 17:13:05', '2025-03-19 17:13:05'),
(670, 'ur', 'title_4', 'عنوان_4', '2025-03-19 17:13:05', '2025-03-19 17:13:05'),
(671, 'ch', 'title_4', '标题_4', '2025-03-19 17:13:05', '2025-03-19 17:13:05'),
(672, 'ar', 'title_3', 'العنوان_3', '2025-03-19 17:13:26', '2025-03-19 17:13:26'),
(673, 'ur', 'title_3', 'عنوان_3', '2025-03-19 17:13:26', '2025-03-19 17:13:26'),
(674, 'ch', 'title_3', '标题_3', '2025-03-19 17:13:26', '2025-03-19 17:13:26'),
(675, 'ar', 'title_2', 'العنوان_2', '2025-03-19 17:13:52', '2025-03-19 17:13:52'),
(676, 'ur', 'title_2', 'عنوان_2', '2025-03-19 17:13:52', '2025-03-19 17:13:52'),
(677, 'ch', 'title_2', '标题_2', '2025-03-19 17:13:52', '2025-03-19 17:13:52'),
(678, 'ar', 'title_1', 'العنوان_1', '2025-03-19 17:14:13', '2025-03-19 17:14:13'),
(679, 'ur', 'title_1', 'عنوان_1', '2025-03-19 17:14:13', '2025-03-19 17:14:13'),
(680, 'ch', 'title_1', '标题_1', '2025-03-19 17:14:13', '2025-03-19 17:14:13'),
(681, 'ar', 'title', 'العنوان', '2025-03-19 17:14:42', '2025-03-19 17:14:42'),
(682, 'ur', 'title', 'عنوان', '2025-03-19 17:14:42', '2025-03-19 17:14:42'),
(683, 'ch', 'title', '标题', '2025-03-19 17:14:42', '2025-03-19 17:14:42'),
(684, 'ar', 'this_field_is_required', 'هذه الخانة مطلوبه.', '2025-03-19 17:15:04', '2025-03-19 17:15:04'),
(685, 'ur', 'this_field_is_required', 'یہ فیلڈ درکار ہے۔', '2025-03-19 17:15:04', '2025-03-19 17:15:04'),
(686, 'ch', 'this_field_is_required', '此字段是必需的。', '2025-03-19 17:15:04', '2025-03-19 17:15:04'),
(687, 'ar', 'the_select_role_field_is_required', 'حقل تحديد الدور مطلوب.', '2025-03-19 17:15:27', '2025-03-19 17:15:27'),
(688, 'ur', 'the_select_role_field_is_required', 'منتخب رول فیلڈ درکار ہے۔', '2025-03-19 17:15:27', '2025-03-19 17:15:27'),
(689, 'ch', 'the_select_role_field_is_required', '选择角色字段是必填项。', '2025-03-19 17:15:27', '2025-03-19 17:15:27'),
(690, 'ar', 'the_profile_image_must_be_a_file_of_type_jpeg_png_jpg', 'يجب أن تكون صورة الملف الشخصي من نوع الملف: jpeg، png، jpg.', '2025-03-19 17:15:51', '2025-03-19 17:15:51'),
(691, 'ur', 'the_profile_image_must_be_a_file_of_type_jpeg_png_jpg', 'پروفائل کی تصویر اس قسم کی فائل ہونی چاہیے: jpeg, png, jpg۔', '2025-03-19 17:15:51', '2025-03-19 17:15:51'),
(692, 'ch', 'the_profile_image_must_be_a_file_of_type_jpeg_png_jpg', '个人资料图片必须是以下类型的文件：jpeg、png、jpg。', '2025-03-19 17:15:51', '2025-03-19 17:15:51'),
(693, 'ar', 'the_profile_image_must_be_a_file', 'يجب أن تكون صورة الملف الشخصي ملفًا.', '2025-03-19 17:16:16', '2025-03-19 17:16:16'),
(694, 'ur', 'the_profile_image_must_be_a_file', 'پروفائل کی تصویر ایک فائل ہونی چاہیے۔', '2025-03-19 17:16:16', '2025-03-19 17:16:16'),
(695, 'ch', 'the_profile_image_must_be_a_file', '个人资料图片必须是文件。', '2025-03-19 17:16:16', '2025-03-19 17:16:16'),
(696, 'ar', 'the_profile_image_field_is_required', 'حقل صورة الملف الشخصي مطلوب.', '2025-03-19 17:16:53', '2025-03-19 17:16:53'),
(697, 'ur', 'the_profile_image_field_is_required', 'پروفائل امیج فیلڈ درکار ہے۔', '2025-03-19 17:16:53', '2025-03-19 17:16:53'),
(698, 'ch', 'the_profile_image_field_is_required', '个人资料图片字段是必填项。', '2025-03-19 17:16:53', '2025-03-19 17:16:53'),
(699, 'ar', 'the_phone_number_must_be_at_least_9_characters', 'يجب أن يكون رقم الهاتف 9 أحرف على الأقل.', '2025-03-19 17:17:41', '2025-03-19 17:17:41'),
(700, 'ur', 'the_phone_number_must_be_at_least_9_characters', 'فون نمبر کم از کم 9 حروف کا ہونا چاہیے۔', '2025-03-19 17:17:41', '2025-03-19 17:17:41'),
(701, 'ch', 'the_phone_number_must_be_at_least_9_characters', '电话号码必须至少包含 9 个字符。', '2025-03-19 17:17:41', '2025-03-19 17:17:41'),
(702, 'ar', 'the_phone_number_may_not_be_greater_than_11_characters', 'لا يجوز أن يزيد رقم الهاتف عن 11 حرفًا.', '2025-03-19 17:18:08', '2025-03-19 17:18:08'),
(703, 'ur', 'the_phone_number_may_not_be_greater_than_11_characters', 'فون نمبر 11 حروف سے زیادہ نہیں ہو سکتا۔', '2025-03-19 17:18:08', '2025-03-19 17:18:08'),
(704, 'ch', 'the_phone_number_may_not_be_greater_than_11_characters', '电话号码不得超过11个字符。', '2025-03-19 17:18:08', '2025-03-19 17:18:08'),
(705, 'ar', 'the_phone_number_has_already_been_taken', 'لقد تم أخذ رقم الهاتف بالفعل.', '2025-03-19 17:18:38', '2025-03-19 17:18:38'),
(706, 'ur', 'the_phone_number_has_already_been_taken', 'فون نمبر پہلے ہی لیا جا چکا ہے۔', '2025-03-19 17:18:38', '2025-03-19 17:18:38'),
(707, 'ch', 'the_phone_number_has_already_been_taken', '该电话号码已被占用。', '2025-03-19 17:18:38', '2025-03-19 17:18:38'),
(708, 'ar', 'the_phone_number_field_is_required', 'حقل رقم الهاتف مطلوب.', '2025-03-19 17:19:07', '2025-03-19 17:19:07'),
(709, 'ur', 'the_phone_number_field_is_required', 'فون نمبر کی فیلڈ درکار ہے۔', '2025-03-19 17:19:07', '2025-03-19 17:19:07'),
(710, 'ch', 'the_phone_number_field_is_required', '电话号码字段是必填项。', '2025-03-19 17:19:07', '2025-03-19 17:19:07'),
(711, 'ar', 'the_password_field_is_required', 'حقل كلمة المرور مطلوب.', '2025-03-19 17:19:34', '2025-03-19 17:19:34'),
(712, 'ur', 'the_password_field_is_required', 'پاس ورڈ فیلڈ درکار ہے۔', '2025-03-19 17:19:34', '2025-03-19 17:19:34'),
(713, 'ch', 'the_password_field_is_required', '密码字段是必填项。', '2025-03-19 17:19:34', '2025-03-19 17:19:34'),
(714, 'ar', 'the_password_confirmation_does_not_match_the_new_password', 'تأكيد كلمة المرور لا يتطابق مع كلمة المرور الجديدة', '2025-03-19 17:20:20', '2025-03-19 17:20:20'),
(715, 'ur', 'the_password_confirmation_does_not_match_the_new_password', '_ پاس ورڈ _ تصدیق_ نہیں_ کرتا_ سے_ نیا_ پاس ورڈ', '2025-03-19 17:20:20', '2025-03-19 17:20:20'),
(716, 'ch', 'the_password_confirmation_does_not_match_the_new_password', '密码确认与新密码不匹配', '2025-03-19 17:20:20', '2025-03-19 17:20:20'),
(717, 'ar', 'the_first_name_field_is_required', 'حقل الاسم الأول مطلوب.', '2025-03-19 17:20:53', '2025-03-19 17:20:53'),
(718, 'ur', 'the_first_name_field_is_required', 'پہلے نام کا فیلڈ درکار ہے۔', '2025-03-19 17:20:53', '2025-03-19 17:20:53'),
(719, 'ch', 'the_first_name_field_is_required', '名字字段是必填项。', '2025-03-19 17:20:53', '2025-03-19 17:20:53'),
(720, 'ar', 'the_field_must_not_exceed_max_characters', 'يجب ألا يتجاوز الحقل :max الشخصيات.', '2025-03-20 08:35:38', '2025-03-20 08:35:38'),
(721, 'ur', 'the_field_must_not_exceed_max_characters', 'فیلڈ سے زیادہ نہیں ہونا چاہئے۔ :max حروف', '2025-03-20 08:35:38', '2025-03-20 08:35:38'),
(722, 'ch', 'the_field_must_not_exceed_max_characters', '该字段不得超过 :max 个字符。', '2025-03-20 08:35:38', '2025-03-20 08:35:38'),
(723, 'ar', 'the_field_must_be_a_string', 'يجب أن يكون الحقل عبارة عن سلسلة', '2025-03-20 08:36:30', '2025-03-20 08:36:30'),
(724, 'ur', 'the_field_must_be_a_string', 'فیلڈ ایک تار ہونا چاہیے۔', '2025-03-20 08:36:30', '2025-03-20 08:36:30'),
(725, 'ch', 'the_field_must_be_a_string', '该字段必须是字符串', '2025-03-20 08:36:30', '2025-03-20 08:36:30'),
(726, 'ar', 'the_email_must_be_in_lowercase_letters', 'يجب أن يكون البريد الإلكتروني بأحرف صغيرة.', '2025-03-20 08:36:54', '2025-03-20 08:36:54'),
(727, 'ur', 'the_email_must_be_in_lowercase_letters', 'ای میل چھوٹے حروف میں ہونی چاہیے۔', '2025-03-20 08:36:54', '2025-03-20 08:36:54'),
(728, 'ch', 'the_email_must_be_in_lowercase_letters', '电子邮件必须采用小写字母。', '2025-03-20 08:36:54', '2025-03-20 08:36:54'),
(729, 'ar', 'the_email_has_already_been_taken', 'لقد تم أخذ البريد الإلكتروني بالفعل.', '2025-03-20 08:37:24', '2025-03-20 08:37:24'),
(730, 'ur', 'the_email_has_already_been_taken', 'ای میل پہلے ہی لے لی گئی ہے۔', '2025-03-20 08:37:24', '2025-03-20 08:37:24'),
(731, 'ch', 'the_email_has_already_been_taken', '该电子邮件已被取走。', '2025-03-20 08:37:24', '2025-03-20 08:37:24'),
(732, 'ar', 'the_email_field_is_required', 'حقل البريد الإلكتروني مطلوب.', '2025-03-20 08:38:03', '2025-03-20 08:38:03'),
(733, 'ur', 'the_email_field_is_required', 'ای میل فیلڈ درکار ہے۔', '2025-03-20 08:38:03', '2025-03-20 08:38:03'),
(734, 'ch', 'the_email_field_is_required', '电子邮件字段是必填项。', '2025-03-20 08:38:03', '2025-03-20 08:38:03'),
(735, 'ar', 'the_country_field_is_required', 'حقل البلد مطلوب.', '2025-03-20 08:38:28', '2025-03-20 08:38:28'),
(736, 'ur', 'the_country_field_is_required', 'ملکی میدان درکار ہے۔', '2025-03-20 08:38:28', '2025-03-20 08:38:28'),
(737, 'ch', 'the_country_field_is_required', '国家字段是必填项。', '2025-03-20 08:38:28', '2025-03-20 08:38:28'),
(738, 'ar', 'the_confirm_password_must_match_the_password', 'يجب أن تتطابق كلمة المرور التأكيدية مع كلمة المرور.', '2025-03-20 08:39:10', '2025-03-20 08:39:10'),
(739, 'ur', 'the_confirm_password_must_match_the_password', 'تصدیقی پاس ورڈ پاس ورڈ سے مماثل ہونا چاہیے۔', '2025-03-20 08:39:10', '2025-03-20 08:39:10'),
(740, 'ch', 'the_confirm_password_must_match_the_password', '确认密码必须与密码一致。', '2025-03-20 08:39:10', '2025-03-20 08:39:10'),
(741, 'ar', 'the_confirm_password_field_is_required', 'حقل تأكيد كلمة المرور مطلوب.', '2025-03-20 08:43:22', '2025-03-20 08:43:22'),
(742, 'ur', 'the_confirm_password_field_is_required', 'تصدیقی پاس ورڈ فیلڈ درکار ہے۔', '2025-03-20 08:43:22', '2025-03-20 08:43:22'),
(743, 'ch', 'the_confirm_password_field_is_required', '确认密码字段是必填项。', '2025-03-20 08:43:22', '2025-03-20 08:43:22'),
(744, 'ar', 'text_field_3', 'حقل النص 3', '2025-03-20 08:45:06', '2025-03-20 08:45:06'),
(745, 'ur', 'text_field_3', 'متن_فیلڈ_3', '2025-03-20 08:45:06', '2025-03-20 08:45:06'),
(746, 'ch', 'text_field_3', '文本字段 3', '2025-03-20 08:45:06', '2025-03-20 08:45:06'),
(747, 'ar', 'text_field_2', 'حقل النص 2', '2025-03-20 08:45:31', '2025-03-20 08:45:31'),
(748, 'ur', 'text_field_2', 'متن_فیلڈ_2', '2025-03-20 08:45:31', '2025-03-20 08:45:31'),
(749, 'ch', 'text_field_2', '文本字段 2', '2025-03-20 08:45:31', '2025-03-20 08:45:31'),
(750, 'ar', 'text_field_1', 'حقل النص 1', '2025-03-20 08:49:01', '2025-03-20 08:49:01'),
(751, 'ur', 'text_field_1', 'متن_فیلڈ_1', '2025-03-20 08:49:01', '2025-03-20 08:49:01'),
(752, 'ch', 'text_field_1', '文本字段 1', '2025-03-20 08:49:01', '2025-03-20 08:49:01'),
(753, 'ar', 'text_3', 'النص_3', '2025-03-20 08:49:42', '2025-03-20 08:49:42'),
(754, 'ur', 'text_3', 'متن_3', '2025-03-20 08:49:42', '2025-03-20 08:49:42'),
(755, 'ch', 'text_3', '文本3', '2025-03-20 08:49:42', '2025-03-20 08:49:42'),
(756, 'ar', 'text_2', 'النص_2', '2025-03-20 08:50:10', '2025-03-20 08:50:10'),
(757, 'ur', 'text_2', 'متن_2', '2025-03-20 08:50:10', '2025-03-20 08:50:10'),
(758, 'ch', 'text_2', '文本2', '2025-03-20 08:50:10', '2025-03-20 08:50:10'),
(759, 'ar', 'text_1', 'النص_1', '2025-03-20 08:50:40', '2025-03-20 08:50:40'),
(760, 'ur', 'text_1', 'متن_1', '2025-03-20 08:50:40', '2025-03-20 08:50:40'),
(761, 'ch', 'text_1', '文本1', '2025-03-20 08:50:40', '2025-03-20 08:50:40'),
(762, 'ar', 'suspend', 'تعليق', '2025-03-20 08:51:01', '2025-03-20 08:51:01'),
(763, 'ur', 'suspend', 'معطل کرنا', '2025-03-20 08:51:01', '2025-03-20 08:51:01'),
(764, 'ch', 'suspend', '暂停', '2025-03-20 08:51:01', '2025-03-20 08:51:01'),
(765, 'ar', 'sub_admin_detail', 'تفاصيل المشرف الفرعي', '2025-03-20 08:52:44', '2025-03-20 08:52:44'),
(766, 'ur', 'sub_admin_detail', 'سب ایڈمن کی تفصیل', '2025-03-20 08:52:44', '2025-03-20 08:52:44'),
(767, 'ch', 'sub_admin_detail', '子管理员详细信息', '2025-03-20 08:52:44', '2025-03-20 08:52:44'),
(768, 'ar', 'sub_admin_account_update_successfully', 'تم تحديث حساب المشرف الفرعي بنجاح.', '2025-03-20 08:53:14', '2025-03-20 08:53:14'),
(769, 'ur', 'sub_admin_account_update_successfully', 'سب ایڈمن اکاؤنٹ کامیابی کے ساتھ اپ ڈیٹ ہو گیا۔', '2025-03-20 08:53:14', '2025-03-20 08:53:14'),
(770, 'ch', 'sub_admin_account_update_successfully', '子管理员帐户更新成功。', '2025-03-20 08:53:14', '2025-03-20 08:53:14'),
(771, 'ar', 'sub_admin_account_suspend_successfully', 'تم تعليق حساب المشرف الفرعي بنجاح.', '2025-03-20 08:53:39', '2025-03-20 08:53:39'),
(772, 'ur', 'sub_admin_account_suspend_successfully', 'سب ایڈمن اکاؤنٹ کامیابی سے معطل کر دیا گیا۔', '2025-03-20 08:53:39', '2025-03-20 08:53:39'),
(773, 'ch', 'sub_admin_account_suspend_successfully', '子管理员帐户已成功暂停。', '2025-03-20 08:53:39', '2025-03-20 08:53:39'),
(774, 'ar', 'sub_admin_account_deleted_successfully', 'تم حذف حساب المشرف الفرعي بنجاح.', '2025-03-20 08:54:04', '2025-03-20 08:54:04'),
(775, 'ur', 'sub_admin_account_deleted_successfully', 'سب ایڈمن اکاؤنٹ کامیابی کے ساتھ حذف کر دیا گیا۔', '2025-03-20 08:54:04', '2025-03-20 08:54:04'),
(776, 'ch', 'sub_admin_account_deleted_successfully', '子管理员帐户已成功删除。', '2025-03-20 08:54:04', '2025-03-20 08:54:04'),
(777, 'ar', 'sub_admin_account_approved_successfully', 'تمت الموافقة على حساب المشرف الفرعي بنجاح.', '2025-03-20 08:54:40', '2025-03-20 08:54:40'),
(778, 'ur', 'sub_admin_account_approved_successfully', 'سب ایڈمن اکاؤنٹ کامیابی کے ساتھ منظور ہو گیا۔', '2025-03-20 08:54:40', '2025-03-20 08:54:40'),
(779, 'ch', 'sub_admin_account_approved_successfully', '子管理员帐户批准成功。', '2025-03-20 08:54:40', '2025-03-20 08:54:40'),
(780, 'ar', 'sub_admin_account_added_successfully', 'تمت إضافة حساب المشرف الفرعي بنجاح.', '2025-03-20 08:55:02', '2025-03-20 08:55:02'),
(781, 'ur', 'sub_admin_account_added_successfully', 'سب ایڈمن اکاؤنٹ کامیابی کے ساتھ شامل کر دیا گیا۔', '2025-03-20 08:55:02', '2025-03-20 08:55:02'),
(782, 'ch', 'sub_admin_account_added_successfully', '子管理员帐户添加成功。', '2025-03-20 08:55:02', '2025-03-20 08:55:02'),
(783, 'ar', 'sub_admin', 'المشرف الفرعي', '2025-03-20 08:57:18', '2025-03-20 08:57:18'),
(784, 'ur', 'sub_admin', 'سب ایڈمن', '2025-03-20 08:57:18', '2025-03-20 08:57:18'),
(785, 'ch', 'sub_admin', '副管理员', '2025-03-20 08:57:18', '2025-03-20 08:57:18'),
(786, 'ar', 'submit', 'يُقدِّم', '2025-03-20 08:57:46', '2025-03-20 08:57:46'),
(787, 'ur', 'submit', 'جمع کروائیں', '2025-03-20 08:57:46', '2025-03-20 08:57:46'),
(788, 'ch', 'submit', '提交', '2025-03-20 08:57:46', '2025-03-20 08:57:46'),
(789, 'ar', 'status', 'حالة', '2025-03-20 08:59:39', '2025-03-20 08:59:39'),
(790, 'ur', 'status', 'حیثیت', '2025-03-20 08:59:39', '2025-03-20 08:59:39'),
(791, 'ch', 'status', '地位', '2025-03-20 08:59:39', '2025-03-20 08:59:39'),
(792, 'ar', 'sort_descending', 'ترتيب تنازلي', '2025-03-20 09:00:03', '2025-03-20 09:00:03'),
(793, 'ur', 'sort_descending', 'نزولی ترتیب', '2025-03-20 09:00:03', '2025-03-20 09:00:03'),
(794, 'ch', 'sort_descending', '降序', '2025-03-20 09:00:03', '2025-03-20 09:00:03'),
(795, 'ar', 'sort_ascending', 'فرز تصاعدي', '2025-03-20 09:00:35', '2025-03-20 09:00:35'),
(796, 'ur', 'sort_ascending', 'ترتیب_صعودی', '2025-03-20 09:00:35', '2025-03-20 09:00:35'),
(797, 'ch', 'sort_ascending', '升序排序', '2025-03-20 09:00:35', '2025-03-20 09:00:35'),
(798, 'ar', 'slug', 'سبيكة', '2025-03-20 09:01:00', '2025-03-20 09:01:00'),
(799, 'ur', 'slug', 'سلگ', '2025-03-20 09:01:00', '2025-03-20 09:01:00'),
(800, 'ch', 'slug', '蛞蝓', '2025-03-20 09:01:00', '2025-03-20 09:01:00'),
(801, 'ar', 'showing', 'عرض', '2025-03-20 09:03:06', '2025-03-20 09:03:06'),
(802, 'ur', 'showing', 'دکھا رہا ہے۔', '2025-03-20 09:03:06', '2025-03-20 09:03:06'),
(803, 'ch', 'showing', '显示', '2025-03-20 09:03:06', '2025-03-20 09:03:06'),
(804, 'ar', 'service_update_successfully', 'تم تحديث الخدمة بنجاح.', '2025-03-20 09:03:37', '2025-03-20 09:03:37'),
(805, 'ur', 'service_update_successfully', 'سروس اپ ڈیٹ کامیابی کے ساتھ۔', '2025-03-20 09:03:37', '2025-03-20 09:03:37'),
(806, 'ch', 'service_update_successfully', '服务更新成功。', '2025-03-20 09:03:37', '2025-03-20 09:03:37'),
(807, 'ar', 'service_updated_successfully', 'تم تحديث الخدمة بنجاح.', '2025-03-20 09:05:01', '2025-03-20 09:05:01'),
(808, 'ur', 'service_updated_successfully', 'سروس کامیابی کے ساتھ اپ ڈیٹ ہو گئی۔', '2025-03-20 09:05:01', '2025-03-20 09:05:01'),
(809, 'ch', 'service_updated_successfully', '服务更新成功。', '2025-03-20 09:05:01', '2025-03-20 09:05:01'),
(810, 'ar', 'service_updated', 'الخدمة _ تم تحديثها', '2025-03-20 09:05:58', '2025-03-20 09:05:58'),
(811, 'ur', 'service_updated', 'سروس _ اپ ڈیٹ', '2025-03-20 09:05:58', '2025-03-20 09:05:58'),
(812, 'ch', 'service_updated', '服务_更新', '2025-03-20 09:05:58', '2025-03-20 09:05:58'),
(813, 'ar', 'service_not_found', 'لم يتم العثور على الخدمة', '2025-03-20 09:07:21', '2025-03-20 09:07:21'),
(814, 'ur', 'service_not_found', 'سروس نہیں ملی', '2025-03-20 09:07:21', '2025-03-20 09:07:21'),
(815, 'ch', 'service_not_found', '未找到服务', '2025-03-20 09:07:21', '2025-03-20 09:07:21'),
(816, 'ar', 'service_image_4', 'الخدمة _ الصورة _ 4', '2025-03-20 09:08:13', '2025-03-20 09:08:13'),
(817, 'ur', 'service_image_4', 'خدمت _ تصویر _ 4', '2025-03-20 09:08:13', '2025-03-20 09:08:13'),
(818, 'ch', 'service_image_4', '服务_图片_4', '2025-03-20 09:08:13', '2025-03-20 09:08:13'),
(819, 'ar', 'service_image_3', 'الخدمة _ الصورة _ 3', '2025-03-20 09:08:42', '2025-03-20 09:08:42'),
(820, 'ur', 'service_image_3', 'خدمت _ تصویر _ 3', '2025-03-20 09:08:42', '2025-03-20 09:08:42'),
(821, 'ch', 'service_image_3', '服务_图片_3', '2025-03-20 09:08:42', '2025-03-20 09:08:42'),
(822, 'ar', 'service_image_2', 'الخدمة _ الصورة _ 2', '2025-03-20 09:09:08', '2025-03-20 09:09:08'),
(823, 'ur', 'service_image_2', 'خدمت _ تصویر _ 2', '2025-03-20 09:09:08', '2025-03-20 09:09:08'),
(824, 'ch', 'service_image_2', '服务_图片_2', '2025-03-20 09:09:08', '2025-03-20 09:09:08'),
(825, 'ar', 'service_image_1', 'الخدمة _ الصورة _ 1', '2025-03-20 09:10:06', '2025-03-20 09:10:06'),
(826, 'ur', 'service_image_1', 'خدمت _ تصویر _ 1', '2025-03-20 09:10:06', '2025-03-20 09:10:06'),
(827, 'ch', 'service_image_1', '服务_图片_1', '2025-03-20 09:10:06', '2025-03-20 09:10:06'),
(828, 'ar', 'service_image', 'الخدمة _ الصورة', '2025-03-20 09:12:44', '2025-03-20 09:12:44'),
(829, 'ur', 'service_image', 'خدمت _ تصویر', '2025-03-20 09:12:44', '2025-03-20 09:12:44'),
(830, 'ch', 'service_image', '服务_图片', '2025-03-20 09:12:44', '2025-03-20 09:12:44'),
(831, 'ar', 'service_deleted_successfully', 'تم حذف الخدمة بنجاح.', '2025-03-20 09:15:28', '2025-03-20 09:15:28'),
(832, 'ur', 'service_deleted_successfully', 'سروس کامیابی سے حذف ہو گئی۔', '2025-03-20 09:15:28', '2025-03-20 09:15:28'),
(833, 'ch', 'service_deleted_successfully', '服务已成功删除。', '2025-03-20 09:15:28', '2025-03-20 09:15:28'),
(834, 'ar', 'service_created', 'تم إنشاء الخدمة', '2025-03-20 09:16:44', '2025-03-20 09:16:44'),
(835, 'ur', 'service_created', 'سروس _ بنائی گئی۔', '2025-03-20 09:16:44', '2025-03-20 09:16:44'),
(836, 'ch', 'service_created', '服务创建', '2025-03-20 09:16:44', '2025-03-20 09:16:44'),
(837, 'ar', 'service_banner_image', 'صورة لافتة الخدمة', '2025-03-20 09:17:45', '2025-03-20 09:17:45'),
(838, 'ur', 'service_banner_image', 'سروس _بینر_امیج', '2025-03-20 09:17:45', '2025-03-20 09:17:45'),
(839, 'ch', 'service_banner_image', '服务横幅图片', '2025-03-20 09:17:45', '2025-03-20 09:17:45'),
(840, 'ar', 'enter_title_8', 'أدخل العنوان 8', '2025-03-20 09:18:33', '2025-03-20 09:18:33'),
(841, 'ur', 'enter_title_8', '_ عنوان _8 درج کریں۔', '2025-03-20 09:18:33', '2025-03-20 09:18:33'),
(842, 'ch', 'enter_title_8', '输入标题_8', '2025-03-20 09:18:33', '2025-03-20 09:18:33'),
(843, 'ar', 'enter_title_9', 'أدخل _ العنوان _9', '2025-03-20 09:27:19', '2025-03-20 09:27:19'),
(844, 'ur', 'enter_title_9', '_ عنوان _9 درج کریں۔', '2025-03-20 09:27:19', '2025-03-20 09:27:19'),
(845, 'ch', 'enter_title_9', '输入标题_9', '2025-03-20 09:27:19', '2025-03-20 09:27:19'),
(846, 'ar', 'enter_title_10', 'أدخل _ العنوان _10', '2025-03-20 09:27:59', '2025-03-20 09:27:59'),
(847, 'ur', 'enter_title_10', '_ عنوان _10 درج کریں۔', '2025-03-20 09:27:59', '2025-03-20 09:27:59'),
(848, 'ch', 'enter_title_10', '输入标题_10', '2025-03-20 09:27:59', '2025-03-20 09:27:59'),
(849, 'ar', 'enter_title_11', 'أدخل _ العنوان _11', '2025-03-20 09:28:33', '2025-03-20 09:28:33'),
(850, 'ur', 'enter_title_11', '_ عنوان _11 درج کریں۔', '2025-03-20 09:28:33', '2025-03-20 09:28:33'),
(851, 'ch', 'enter_title_11', '输入标题_11', '2025-03-20 09:28:33', '2025-03-20 09:28:33'),
(852, 'ar', 'enter_title_12', 'أدخل _ العنوان _12', '2025-03-20 09:29:12', '2025-03-20 09:29:12'),
(853, 'ur', 'enter_title_12', '_ عنوان _12 درج کریں۔', '2025-03-20 09:29:12', '2025-03-20 09:29:12'),
(854, 'ch', 'enter_title_12', '输入标题_12', '2025-03-20 09:29:12', '2025-03-20 09:29:12'),
(855, 'ar', 'enter_title_13', 'أدخل _ العنوان _13', '2025-03-20 09:29:59', '2025-03-20 09:29:59'),
(856, 'ur', 'enter_title_13', '_ عنوان _13 درج کریں۔', '2025-03-20 09:29:59', '2025-03-20 09:29:59'),
(857, 'ch', 'enter_title_13', '输入标题_13', '2025-03-20 09:29:59', '2025-03-20 09:29:59'),
(858, 'ar', 'enter_title_14', 'أدخل _ العنوان _14', '2025-03-20 09:30:40', '2025-03-20 09:30:40'),
(859, 'ur', 'enter_title_14', '_ عنوان _14 درج کریں۔', '2025-03-20 09:30:40', '2025-03-20 09:30:40'),
(860, 'ch', 'enter_title_14', '输入标题_14', '2025-03-20 09:30:40', '2025-03-20 09:30:40'),
(861, 'ar', 'enter_title_15', 'أدخل _ العنوان _15', '2025-03-20 09:31:06', '2025-03-20 09:31:06'),
(862, 'ur', 'enter_title_15', '_ عنوان _15 درج کریں۔', '2025-03-20 09:31:06', '2025-03-20 09:31:06'),
(863, 'ch', 'enter_title_15', '输入标题_15', '2025-03-20 09:31:06', '2025-03-20 09:31:06'),
(864, 'ar', 'enter_title_16', 'أدخل _ العنوان _16', '2025-03-20 09:33:16', '2025-03-20 09:33:16'),
(865, 'ur', 'enter_title_16', '_ عنوان _16 درج کریں۔', '2025-03-20 09:33:16', '2025-03-20 09:33:16'),
(866, 'ch', 'enter_title_16', '输入标题_16', '2025-03-20 09:33:16', '2025-03-20 09:33:16'),
(867, 'ar', 'enter_type', 'أدخل النوع', '2025-03-20 09:34:36', '2025-03-20 09:34:36'),
(868, 'ur', 'enter_type', 'داخل کریں_ قسم', '2025-03-20 09:34:36', '2025-03-20 09:34:36'),
(869, 'ch', 'enter_type', '输入类型', '2025-03-20 09:34:36', '2025-03-20 09:34:36'),
(870, 'ar', 'enter_vehicle', 'أدخل المركبة', '2025-03-20 09:35:12', '2025-03-20 09:35:12'),
(871, 'ur', 'enter_vehicle', 'داخل_وہیکل', '2025-03-20 09:35:12', '2025-03-20 09:35:12'),
(872, 'ch', 'enter_vehicle', '进入车辆', '2025-03-20 09:35:12', '2025-03-20 09:35:12'),
(873, 'ar', 'enter_your_email__password_to_login', 'أدخل بريدك الإلكتروني وكلمة المرور لتسجيل الدخول', '2025-03-20 09:35:54', '2025-03-20 09:35:54'),
(874, 'ur', 'enter_your_email__password_to_login', 'لاگ ان کرنے کے لیے اپنا ای میل اور پاس ورڈ درج کریں۔', '2025-03-20 09:35:54', '2025-03-20 09:35:54'),
(875, 'ch', 'enter_your_email__password_to_login', '输入您的电子邮件和密码登录', '2025-03-20 09:35:54', '2025-03-20 09:35:54'),
(876, 'ar', 'entries', 'الإدخالات', '2025-03-20 09:37:51', '2025-03-20 09:37:51'),
(877, 'ur', 'entries', 'اندراجات', '2025-03-20 09:37:51', '2025-03-20 09:37:51'),
(878, 'ch', 'entries', '条目', '2025-03-20 09:37:51', '2025-03-20 09:37:51'),
(879, 'ar', 'female', 'أنثى', '2025-03-20 09:38:50', '2025-03-20 09:38:50'),
(880, 'ur', 'female', 'خاتون', '2025-03-20 09:38:50', '2025-03-20 09:38:50'),
(881, 'ch', 'female', '女性', '2025-03-20 09:38:50', '2025-03-20 09:38:50'),
(882, 'ar', 'filtered', 'مُصفى', '2025-03-20 09:39:36', '2025-03-20 09:39:36'),
(883, 'ur', 'filtered', 'فلٹر شدہ', '2025-03-20 09:39:36', '2025-03-20 09:39:36'),
(884, 'ch', 'filtered', '已过滤', '2025-03-20 09:39:36', '2025-03-20 09:39:36'),
(885, 'ar', 'select_status', 'حدد الحالة', '2025-03-20 09:45:42', '2025-03-20 09:45:42'),
(886, 'ur', 'select_status', 'منتخب_سٹیٹس', '2025-03-20 09:45:42', '2025-03-20 09:45:42'),
(887, 'ch', 'select_status', '选择_地位', '2025-03-20 09:45:42', '2025-03-20 09:45:42'),
(888, 'ar', 'first', 'أولاً', '2025-03-20 09:46:52', '2025-03-20 09:46:52'),
(889, 'ur', 'first', 'سب سے پہلے', '2025-03-20 09:46:52', '2025-03-20 09:46:52'),
(890, 'ch', 'first', '第一的', '2025-03-20 09:46:52', '2025-03-20 09:46:52'),
(891, 'ar', 'for_translation', 'للترجمة', '2025-03-20 09:47:28', '2025-03-20 09:47:28'),
(892, 'ur', 'for_translation', 'ترجمہ کے لیے', '2025-03-20 09:47:28', '2025-03-20 09:47:28'),
(893, 'ch', 'for_translation', '翻译', '2025-03-20 09:47:28', '2025-03-20 09:47:28'),
(894, 'ch', 'full_time', '全日制', '2025-03-20 09:48:33', '2025-03-20 09:48:33'),
(895, 'ar', 'full_time_ch', 'دوام كامل', '2025-03-20 09:49:11', '2025-03-20 09:49:11'),
(896, 'ur', 'full_time_ch', 'مکمل_وقت_چ', '2025-03-20 09:49:11', '2025-03-20 09:49:11'),
(897, 'ch', 'full_time_ch', '全职', '2025-03-20 09:49:11', '2025-03-20 09:49:11'),
(898, 'ar', 'gender', 'جنس', '2025-03-20 09:49:55', '2025-03-20 09:49:55'),
(899, 'ur', 'gender', 'جنس', '2025-03-20 09:49:55', '2025-03-20 09:49:55'),
(900, 'ch', 'gender', '性别', '2025-03-20 09:49:55', '2025-03-20 09:49:55'),
(901, 'ar', 'heading_1', 'العنوان_1', '2025-03-20 09:50:32', '2025-03-20 09:50:32'),
(902, 'ur', 'heading_1', 'سرخی_1', '2025-03-20 09:50:32', '2025-03-20 09:50:32'),
(903, 'ch', 'heading_1', '标题_1', '2025-03-20 09:50:32', '2025-03-20 09:50:32'),
(904, 'ar', 'heading_2', 'العنوان_2', '2025-03-20 09:51:18', '2025-03-20 09:51:18'),
(905, 'ur', 'heading_2', 'سرخی_2', '2025-03-20 09:51:18', '2025-03-20 09:51:18'),
(906, 'ch', 'heading_2', '标题_2', '2025-03-20 09:51:18', '2025-03-20 09:51:18'),
(907, 'ch', 'hybrid', '杂交种', '2025-03-20 09:52:54', '2025-03-20 09:52:54'),
(908, 'ar', 'hybrid_ch', 'هجين_تش', '2025-03-20 09:54:09', '2025-03-20 09:54:09'),
(909, 'ur', 'hybrid_ch', 'ہائبرڈ_چ', '2025-03-20 09:54:09', '2025-03-20 09:54:09'),
(910, 'ch', 'hybrid_ch', '混合', '2025-03-20 09:54:09', '2025-03-20 09:54:09'),
(911, 'ar', 'id', 'وقت', '2025-03-20 09:54:54', '2025-03-20 09:54:54'),
(912, 'ur', 'id', 'وقت', '2025-03-20 09:54:54', '2025-03-20 09:54:54'),
(913, 'ch', 'id', '时间', '2025-03-20 09:54:54', '2025-03-20 09:54:54'),
(914, 'ar', 'image_1', 'الصورة_1', '2025-03-20 09:55:50', '2025-03-20 09:55:50'),
(915, 'ur', 'image_1', 'تصویر_1', '2025-03-20 09:55:50', '2025-03-20 09:55:50'),
(916, 'ch', 'image_1', '图片1', '2025-03-20 09:55:50', '2025-03-20 09:55:50'),
(917, 'ar', 'inactive', 'غير نشط', '2025-03-20 09:56:34', '2025-03-20 09:56:34'),
(918, 'ur', 'inactive', 'غیر فعال', '2025-03-20 09:56:34', '2025-03-20 09:56:34'),
(919, 'ch', 'inactive', '不活跃', '2025-03-20 09:56:34', '2025-03-20 09:56:34'),
(920, 'ar', 'key', 'مفتاح', '2025-03-20 09:57:19', '2025-03-20 09:57:19'),
(921, 'ur', 'key', 'چابی', '2025-03-20 09:57:19', '2025-03-20 09:57:19'),
(922, 'ch', 'key', '钥匙', '2025-03-20 09:57:19', '2025-03-20 09:57:19'),
(923, 'ar', 'language_added_successfully', 'تمت إضافة اللغة بنجاح.', '2025-03-20 09:58:28', '2025-03-20 09:58:28'),
(924, 'ur', 'language_added_successfully', 'زبان کامیابی کے ساتھ شامل کی گئی۔', '2025-03-20 09:58:28', '2025-03-20 09:58:28'),
(925, 'ch', 'language_added_successfully', '语言添加成功。', '2025-03-20 09:58:28', '2025-03-20 09:58:28'),
(926, 'ar', 'language_code', 'رمز اللغة', '2025-03-20 09:59:47', '2025-03-20 09:59:47'),
(927, 'ur', 'language_code', 'زبان_کوڈ', '2025-03-20 09:59:47', '2025-03-20 09:59:47'),
(928, 'ch', 'language_code', '语言代码', '2025-03-20 09:59:47', '2025-03-20 09:59:47'),
(929, 'ar', 'language_code_already_exists', 'رمز اللغة موجود بالفعل', '2025-03-20 10:00:31', '2025-03-20 10:00:31'),
(930, 'ur', 'language_code_already_exists', 'زبان کا کوڈ پہلے سے موجود ہے۔', '2025-03-20 10:00:31', '2025-03-20 10:00:31'),
(931, 'ch', 'language_code_already_exists', '语言代码已存在', '2025-03-20 10:00:31', '2025-03-20 10:00:31'),
(932, 'ar', 'language_flag', 'علم اللغة', '2025-03-20 10:01:06', '2025-03-20 10:01:06'),
(933, 'ur', 'language_flag', 'زبان_پرچم', '2025-03-20 10:01:06', '2025-03-20 10:01:06'),
(934, 'ch', 'language_flag', '语言标志', '2025-03-20 10:01:06', '2025-03-20 10:01:06'),
(935, 'ar', 'language_is_default', 'زبان_یہ_ڈیفالٹ ہے۔', '2025-03-20 10:02:10', '2025-03-20 10:02:10'),
(936, 'ur', 'language_is_default', 'زبان_یہ_ڈیفالٹ ہے۔', '2025-03-20 10:02:10', '2025-03-20 10:02:10'),
(937, 'ch', 'language_is_default', '语言为默认', '2025-03-20 10:02:10', '2025-03-20 10:02:10'),
(938, 'ar', 'language_is_rtl', 'اللغة هي RTL', '2025-03-20 10:06:40', '2025-03-20 10:06:40'),
(939, 'ur', 'language_is_rtl', 'زبان RTL ہے۔', '2025-03-20 10:06:40', '2025-03-20 10:06:40'),
(940, 'ch', 'language_is_rtl', '语言是 RTL', '2025-03-20 10:06:40', '2025-03-20 10:06:40'),
(941, 'ar', 'language_name', 'اسم اللغة', '2025-03-20 10:07:28', '2025-03-20 10:07:28'),
(942, 'ur', 'language_name', 'زبان کا_نام', '2025-03-20 10:07:28', '2025-03-20 10:07:28'),
(943, 'ch', 'language_name', '语言名称', '2025-03-20 10:07:28', '2025-03-20 10:07:28'),
(944, 'ar', 'language_name_already_exists', 'اسم اللغة موجود بالفعل', '2025-03-20 10:08:41', '2025-03-20 10:08:41'),
(945, 'ur', 'language_name_already_exists', 'زبان کا نام پہلے سے موجود ہے۔', '2025-03-20 10:08:41', '2025-03-20 10:08:41'),
(946, 'ch', 'language_name_already_exists', '语言名称已存在', '2025-03-20 10:08:41', '2025-03-20 10:08:41'),
(947, 'ar', 'language_update_successfully', 'تم تحديث اللغة بنجاح.', '2025-03-20 10:11:01', '2025-03-20 10:11:01'),
(948, 'ur', 'language_update_successfully', 'زبان کی تازہ کاری کامیابی سے ہوئی۔', '2025-03-20 10:11:01', '2025-03-20 10:11:01'),
(949, 'ch', 'language_update_successfully', '语言更新成功。', '2025-03-20 10:11:01', '2025-03-20 10:11:01'),
(950, 'ar', 'last', 'آخر', '2025-03-20 10:12:32', '2025-03-20 10:12:32'),
(951, 'ur', 'last', 'آخری', '2025-03-20 10:12:32', '2025-03-20 10:12:32'),
(952, 'ch', 'last', '最后的', '2025-03-20 10:12:32', '2025-03-20 10:12:32'),
(953, 'ch', 'last_month_rides', '上个月的行程', '2025-03-20 10:17:18', '2025-03-20 10:17:18'),
(954, 'ar', 'last_name', 'اسم العائلة', '2025-03-20 10:19:29', '2025-03-20 10:19:29'),
(955, 'ur', 'last_name', 'آخری_نام', '2025-03-20 10:19:29', '2025-03-20 10:19:29'),
(956, 'ch', 'last_name', '姓', '2025-03-20 10:19:29', '2025-03-20 10:19:29'),
(957, 'ar', 'location', 'موقع', '2025-03-20 10:22:08', '2025-03-20 10:22:08'),
(958, 'ur', 'location', 'مقام', '2025-03-20 10:22:08', '2025-03-20 10:22:08'),
(959, 'ch', 'location', '地点', '2025-03-20 10:22:08', '2025-03-20 10:22:08'),
(960, 'ar', 'login', 'تسجيل الدخول', '2025-03-20 10:23:21', '2025-03-20 10:23:21'),
(961, 'ur', 'login', 'لاگ ان', '2025-03-20 10:23:21', '2025-03-20 10:23:21'),
(962, 'ch', 'login', '登录', '2025-03-20 10:23:21', '2025-03-20 10:23:21'),
(963, 'ar', 'logout', 'تسجيل الخروج', '2025-03-20 10:24:19', '2025-03-20 10:24:19'),
(964, 'ur', 'logout', 'لاگ آؤٹ', '2025-03-20 10:24:19', '2025-03-20 10:24:19'),
(965, 'ch', 'logout', '登出', '2025-03-20 10:24:19', '2025-03-20 10:24:19'),
(966, 'ar', 'male', 'ذكر', '2025-03-20 10:24:54', '2025-03-20 10:24:54'),
(967, 'ur', 'male', 'مرد', '2025-03-20 10:24:54', '2025-03-20 10:24:54'),
(968, 'ch', 'male', '男性', '2025-03-20 10:24:54', '2025-03-20 10:24:54'),
(969, 'ar', 'module', 'الوحدة', '2025-03-20 10:26:26', '2025-03-20 10:26:26'),
(970, 'ur', 'module', 'ماڈیول', '2025-03-20 10:26:26', '2025-03-20 10:26:26'),
(971, 'ch', 'module', '模块', '2025-03-20 10:26:26', '2025-03-20 10:26:26'),
(972, 'ar', 'module_added_successfully', 'تمت إضافة الوحدة بنجاح.', '2025-03-20 10:27:20', '2025-03-20 10:27:20'),
(973, 'ur', 'module_added_successfully', 'ماڈیول کامیابی کے ساتھ شامل کر دیا گیا۔', '2025-03-20 10:27:20', '2025-03-20 10:27:20'),
(974, 'ch', 'module_added_successfully', '模块添加成功。', '2025-03-20 10:27:20', '2025-03-20 10:27:20'),
(975, 'ar', 'module_deleted_successfully', 'تم حذف الوحدة بنجاح.', '2025-03-20 10:28:23', '2025-03-20 10:28:23'),
(976, 'ur', 'module_deleted_successfully', 'ماڈیول کامیابی سے حذف ہو گیا۔', '2025-03-20 10:28:23', '2025-03-20 10:28:23'),
(977, 'ch', 'module_deleted_successfully', '模块已成功删除。', '2025-03-20 10:28:23', '2025-03-20 10:28:23'),
(978, 'ar', 'module_name', 'اسم الوحدة', '2025-03-20 10:29:14', '2025-03-20 10:29:14'),
(979, 'ur', 'module_name', 'ماڈیول_نام', '2025-03-20 10:29:14', '2025-03-20 10:29:14'),
(980, 'ch', 'module_name', '模块名称', '2025-03-20 10:29:14', '2025-03-20 10:29:14'),
(981, 'ar', 'name', 'اسم', '2025-03-20 10:30:17', '2025-03-20 10:30:17'),
(982, 'ur', 'name', 'نام', '2025-03-20 10:30:17', '2025-03-20 10:30:17'),
(983, 'ch', 'name', '姓名', '2025-03-20 10:30:17', '2025-03-20 10:30:17'),
(984, 'ar', 'new_password', 'كلمة المرور الجديدة', '2025-03-20 10:34:02', '2025-03-20 10:34:02'),
(985, 'ur', 'new_password', 'نیا_پاس ورڈ', '2025-03-20 10:34:02', '2025-03-20 10:34:02'),
(986, 'ch', 'new_password', '新密码', '2025-03-20 10:34:02', '2025-03-20 10:34:02'),
(987, 'ar', 'next', 'التالي', '2025-03-20 10:35:15', '2025-03-20 10:35:15'),
(988, 'ur', 'next', 'اگلا', '2025-03-20 10:35:15', '2025-03-20 10:35:15'),
(989, 'ch', 'next', '下一个', '2025-03-20 10:35:15', '2025-03-20 10:35:15'),
(990, 'ar', 'no', 'امرأة', '2025-03-20 10:36:12', '2025-03-20 10:36:12'),
(991, 'ur', 'no', 'امرأة', '2025-03-20 10:36:12', '2025-03-20 10:36:12'),
(992, 'ch', 'no', '女士', '2025-03-20 10:36:12', '2025-03-20 10:36:12'),
(993, 'ar', 'no_data_available', 'لا توجد بيانات متاحة', '2025-03-20 10:36:50', '2025-03-20 10:36:50'),
(994, 'ur', 'no_data_available', 'کوئی_ڈیٹا_دستیاب', '2025-03-20 10:36:50', '2025-03-20 10:36:50'),
(995, 'ch', 'no_data_available', '没有可用数据', '2025-03-20 10:36:50', '2025-03-20 10:36:50'),
(996, 'ar', 'no_matching_records_found', 'لم يتم العثور على سجلات مطابقة', '2025-03-20 10:38:12', '2025-03-20 10:38:12'),
(997, 'ur', 'no_matching_records_found', 'کوئی مماثل ریکارڈ نہیں ملا', '2025-03-20 10:38:12', '2025-03-20 10:38:12'),
(998, 'ch', 'no_matching_records_found', '未找到符合条件的记录', '2025-03-20 10:38:12', '2025-03-20 10:38:12'),
(999, 'ar', 'no_records_found', 'لم يتم العثور على أي سجلات', '2025-03-20 10:38:52', '2025-03-20 10:38:52'),
(1000, 'ur', 'no_records_found', 'کوئی ریکارڈ نہیں ملا', '2025-03-20 10:38:52', '2025-03-20 10:38:52'),
(1001, 'ch', 'no_records_found', '未找到任何记录', '2025-03-20 10:38:52', '2025-03-20 10:38:52'),
(1002, 'ar', 'of', 'ل', '2025-03-20 10:39:35', '2025-03-20 10:39:35'),
(1003, 'ur', 'of', 'کی', '2025-03-20 10:39:35', '2025-03-20 10:39:35'),
(1004, 'ch', 'of', '的', '2025-03-20 10:39:35', '2025-03-20 10:39:35'),
(1005, 'ar', 'order_number', 'رقم الطلب', '2025-03-20 10:40:25', '2025-03-20 10:40:25'),
(1006, 'ur', 'order_number', 'آرڈر_نمبر', '2025-03-20 10:40:25', '2025-03-20 10:40:25'),
(1007, 'ch', 'order_number', '订单号', '2025-03-20 10:40:25', '2025-03-20 10:40:25'),
(1008, 'ar', 'password', 'كلمة المرور', '2025-03-20 10:41:02', '2025-03-20 10:41:02'),
(1009, 'ur', 'password', 'پاس ورڈ', '2025-03-20 10:41:02', '2025-03-20 10:41:02'),
(1010, 'ch', 'password', '密码', '2025-03-20 10:41:02', '2025-03-20 10:41:02'),
(1011, 'ar', 'password_confirmation', 'تأكيد كلمة المرور', '2025-03-20 10:41:55', '2025-03-20 10:41:55'),
(1012, 'ur', 'password_confirmation', 'پاس ورڈ_تصدیق', '2025-03-20 10:41:55', '2025-03-20 10:41:55'),
(1013, 'ch', 'password_confirmation', '密码确认', '2025-03-20 10:41:55', '2025-03-20 10:41:55'),
(1014, 'ar', 'permission_added_successfully', 'تمت إضافة الإذن بنجاح.', '2025-03-20 10:43:52', '2025-03-20 10:43:52'),
(1015, 'ur', 'permission_added_successfully', 'اجازت کامیابی کے ساتھ شامل کر دی گئی۔', '2025-03-20 10:43:52', '2025-03-20 10:43:52'),
(1016, 'ch', 'permission_added_successfully', '权限添加成功。', '2025-03-20 10:43:52', '2025-03-20 10:43:52'),
(1017, 'ar', 'permission_deleted_successfully', 'تم حذف الإذن بنجاح.', '2025-03-20 10:44:39', '2025-03-20 10:44:39'),
(1018, 'ur', 'permission_deleted_successfully', 'اجازت کامیابی سے حذف ہو گئی۔', '2025-03-20 10:44:39', '2025-03-20 10:44:39'),
(1019, 'ch', 'permission_deleted_successfully', '权限删除成功。', '2025-03-20 10:44:39', '2025-03-20 10:44:39'),
(1020, 'ar', 'phone', 'هاتف', '2025-03-20 10:45:18', '2025-03-20 10:45:18'),
(1021, 'ur', 'phone', 'فون', '2025-03-20 10:45:18', '2025-03-20 10:45:18'),
(1022, 'ch', 'phone', '电话', '2025-03-20 10:45:18', '2025-03-20 10:45:18'),
(1023, 'ar', 'please_enter_a_valid_email_address', 'يرجى إدخال عنوان بريد إلكتروني صالح.', '2025-03-20 10:47:27', '2025-03-20 10:47:27'),
(1024, 'ur', 'please_enter_a_valid_email_address', 'براہ کرم ایک درست ای میل ایڈریس درج کریں۔', '2025-03-20 10:47:27', '2025-03-20 10:47:27'),
(1025, 'ch', 'please_enter_a_valid_email_address', '请输入有效的电子邮件地址。', '2025-03-20 10:47:27', '2025-03-20 10:47:27'),
(1026, 'ar', 'previous', 'سابق', '2025-03-20 10:49:37', '2025-03-20 10:49:37'),
(1027, 'ur', 'previous', 'پچھلا', '2025-03-20 10:49:37', '2025-03-20 10:49:37'),
(1028, 'ch', 'previous', '以前的', '2025-03-20 10:49:37', '2025-03-20 10:49:37'),
(1029, 'ar', 'processing', 'يعالج', '2025-03-20 10:50:48', '2025-03-20 10:50:48'),
(1030, 'ur', 'processing', 'پروسیسنگ', '2025-03-20 10:50:48', '2025-03-20 10:50:48'),
(1031, 'ch', 'processing', '加工', '2025-03-20 10:50:48', '2025-03-20 10:50:48'),
(1032, 'ar', 'profile_edit_successfully', 'تم تعديل الملف الشخصي بنجاح', '2025-03-20 10:53:21', '2025-03-20 10:53:21'),
(1033, 'ur', 'profile_edit_successfully', 'پروفائل میں کامیابی کے ساتھ ترمیم ہو گئی۔', '2025-03-20 10:53:21', '2025-03-20 10:53:21'),
(1034, 'ch', 'profile_edit_successfully', '个人资料编辑成功', '2025-03-20 10:53:21', '2025-03-20 10:53:21'),
(1035, 'ar', 'profile_image', 'صورة الملف الشخصي', '2025-03-20 10:54:33', '2025-03-20 10:54:33'),
(1036, 'ur', 'profile_image', 'پروفائل تصویر', '2025-03-20 10:54:33', '2025-03-20 10:54:33'),
(1037, 'ch', 'profile_image', '个人资料图片', '2025-03-20 10:54:33', '2025-03-20 10:54:33'),
(1038, 'ar', 'question', 'سؤال', '2025-03-20 10:58:11', '2025-03-20 10:58:11'),
(1039, 'ur', 'question', 'سوال', '2025-03-20 10:58:11', '2025-03-20 10:58:11'),
(1040, 'ch', 'question', '问题', '2025-03-20 10:58:11', '2025-03-20 10:58:11'),
(1041, 'ch', 'remote', '偏僻的', '2025-03-20 11:10:17', '2025-03-20 11:10:17'),
(1042, 'ar', 'remote_ch', 'قناة بعيدة', '2025-03-20 11:13:01', '2025-03-20 11:13:01'),
(1043, 'ur', 'remote_ch', 'ریموٹ کنٹرول_ch', '2025-03-20 11:13:01', '2025-03-20 11:13:01'),
(1044, 'ch', 'remote_ch', '遥控_频道', '2025-03-20 11:13:01', '2025-03-20 11:13:01'),
(1045, 'ar', 'role_added_successfully', 'تمت إضافة الدور بنجاح.', '2025-03-20 11:14:19', '2025-03-20 11:14:19'),
(1046, 'ur', 'role_added_successfully', 'کردار کامیابی کے ساتھ شامل کیا گیا۔', '2025-03-20 11:14:19', '2025-03-20 11:14:19'),
(1047, 'ch', 'role_added_successfully', '角色添加成功。', '2025-03-20 11:14:19', '2025-03-20 11:14:19'),
(1048, 'ar', 'role_deleted_successfully', 'تم حذف الدور بنجاح.', '2025-03-20 11:14:56', '2025-03-20 11:14:56'),
(1049, 'ur', 'role_deleted_successfully', 'تم حذف الدور بنجاح.', '2025-03-20 11:14:56', '2025-03-20 11:14:56'),
(1050, 'ch', 'role_deleted_successfully', '角色删除成功。', '2025-03-20 11:14:56', '2025-03-20 11:14:56'),
(1051, 'ar', 'role_updated_successfully', 'تم تحديث الدور بنجاح.', '2025-03-20 11:15:45', '2025-03-20 11:15:45'),
(1052, 'ur', 'role_updated_successfully', 'کردار کو کامیابی کے ساتھ اپ ڈیٹ کر دیا گیا۔', '2025-03-20 11:15:45', '2025-03-20 11:15:45'),
(1053, 'ch', 'role_updated_successfully', '角色更新成功。', '2025-03-20 11:15:45', '2025-03-20 11:15:45'),
(1054, 'ar', 'enter_title_7', 'أدخل العنوان 7', '2025-03-20 11:17:11', '2025-03-20 11:17:11'),
(1055, 'ur', 'enter_title_7', 'درج_عنوان_7', '2025-03-20 11:17:11', '2025-03-20 11:17:11'),
(1056, 'ch', 'enter_title_7', '输入标题_7', '2025-03-20 11:17:11', '2025-03-20 11:17:11'),
(1057, 'ar', 'enter_title_6', 'أدخل العنوان 6', '2025-03-20 11:18:09', '2025-03-20 11:18:09'),
(1058, 'ur', 'enter_title_6', 'درج_عنوان_6', '2025-03-20 11:18:09', '2025-03-20 11:18:09'),
(1059, 'ch', 'enter_title_6', '输入标题_6', '2025-03-20 11:18:09', '2025-03-20 11:18:09'),
(1060, 'ar', 'enter_title_5', 'أدخل العنوان 5', '2025-03-20 11:18:55', '2025-03-20 11:18:55'),
(1061, 'ur', 'enter_title_5', 'درج_عنوان_5', '2025-03-20 11:18:55', '2025-03-20 11:18:55'),
(1062, 'ch', 'enter_title_5', '输入标题_5', '2025-03-20 11:18:55', '2025-03-20 11:18:55'),
(1063, 'ar', 'enter_title_4', 'أدخل العنوان 4', '2025-03-20 11:20:05', '2025-03-20 11:20:05'),
(1064, 'ur', 'enter_title_4', 'درج_عنوان_4', '2025-03-20 11:20:05', '2025-03-20 11:20:05'),
(1065, 'ch', 'enter_title_4', '输入标题_4', '2025-03-20 11:20:05', '2025-03-20 11:20:05'),
(1066, 'ar', 'enter_title_3', 'أدخل العنوان 3', '2025-03-20 11:20:49', '2025-03-20 11:20:49'),
(1067, 'ur', 'enter_title_3', 'درج_عنوان_3', '2025-03-20 11:20:49', '2025-03-20 11:20:49'),
(1068, 'ch', 'enter_title_3', '输入标题_3', '2025-03-20 11:20:49', '2025-03-20 11:20:49'),
(1069, 'ar', 'enter_title_2', 'أدخل العنوان 2', '2025-03-20 11:21:27', '2025-03-20 11:21:27'),
(1070, 'ur', 'enter_title_2', 'درج_عنوان_2', '2025-03-20 11:21:27', '2025-03-20 11:21:27'),
(1071, 'ch', 'enter_title_2', '输入标题_2', '2025-03-20 11:21:27', '2025-03-20 11:21:27'),
(1072, 'ar', 'enter_title_1', 'أدخل العنوان 1', '2025-03-20 11:21:57', '2025-03-20 11:21:57'),
(1073, 'ur', 'enter_title_1', 'درج_عنوان_1', '2025-03-20 11:21:57', '2025-03-20 11:21:57'),
(1074, 'ch', 'enter_title_1', '输入标题_1', '2025-03-20 11:21:58', '2025-03-20 11:21:58'),
(1075, 'ar', 'enter_title', 'أدخل العنوان', '2025-03-20 11:22:39', '2025-03-20 11:22:39'),
(1076, 'ur', 'enter_title', 'درج_عنوان', '2025-03-20 11:22:39', '2025-03-20 11:22:39'),
(1077, 'ch', 'enter_title', '输入标题', '2025-03-20 11:22:39', '2025-03-20 11:22:39'),
(1078, 'ar', 'enter_text_for', 'أدخل النص لـ', '2025-03-20 11:23:35', '2025-03-20 11:23:35'),
(1079, 'ur', 'enter_text_for', 'کے لیے متن درج کریں۔', '2025-03-20 11:23:35', '2025-03-20 11:23:35'),
(1080, 'ch', 'enter_text_for', 'أدخل النص لـ', '2025-03-20 11:23:35', '2025-03-20 11:23:35'),
(1081, 'ar', 'enter_text_field_3', 'أدخل حقل النص رقم 3', '2025-03-20 11:28:05', '2025-03-20 11:28:05'),
(1082, 'ur', 'enter_text_field_3', 'ٹیکسٹ فیلڈ 3 درج کریں۔', '2025-03-20 11:28:05', '2025-03-20 11:28:05'),
(1083, 'ch', 'enter_text_field_3', '输入文本字段3', '2025-03-20 11:28:05', '2025-03-20 11:28:05'),
(1084, 'ar', 'enter_text_field_2', 'أدخل حقل النص رقم 2', '2025-03-20 11:28:45', '2025-03-20 11:28:45'),
(1085, 'ur', 'enter_text_field_2', 'ٹیکسٹ فیلڈ 2 درج کریں۔', '2025-03-20 11:28:45', '2025-03-20 11:28:45'),
(1086, 'ch', 'enter_text_field_2', '输入文本字段2', '2025-03-20 11:28:45', '2025-03-20 11:28:45'),
(1087, 'ar', 'enter_text_field_1', 'أدخل حقل النص رقم 1', '2025-03-20 11:29:29', '2025-03-20 11:29:29'),
(1088, 'ur', 'enter_text_field_1', 'ٹیکسٹ فیلڈ 1 درج کریں۔', '2025-03-20 11:29:29', '2025-03-20 11:29:29'),
(1089, 'ch', 'enter_text_field_1', '输入文本字段1', '2025-03-20 11:29:29', '2025-03-20 11:29:29'),
(1090, 'ar', 'enter_text_3_description', 'أدخل النص 3 الوصف', '2025-03-20 11:31:16', '2025-03-20 11:31:16'),
(1091, 'ur', 'enter_text_3_description', 'درج کریں_ متن _3_ تفصیل', '2025-03-20 11:31:16', '2025-03-20 11:31:16'),
(1092, 'ch', 'enter_text_3_description', '输入文字 _3_描述', '2025-03-20 11:31:16', '2025-03-20 11:31:16'),
(1093, 'ar', 'enter_text_3', '输入文本3', '2025-03-20 12:34:54', '2025-03-20 12:34:54'),
(1094, 'ur', 'enter_text_3', '_ متن _ 3 درج کریں۔', '2025-03-20 12:34:54', '2025-03-20 12:34:54'),
(1095, 'ch', 'enter_text_3', '输入文本3', '2025-03-20 12:34:54', '2025-03-20 12:34:54'),
(1096, 'ar', 'enter_text_2_description', 'أدخل النص 2 الوصف', '2025-03-20 12:36:07', '2025-03-20 12:36:07'),
(1097, 'ur', 'enter_text_2_description', 'درج کریں_ متن _2_ تفصیل', '2025-03-20 12:36:07', '2025-03-20 12:36:07'),
(1098, 'ch', 'enter_text_2_description', '输入文字 _2_描述', '2025-03-20 12:36:07', '2025-03-20 12:36:07'),
(1099, 'ar', 'enter_text_2', 'أدخل النص 2', '2025-03-20 12:37:10', '2025-03-20 12:37:10'),
(1100, 'ur', 'enter_text_2', '_ متن _ 2 درج کریں۔', '2025-03-20 12:37:10', '2025-03-20 12:37:10'),
(1101, 'ch', 'enter_text_2', '输入文本2', '2025-03-20 12:37:10', '2025-03-20 12:37:10'),
(1102, 'ar', 'enter_text_1', 'أدخل النص 1', '2025-03-20 12:38:08', '2025-03-20 12:38:08'),
(1103, 'ur', 'enter_text_1', '_ متن _ 1 درج کریں۔', '2025-03-20 12:38:08', '2025-03-20 12:38:08'),
(1104, 'ch', 'enter_text_1', '输入文本1', '2025-03-20 12:38:08', '2025-03-20 12:38:08'),
(1105, 'ar', 'enter_text_1_description', 'أدخل وصف النص الأول', '2025-03-20 12:40:02', '2025-03-20 12:40:02'),
(1106, 'ur', 'enter_text_1_description', 'درج کریں_ متن _ 1 _ تفصیل', '2025-03-20 12:40:02', '2025-03-20 12:40:02'),
(1107, 'ch', 'enter_text_1_description', '输入文本 1 的描述', '2025-03-20 12:40:02', '2025-03-20 12:40:02'),
(1108, 'ar', 'enter_service', 'أدخل الخدمة', '2025-03-20 12:40:51', '2025-03-20 12:40:51'),
(1109, 'ur', 'enter_service', 'انٹر_سروس', '2025-03-20 12:40:51', '2025-03-20 12:40:51'),
(1110, 'ch', 'enter_service', '进入服务', '2025-03-20 12:40:51', '2025-03-20 12:40:51'),
(1111, 'ar', 'enter_question', 'أدخل السؤال', '2025-03-20 12:41:47', '2025-03-20 12:41:47'),
(1112, 'ur', 'enter_question', 'سوال درج کریں۔', '2025-03-20 12:41:47', '2025-03-20 12:41:47'),
(1113, 'ch', 'enter_question', '输入问题', '2025-03-20 12:41:47', '2025-03-20 12:41:47'),
(1114, 'ar', 'enter_order', 'أدخل الطلب', '2025-03-20 12:42:31', '2025-03-20 12:42:31'),
(1115, 'ur', 'enter_order', 'داخل_آرڈر', '2025-03-20 12:42:31', '2025-03-20 12:42:31'),
(1116, 'ch', 'enter_order', '输入订单', '2025-03-20 12:42:31', '2025-03-20 12:42:31'),
(1117, 'ar', 'enter_location', 'أدخل الموقع', '2025-03-20 12:43:33', '2025-03-20 12:43:33'),
(1118, 'ur', 'enter_location', '_ مقام درج کریں۔', '2025-03-20 12:43:33', '2025-03-20 12:43:33'),
(1119, 'ch', 'enter_location', '输入位置', '2025-03-20 12:43:33', '2025-03-20 12:43:33'),
(1120, 'ar', 'enter_language_order', 'أدخل ترتيب اللغة', '2025-03-20 12:44:23', '2025-03-20 12:44:23'),
(1121, 'ur', 'enter_language_order', 'درج_زبان_ترتیب', '2025-03-20 12:44:23', '2025-03-20 12:44:23'),
(1122, 'ch', 'enter_language_order', '输入语言顺序', '2025-03-20 12:44:23', '2025-03-20 12:44:23'),
(1123, 'ar', 'enter_key', 'مفتاح الإدخال', '2025-03-20 12:45:16', '2025-03-20 12:45:16'),
(1124, 'ur', 'enter_key', '_ کلید درج کریں۔', '2025-03-20 12:45:16', '2025-03-20 12:45:16'),
(1125, 'ch', 'enter_key', '输入键', '2025-03-20 12:45:16', '2025-03-20 12:45:16'),
(1126, 'ar', 'enter_heading_2', 'أدخل العنوان 2', '2025-03-20 12:46:10', '2025-03-20 12:46:10'),
(1127, 'ur', 'enter_heading_2', 'انٹر_ ہیڈنگ _2', '2025-03-20 12:46:10', '2025-03-20 12:46:10'),
(1128, 'ch', 'enter_heading_2', '输入标题 2', '2025-03-20 12:46:10', '2025-03-20 12:46:10'),
(1129, 'ar', 'enter_heading_1', 'أدخل العنوان 1', '2025-03-20 12:46:42', '2025-03-20 12:46:42'),
(1130, 'ur', 'enter_heading_1', 'انٹر_ ہیڈنگ _1', '2025-03-20 12:46:42', '2025-03-20 12:46:42'),
(1131, 'ch', 'enter_heading_1', '输入标题 1', '2025-03-20 12:46:42', '2025-03-20 12:46:42'),
(1132, 'ar', 'enter_description_16', 'أدخل الوصف رقم 16', '2025-03-20 12:47:39', '2025-03-20 12:47:39'),
(1133, 'ur', 'enter_description_16', 'درج_تفصیل_16', '2025-03-20 12:47:39', '2025-03-20 12:47:39'),
(1134, 'ch', 'enter_description_16', '输入说明_16', '2025-03-20 12:47:39', '2025-03-20 12:47:39'),
(1135, 'ar', 'enter_description_15', 'أدخل الوصف رقم 15', '2025-03-20 12:48:15', '2025-03-20 12:48:15'),
(1136, 'ur', 'enter_description_15', 'درج_تفصیل_15', '2025-03-20 12:48:15', '2025-03-20 12:48:15'),
(1137, 'ch', 'enter_description_15', '输入说明_15', '2025-03-20 12:48:15', '2025-03-20 12:48:15'),
(1138, 'ar', 'enter_description_14', 'أدخل الوصف رقم 14', '2025-03-20 12:48:54', '2025-03-20 12:48:54'),
(1139, 'ur', 'enter_description_14', 'درج_تفصیل_14', '2025-03-20 12:48:54', '2025-03-20 12:48:54'),
(1140, 'ch', 'enter_description_14', '输入说明_14', '2025-03-20 12:48:54', '2025-03-20 12:48:54'),
(1141, 'ar', 'enter_description_13', 'أدخل الوصف رقم 13', '2025-03-20 12:49:44', '2025-03-20 12:49:44'),
(1142, 'ur', 'enter_description_13', 'درج_تفصیل_13', '2025-03-20 12:49:44', '2025-03-20 12:49:44'),
(1143, 'ch', 'enter_description_13', '输入说明_13', '2025-03-20 12:49:44', '2025-03-20 12:49:44'),
(1144, 'ar', 'enter_description_12', 'أدخل الوصف رقم 12', '2025-03-20 12:51:08', '2025-03-20 12:51:08'),
(1145, 'ur', 'enter_description_12', 'درج_تفصیل_12', '2025-03-20 12:51:08', '2025-03-20 12:51:08'),
(1146, 'ch', 'enter_description_12', '输入说明_12', '2025-03-20 12:51:08', '2025-03-20 12:51:08'),
(1147, 'ar', 'enter_description_11', 'أدخل الوصف رقم 11', '2025-03-20 12:52:11', '2025-03-20 12:52:11'),
(1148, 'ur', 'enter_description_11', 'درج_تفصیل_11', '2025-03-20 12:52:11', '2025-03-20 12:52:11'),
(1149, 'ch', 'enter_description_11', '输入说明_11', '2025-03-20 12:52:11', '2025-03-20 12:52:11'),
(1150, 'ar', 'enter_description_10', 'أدخل الوصف رقم 10', '2025-03-20 12:54:36', '2025-03-20 12:54:36'),
(1151, 'ur', 'enter_description_10', 'درج_تفصیل_10', '2025-03-20 12:54:36', '2025-03-20 12:54:36'),
(1152, 'ch', 'enter_description_10', '输入说明_10', '2025-03-20 12:54:36', '2025-03-20 12:54:36'),
(1153, 'ar', 'enter_description_9', 'أدخل الوصف رقم 9', '2025-03-20 13:00:10', '2025-03-20 13:00:10'),
(1154, 'ur', 'enter_description_9', 'درج_تفصیل_9', '2025-03-20 13:00:10', '2025-03-20 13:00:10'),
(1155, 'ch', 'enter_description_9', '输入说明_9', '2025-03-20 13:00:10', '2025-03-20 13:00:10'),
(1156, 'ar', 'enter_description_8', 'أدخل الوصف رقم 8', '2025-03-20 13:05:37', '2025-03-20 13:05:37'),
(1157, 'ur', 'enter_description_8', 'درج_تفصیل_8', '2025-03-20 13:05:37', '2025-03-20 13:05:37'),
(1158, 'ch', 'enter_description_8', '输入说明_8', '2025-03-20 13:05:37', '2025-03-20 13:05:37'),
(1159, 'ar', 'enter_description_7', 'أدخل الوصف رقم 7', '2025-03-20 13:07:04', '2025-03-20 13:07:04'),
(1160, 'ur', 'enter_description_7', 'درج_تفصیل_7', '2025-03-20 13:07:04', '2025-03-20 13:07:04'),
(1161, 'ch', 'enter_description_7', '输入说明_7', '2025-03-20 13:07:04', '2025-03-20 13:07:04'),
(1162, 'ar', 'enter_description_6', 'أدخل الوصف رقم 6', '2025-03-20 13:07:46', '2025-03-20 13:07:46'),
(1163, 'ur', 'enter_description_6', 'درج_تفصیل_6', '2025-03-20 13:07:46', '2025-03-20 13:07:46'),
(1164, 'ch', 'enter_description_6', '输入说明_6', '2025-03-20 13:07:46', '2025-03-20 13:07:46'),
(1165, 'ar', 'enter_description_5', 'أدخل الوصف رقم 5', '2025-03-20 13:09:33', '2025-03-20 13:09:33'),
(1166, 'ur', 'enter_description_5', 'درج_تفصیل_5', '2025-03-20 13:09:33', '2025-03-20 13:09:33'),
(1167, 'ch', 'enter_description_5', '输入说明_5', '2025-03-20 13:09:33', '2025-03-20 13:09:33'),
(1168, 'ar', 'enter_description_4', 'أدخل الوصف رقم 4', '2025-03-20 13:14:16', '2025-03-20 13:14:16'),
(1169, 'ur', 'enter_description_4', 'درج_تفصیل_4', '2025-03-20 13:14:16', '2025-03-20 13:14:16'),
(1170, 'ch', 'enter_description_4', '输入说明_4', '2025-03-20 13:14:16', '2025-03-20 13:14:16'),
(1171, 'ar', 'enter_description_3', 'أدخل الوصف رقم 3', '2025-03-20 13:14:51', '2025-03-20 13:14:51'),
(1172, 'ur', 'enter_description_3', 'درج_تفصیل_3', '2025-03-20 13:14:51', '2025-03-20 13:14:51'),
(1173, 'ch', 'enter_description_3', '输入说明_3', '2025-03-20 13:14:51', '2025-03-20 13:14:51'),
(1174, 'ar', 'enter_description_2', 'أدخل الوصف رقم 2', '2025-03-20 13:15:38', '2025-03-20 13:15:38'),
(1175, 'ur', 'enter_description_2', 'درج_تفصیل_2', '2025-03-20 13:15:38', '2025-03-20 13:15:38'),
(1176, 'ch', 'enter_description_2', '输入说明_2', '2025-03-20 13:15:38', '2025-03-20 13:15:38'),
(1177, 'en', '', '偏僻的', '2025-03-20 13:21:46', '2025-03-20 13:21:46'),
(1178, 'en', '_ch', '_ch', '2025-03-20 13:21:56', '2025-03-20 13:21:56');
INSERT INTO `translations` (`id`, `lang`, `lang_key`, `lang_value`, `created_at`, `updated_at`) VALUES
(1179, 'ar', 'enter_description_1', 'أدخل الوصف رقم 1', '2025-03-20 13:39:20', '2025-03-20 13:39:20'),
(1180, 'ur', 'enter_description_1', 'درج_تفصیل_1', '2025-03-20 13:39:20', '2025-03-20 13:39:20'),
(1181, 'ch', 'enter_description_1', '输入说明_1', '2025-03-20 13:39:20', '2025-03-20 13:39:20'),
(1182, 'ar', 'enter_description', 'أدخل الوصف رقم', '2025-03-20 13:43:27', '2025-03-20 13:43:27'),
(1183, 'ur', 'enter_description', 'درج_تفصیل', '2025-03-20 13:43:27', '2025-03-20 13:43:27'),
(1184, 'ch', 'enter_description', '输入说明', '2025-03-20 13:43:27', '2025-03-20 13:43:27'),
(1185, 'ar', 'enter_content', 'أدخل المحتوى', '2025-03-20 13:45:44', '2025-03-20 13:45:44'),
(1186, 'ur', 'enter_content', 'مواد درج کریں۔', '2025-03-20 13:45:44', '2025-03-20 13:45:44'),
(1187, 'ch', 'enter_content', '输入内容', '2025-03-20 13:45:44', '2025-03-20 13:45:44'),
(1188, 'ar', 'enter_career', 'دخول_الوظيفة', '2025-03-20 13:46:24', '2025-03-20 13:46:24'),
(1189, 'ur', 'enter_career', 'انٹر_کیرئیر', '2025-03-20 13:46:24', '2025-03-20 13:46:24'),
(1190, 'ch', 'enter_career', '进入职业生涯', '2025-03-20 13:46:24', '2025-03-20 13:46:24'),
(1191, 'ar', 'enter_answer', 'أدخل الإجابة', '2025-03-20 13:48:10', '2025-03-20 13:48:10'),
(1192, 'ur', 'enter_answer', 'جواب درج کریں۔', '2025-03-20 13:48:10', '2025-03-20 13:48:10'),
(1193, 'ch', 'enter_answer', '输入答案', '2025-03-20 13:48:10', '2025-03-20 13:48:10'),
(1194, 'ar', 'en', 'أنا', '2025-03-20 13:49:53', '2025-03-20 13:49:53'),
(1195, 'ur', 'en', 'میں', '2025-03-20 13:49:53', '2025-03-20 13:49:53'),
(1196, 'ch', 'en', '我', '2025-03-20 13:49:53', '2025-03-20 13:49:53'),
(1197, 'ar', 'email', 'بريد إلكتروني', '2025-03-20 13:50:35', '2025-03-20 13:50:35'),
(1198, 'ur', 'email', 'ای میل', '2025-03-20 13:50:35', '2025-03-20 13:50:35'),
(1199, 'ch', 'email', '电子邮件', '2025-03-20 13:50:35', '2025-03-20 13:50:35'),
(1200, 'ar', 'edit_vehicle', 'تعديل_المركبة', '2025-03-20 13:51:26', '2025-03-20 13:51:26'),
(1201, 'ur', 'edit_vehicle', 'ترمیم_وہیکل', '2025-03-20 13:51:26', '2025-03-20 13:51:26'),
(1202, 'ch', 'edit_vehicle', '编辑车辆', '2025-03-20 13:51:26', '2025-03-20 13:51:26'),
(1203, 'ar', 'edit_sub_admin', 'تعديل المشرف الفرعي', '2025-03-20 13:52:11', '2025-03-20 13:52:11'),
(1204, 'ur', 'edit_sub_admin', 'سب ایڈمن میں ترمیم کریں۔', '2025-03-20 13:52:11', '2025-03-20 13:52:11'),
(1205, 'ch', 'edit_sub_admin', '编辑子管理员', '2025-03-20 13:52:11', '2025-03-20 13:52:11'),
(1206, 'ar', 'edit_service', 'خدمة التحرير', '2025-03-20 13:52:51', '2025-03-20 13:52:51'),
(1207, 'ur', 'edit_service', 'ایڈٹ_سروس', '2025-03-20 13:52:51', '2025-03-20 13:52:51'),
(1208, 'ch', 'edit_service', '编辑_服务', '2025-03-20 13:52:51', '2025-03-20 13:52:51'),
(1209, 'ar', 'edit_role', 'تعديل الدور', '2025-03-20 13:53:35', '2025-03-20 13:53:35'),
(1210, 'ur', 'edit_role', 'ترمیم_کردار', '2025-03-20 13:53:35', '2025-03-20 13:53:35'),
(1211, 'ch', 'edit_role', '编辑角色', '2025-03-20 13:53:35', '2025-03-20 13:53:35'),
(1212, 'ar', 'edit_profile', 'تعديل الملف الشخصي', '2025-03-20 13:54:38', '2025-03-20 13:54:38'),
(1213, 'ur', 'edit_profile', 'پروفائل میں ترمیم کریں۔', '2025-03-20 13:54:38', '2025-03-20 13:54:38'),
(1214, 'ch', 'edit_profile', '編輯資料', '2025-03-20 13:54:38', '2025-03-20 13:54:38'),
(1215, 'ar', 'edit_language_key', 'تحرير مفتاح اللغة', '2025-03-20 13:55:51', '2025-03-20 13:55:51'),
(1216, 'ur', 'edit_language_key', 'زبان کی کلید میں ترمیم کریں۔', '2025-03-20 13:55:51', '2025-03-20 13:55:51'),
(1217, 'ch', 'edit_language_key', '编辑语言键', '2025-03-20 13:55:51', '2025-03-20 13:55:51'),
(1218, 'ar', 'edit_language', 'تعديل اللغة', '2025-03-20 13:56:55', '2025-03-20 13:56:55'),
(1219, 'ur', 'edit_language', 'ترمیم کریں _ زبان', '2025-03-20 13:56:55', '2025-03-20 13:56:55'),
(1220, 'ch', 'edit_language', '编辑语言', '2025-03-20 13:56:55', '2025-03-20 13:56:55'),
(1221, 'ar', 'edit_category', 'تعديل الفئة', '2025-03-20 13:57:56', '2025-03-20 13:57:56'),
(1222, 'ur', 'edit_category', 'زمرہ میں ترمیم کریں', '2025-03-20 13:57:56', '2025-03-20 13:57:56'),
(1223, 'ch', 'edit_category', '編輯類別', '2025-03-20 13:57:56', '2025-03-20 13:57:56'),
(1224, 'ar', 'edit_career', 'تعديل_المهنة', '2025-03-20 13:58:43', '2025-03-20 13:58:43'),
(1225, 'ur', 'edit_career', 'ایڈیٹ_کیرئیر', '2025-03-20 13:58:43', '2025-03-20 13:58:43'),
(1226, 'ch', 'edit_career', '编辑职业', '2025-03-20 13:58:43', '2025-03-20 13:58:43'),
(1227, 'ar', 'edit', 'يحرر', '2025-03-20 14:00:06', '2025-03-20 14:00:06'),
(1228, 'ur', 'edit', 'ترمیم کریں', '2025-03-20 14:00:06', '2025-03-20 14:00:06'),
(1229, 'ch', 'edit', '编辑', '2025-03-20 14:00:06', '2025-03-20 14:00:06'),
(1230, 'ar', 'description_16', 'الوصف_16', '2025-03-20 14:01:11', '2025-03-20 14:01:11'),
(1231, 'ur', 'description_16', 'وضاحت_16', '2025-03-20 14:01:11', '2025-03-20 14:01:11'),
(1232, 'ch', 'description_16', '描述_16', '2025-03-20 14:01:11', '2025-03-20 14:01:11'),
(1233, 'ar', 'description_15', 'الوصف_15', '2025-03-20 14:02:00', '2025-03-20 14:03:48'),
(1234, 'ur', 'description_15', 'وضاحت_16', '2025-03-20 14:02:00', '2025-03-20 14:03:48'),
(1235, 'ch', 'description_15', '描述_15', '2025-03-20 14:02:00', '2025-03-20 14:02:00'),
(1236, 'ar', 'description_14', 'الوصف_14', '2025-03-20 14:03:07', '2025-03-20 14:03:07'),
(1237, 'ur', 'description_14', 'وضاحت_14', '2025-03-20 14:03:07', '2025-03-20 14:03:07'),
(1238, 'ch', 'description_14', '描述_14', '2025-03-20 14:03:07', '2025-03-20 14:03:07'),
(1239, 'ar', 'description_13', 'الوصف_13', '2025-03-20 14:04:32', '2025-03-20 14:04:32'),
(1240, 'ur', 'description_13', 'وضاحت_13', '2025-03-20 14:04:32', '2025-03-20 14:04:32'),
(1241, 'ch', 'description_13', '描述_13', '2025-03-20 14:04:32', '2025-03-20 14:04:32'),
(1242, 'ar', 'description_12', 'الوصف_12', '2025-03-20 14:05:04', '2025-03-20 14:05:04'),
(1243, 'ur', 'description_12', 'وضاحت_12', '2025-03-20 14:05:04', '2025-03-20 14:05:04'),
(1244, 'ch', 'description_12', '描述_12', '2025-03-20 14:05:04', '2025-03-20 14:05:04'),
(1245, 'ar', 'description_11', 'الوصف_11', '2025-03-20 14:05:40', '2025-03-20 14:05:40'),
(1246, 'ur', 'description_11', 'وضاحت_11', '2025-03-20 14:05:40', '2025-03-20 14:05:40'),
(1247, 'ch', 'description_11', '描述_11', '2025-03-20 14:05:40', '2025-03-20 14:05:40'),
(1248, 'ar', 'description_10', 'الوصف_10', '2025-03-20 14:06:18', '2025-03-20 14:06:18'),
(1249, 'ur', 'description_10', 'وضاحت_10', '2025-03-20 14:06:18', '2025-03-20 14:06:18'),
(1250, 'ch', 'description_10', '描述_10', '2025-03-20 14:06:18', '2025-03-20 14:06:18'),
(1251, 'ar', 'description_9', 'الوصف_9', '2025-03-20 14:06:56', '2025-03-20 14:06:56'),
(1252, 'ur', 'description_9', 'وضاحت_9', '2025-03-20 14:06:56', '2025-03-20 14:06:56'),
(1253, 'ch', 'description_9', '描述_9', '2025-03-20 14:06:56', '2025-03-20 14:06:56'),
(1254, 'ar', 'description_8', 'الوصف_8', '2025-03-20 14:07:32', '2025-03-20 14:07:32'),
(1255, 'ur', 'description_8', 'وضاحت_8', '2025-03-20 14:07:32', '2025-03-20 14:07:32'),
(1256, 'ch', 'description_8', '描述_8', '2025-03-20 14:07:32', '2025-03-20 14:07:32'),
(1257, 'ar', 'description_7', 'الوصف_7', '2025-03-20 14:08:21', '2025-03-20 14:08:21'),
(1258, 'ur', 'description_7', 'وضاحت_7', '2025-03-20 14:08:21', '2025-03-20 14:08:21'),
(1259, 'ch', 'description_7', '描述_7', '2025-03-20 14:08:21', '2025-03-20 14:08:21'),
(1260, 'ar', 'description_6', 'الوصف_6', '2025-03-20 14:08:59', '2025-03-20 14:08:59'),
(1261, 'ur', 'description_6', 'وضاحت_6', '2025-03-20 14:08:59', '2025-03-20 14:08:59'),
(1262, 'ch', 'description_6', '描述_6', '2025-03-20 14:08:59', '2025-03-20 14:08:59'),
(1263, 'ar', 'description_5', 'الوصف_5', '2025-03-20 14:09:31', '2025-03-20 14:09:31'),
(1264, 'ur', 'description_5', 'وضاحت_5', '2025-03-20 14:09:31', '2025-03-20 14:09:31'),
(1265, 'ch', 'description_5', '描述_5', '2025-03-20 14:09:31', '2025-03-20 14:09:31'),
(1266, 'ar', 'description_4', 'الوصف_4', '2025-03-20 14:10:15', '2025-03-20 14:10:15'),
(1267, 'ur', 'description_4', 'وضاحت_4', '2025-03-20 14:10:15', '2025-03-20 14:10:15'),
(1268, 'ch', 'description_4', '描述_4', '2025-03-20 14:10:15', '2025-03-20 14:10:15'),
(1269, 'ar', 'description_3', 'الوصف_3', '2025-03-20 14:10:59', '2025-03-20 14:10:59'),
(1270, 'ur', 'description_3', 'وضاحت_3', '2025-03-20 14:10:59', '2025-03-20 14:10:59'),
(1271, 'ch', 'description_3', '描述_3', '2025-03-20 14:10:59', '2025-03-20 14:10:59'),
(1272, 'ar', 'description_2', 'الوصف_2', '2025-03-20 14:11:31', '2025-03-20 14:11:31'),
(1273, 'ur', 'description_2', 'وضاحت_2', '2025-03-20 14:11:31', '2025-03-20 14:11:31'),
(1274, 'ch', 'description_2', '描述_2', '2025-03-20 14:11:31', '2025-03-20 14:11:31'),
(1275, 'ar', 'description_1', 'الوصف_1', '2025-03-20 14:12:17', '2025-03-20 14:12:17'),
(1276, 'ur', 'description_1', 'وضاحت_1', '2025-03-20 14:12:17', '2025-03-20 14:12:17'),
(1277, 'ch', 'description_1', '描述_1', '2025-03-20 14:12:17', '2025-03-20 14:12:17'),
(1278, 'ar', 'description', 'الوصف', '2025-03-20 14:13:07', '2025-03-20 14:13:07'),
(1279, 'ur', 'description', 'وضاحت', '2025-03-20 14:13:07', '2025-03-20 14:13:07'),
(1280, 'ch', 'description', '描述', '2025-03-20 14:13:07', '2025-03-20 14:13:07'),
(1281, 'ar', 'delete', 'يمسح', '2025-03-20 14:13:51', '2025-03-20 14:13:51'),
(1282, 'ur', 'delete', 'حذف کریں۔', '2025-03-20 14:13:51', '2025-03-20 14:13:51'),
(1283, 'ch', 'delete', '删除', '2025-03-20 14:13:51', '2025-03-20 14:13:51'),
(1284, 'ar', 'create_language_key', 'إنشاء مفتاح اللغة', '2025-03-20 14:14:46', '2025-03-20 14:14:46'),
(1285, 'ur', 'create_language_key', 'زبان کی کلید بنائیں', '2025-03-20 14:14:46', '2025-03-20 14:14:46'),
(1286, 'ch', 'create_language_key', '创建语言键', '2025-03-20 14:14:46', '2025-03-20 14:14:46'),
(1287, 'ar', 'create_category', 'إنشاء_الفئة', '2025-03-20 14:15:34', '2025-03-20 14:15:34'),
(1288, 'ur', 'create_category', 'تخلیق_کیٹیگری', '2025-03-20 14:15:34', '2025-03-20 14:15:34'),
(1289, 'ch', 'create_category', '创建类别', '2025-03-20 14:15:34', '2025-03-20 14:15:34'),
(1290, 'ar', 'created_at', 'تم إنشاؤه في', '2025-03-20 14:16:50', '2025-03-20 14:16:50'),
(1291, 'ur', 'created_at', 'بنایا گیا _ پر', '2025-03-20 14:16:50', '2025-03-20 14:16:50'),
(1292, 'ch', 'created_at', '创建于', '2025-03-20 14:16:50', '2025-03-20 14:16:50'),
(1293, 'ar', 'create', 'يخلق', '2025-03-20 14:19:37', '2025-03-20 14:19:37'),
(1294, 'ur', 'create', 'بنائیں', '2025-03-20 14:19:37', '2025-03-20 14:19:37'),
(1295, 'ch', 'create', '创造', '2025-03-20 14:19:37', '2025-03-20 14:19:37'),
(1296, 'ar', 'country_id', 'البلد _ الهوية', '2025-03-20 14:24:09', '2025-03-20 14:24:09'),
(1297, 'ur', 'country_id', 'ملک _ آئی ڈی', '2025-03-20 14:24:09', '2025-03-20 14:24:09'),
(1298, 'ch', 'country_id', '国家/地区 ID', '2025-03-20 14:24:09', '2025-03-20 14:24:09'),
(1299, 'ar', 'content', 'محتوى', '2025-03-20 14:39:35', '2025-03-20 14:39:35'),
(1300, 'ur', 'content', 'مواد', '2025-03-20 14:39:35', '2025-03-20 14:39:35'),
(1301, 'ch', 'content', '内容', '2025-03-20 14:39:35', '2025-03-20 14:39:35'),
(1302, 'ar', 'confirm_password', 'تأكيد كلمة المرور', '2025-03-20 14:41:24', '2025-03-20 14:41:24'),
(1303, 'ur', 'confirm_password', 'پاس ورڈ کی تصدیق کریں۔', '2025-03-20 14:41:24', '2025-03-20 14:41:24'),
(1304, 'ch', 'confirm_password', '确认密码', '2025-03-20 14:41:24', '2025-03-20 14:41:24'),
(1305, 'ar', 'confirmed', 'مؤكد..', '2025-03-20 14:51:36', '2025-03-20 14:51:36'),
(1306, 'ur', 'confirmed', 'تصدیق شدہ..', '2025-03-20 14:51:36', '2025-03-20 14:51:36'),
(1307, 'ch', 'confirmed', '确认的..', '2025-03-20 14:51:36', '2025-03-20 14:51:36'),
(1308, 'ar', 'close', 'يغلق', '2025-03-20 14:53:26', '2025-03-20 14:53:26'),
(1309, 'ur', 'close', 'بند', '2025-03-20 14:53:26', '2025-03-20 14:53:26'),
(1310, 'ch', 'close', '关闭', '2025-03-20 14:53:26', '2025-03-20 14:53:26'),
(1311, 'ar', 'change_password', 'تغيير كلمة المرور', '2025-03-20 15:01:00', '2025-03-20 15:01:00'),
(1312, 'ur', 'change_password', 'پاس ورڈ تبدیل کریں۔', '2025-03-20 15:01:00', '2025-03-20 15:01:00'),
(1313, 'ch', 'change_password', '更改密码', '2025-03-20 15:01:00', '2025-03-20 15:01:00'),
(1314, 'ar', 'category_updated_successfully', 'تم تحديث الفئة بنجاح.', '2025-03-20 15:01:37', '2025-03-20 15:01:37'),
(1315, 'ur', 'category_updated_successfully', 'زمرہ کامیابی کے ساتھ اپ ڈیٹ ہو گیا۔', '2025-03-20 15:01:37', '2025-03-20 15:01:37'),
(1316, 'ch', 'category_updated_successfully', '类别更新成功。', '2025-03-20 15:01:37', '2025-03-20 15:01:37'),
(1317, 'ar', 'category_name', 'اسم الفئة', '2025-03-20 15:02:17', '2025-03-20 15:02:17'),
(1318, 'ur', 'category_name', 'زمرہ_نام', '2025-03-20 15:02:17', '2025-03-20 15:02:17'),
(1319, 'ch', 'category_name', '类别名称', '2025-03-20 15:02:17', '2025-03-20 15:02:17'),
(1320, 'ar', 'category', 'فئة', '2025-03-20 15:02:56', '2025-03-20 15:02:56'),
(1321, 'ur', 'category', 'زمرہ', '2025-03-20 15:02:56', '2025-03-20 15:02:56'),
(1322, 'ch', 'category', '类别', '2025-03-20 15:02:56', '2025-03-20 15:02:56'),
(1323, 'ar', 'categories', 'فئات', '2025-03-20 15:03:55', '2025-03-20 15:03:55'),
(1324, 'ur', 'categories', 'زمرے', '2025-03-20 15:03:55', '2025-03-20 15:03:55'),
(1325, 'ch', 'categories', '类别', '2025-03-20 15:03:55', '2025-03-20 15:03:55'),
(1326, 'ar', 'career_updated_successfully', 'تم تحديث المهنة بنجاح.', '2025-03-20 15:04:59', '2025-03-20 15:04:59'),
(1327, 'ur', 'career_updated_successfully', 'کیریئر کامیابی سے اپ ڈیٹ ہو گیا۔', '2025-03-20 15:04:59', '2025-03-20 15:04:59'),
(1328, 'ch', 'career_updated_successfully', '生涯更新成功。', '2025-03-20 15:04:59', '2025-03-20 15:04:59'),
(1329, 'ar', 'career_type', 'نوع المهنة', '2025-03-20 15:07:02', '2025-03-20 15:07:02'),
(1330, 'ur', 'career_type', 'کیریئر_قسم', '2025-03-20 15:07:02', '2025-03-20 15:07:02'),
(1331, 'ch', 'career_type', '职业_类型', '2025-03-20 15:07:02', '2025-03-20 15:07:02'),
(1332, 'ar', 'career_name', 'اسم المهنة', '2025-03-20 15:11:02', '2025-03-20 15:11:02'),
(1333, 'ur', 'career_name', 'کیریئر_نام', '2025-03-20 15:11:02', '2025-03-20 15:11:02'),
(1334, 'ch', 'career_name', '职业_姓名', '2025-03-20 15:11:02', '2025-03-20 15:11:02'),
(1335, 'ar', 'career_location', 'موقع المهنة', '2025-03-20 15:12:01', '2025-03-20 15:12:01'),
(1336, 'ur', 'career_location', 'کیریئر_مقام', '2025-03-20 15:12:01', '2025-03-20 15:12:01'),
(1337, 'ch', 'career_location', '职业_地点', '2025-03-20 15:12:01', '2025-03-20 15:12:01'),
(1338, 'ar', 'career_description', 'وصف المهنة', '2025-03-20 15:12:46', '2025-03-20 15:12:46'),
(1339, 'ur', 'career_description', 'کیریئر_تفصیل', '2025-03-20 15:12:46', '2025-03-20 15:12:46'),
(1340, 'ch', 'career_description', '职业_描述', '2025-03-20 15:12:46', '2025-03-20 15:12:46'),
(1341, 'ar', 'career_deleted_successfully', 'تم حذف المهنة بنجاح.', '2025-03-20 15:14:33', '2025-03-20 15:14:33'),
(1342, 'ur', 'career_deleted_successfully', 'کیریئر کامیابی سے حذف ہو گیا۔', '2025-03-20 15:14:33', '2025-03-20 15:14:33'),
(1343, 'ch', 'career_deleted_successfully', '生涯删除成功。', '2025-03-20 15:14:33', '2025-03-20 15:14:33'),
(1344, 'ar', 'career_created', 'مهنة تم إنشاؤها', '2025-03-20 15:15:19', '2025-03-20 15:15:19'),
(1345, 'ur', 'career_created', 'کیریئر_بنایا', '2025-03-20 15:15:19', '2025-03-20 15:15:19'),
(1346, 'ch', 'career_created', '职业生涯_创建', '2025-03-20 15:15:19', '2025-03-20 15:15:19'),
(1347, 'ar', 'career_added_successfully', 'تمت إضافة المهنة بنجاح.', '2025-03-20 15:16:16', '2025-03-20 15:16:16'),
(1348, 'ur', 'career_added_successfully', 'کیریئر کامیابی کے ساتھ شامل کیا گیا۔', '2025-03-20 15:16:16', '2025-03-20 15:16:16'),
(1349, 'ch', 'career_added_successfully', '职业添加成功。', '2025-03-20 15:16:16', '2025-03-20 15:16:16'),
(1350, 'ar', 'cancel', 'يلغي', '2025-03-20 15:17:25', '2025-03-20 15:17:25'),
(1351, 'ur', 'cancel', 'منسوخ کریں', '2025-03-20 15:17:25', '2025-03-20 15:17:25'),
(1352, 'ch', 'cancel', '取消', '2025-03-20 15:17:25', '2025-03-20 15:17:25'),
(1353, 'ar', 'button_text', 'نص الزر', '2025-03-20 15:18:12', '2025-03-20 15:18:12'),
(1354, 'ur', 'button_text', 'بٹن کا متن', '2025-03-20 15:18:12', '2025-03-20 15:18:12'),
(1355, 'ch', 'button_text', '按钮文字', '2025-03-20 15:18:12', '2025-03-20 15:18:12'),
(1356, 'ar', 'banner_title', 'عنوان اللافتة', '2025-03-20 15:19:46', '2025-03-20 15:19:46'),
(1357, 'ur', 'banner_title', 'بینر کا عنوان', '2025-03-20 15:19:46', '2025-03-20 15:19:46'),
(1358, 'ch', 'banner_title', '横幅标题', '2025-03-20 15:19:46', '2025-03-20 15:19:46'),
(1359, 'ar', 'banner_image', 'صورة الشعار', '2025-03-20 15:20:50', '2025-03-20 15:20:50'),
(1360, 'ur', 'banner_image', 'بینر کی تصویر', '2025-03-20 15:20:50', '2025-03-20 15:20:50'),
(1361, 'ch', 'banner_image', '横幅图像', '2025-03-20 15:20:50', '2025-03-20 15:20:50'),
(1362, 'ar', 'back', 'خلف', '2025-03-20 15:21:37', '2025-03-20 15:21:37'),
(1363, 'ur', 'back', 'پیچھے', '2025-03-20 15:21:37', '2025-03-20 15:21:37'),
(1364, 'ch', 'back', '后退', '2025-03-20 15:21:37', '2025-03-20 15:21:37'),
(1365, 'ar', 'author_name', 'اسم المؤلف', '2025-03-20 15:22:51', '2025-03-20 15:22:51'),
(1366, 'ur', 'author_name', 'مصنف کا نام', '2025-03-20 15:22:51', '2025-03-20 15:22:51'),
(1367, 'ch', 'author_name', '作者姓名', '2025-03-20 15:22:51', '2025-03-20 15:22:51'),
(1368, 'ar', 'are_you_sure', 'هل أنت متأكد؟', '2025-03-20 15:24:15', '2025-03-20 15:24:15'),
(1369, 'ur', 'are_you_sure', 'کیا آپ کو یقین ہے؟', '2025-03-20 15:24:15', '2025-03-20 15:24:15'),
(1370, 'ch', 'are_you_sure', '你确定吗？', '2025-03-20 15:24:15', '2025-03-20 15:24:15'),
(1371, 'ar', 'approved', 'موافقة', '2025-03-20 15:24:57', '2025-03-20 15:24:57'),
(1372, 'ur', 'approved', 'منظور شدہ', '2025-03-20 15:24:57', '2025-03-20 15:24:57'),
(1373, 'ch', 'approved', '得到正式认可的', '2025-03-20 15:24:57', '2025-03-20 15:24:57'),
(1374, 'ar', 'answer', 'إجابة', '2025-03-20 15:26:01', '2025-03-20 15:26:01'),
(1375, 'ur', 'answer', 'جواب', '2025-03-20 15:26:01', '2025-03-20 15:26:01'),
(1376, 'ch', 'answer', '回答', '2025-03-20 15:26:01', '2025-03-20 15:26:01'),
(1377, 'ar', 'add_vehicle', 'أضف مركبة', '2025-03-20 15:28:23', '2025-03-20 15:28:23'),
(1378, 'ur', 'add_vehicle', '_گاڑی شامل کریں۔', '2025-03-20 15:28:23', '2025-03-20 15:28:23'),
(1379, 'ch', 'add_vehicle', '添加车辆', '2025-03-20 15:28:23', '2025-03-20 15:28:23'),
(1380, 'ar', 'add_sub_admin', 'إضافة مسؤول فرعي', '2025-03-20 15:41:50', '2025-03-20 15:41:50'),
(1381, 'ur', 'add_sub_admin', 'سب ایڈمن شامل کریں۔', '2025-03-20 15:41:50', '2025-03-20 15:41:50'),
(1382, 'ch', 'add_sub_admin', '添加子管理员', '2025-03-20 15:41:50', '2025-03-20 15:41:50'),
(1383, 'ch', 'add_service', '添加服务', '2025-03-20 15:42:30', '2025-03-20 15:42:30'),
(1384, 'ar', 'add_role', 'إضافة دور', '2025-03-20 15:43:22', '2025-03-20 15:43:22'),
(1385, 'ur', 'add_role', 'کردار شامل کریں۔', '2025-03-20 15:43:22', '2025-03-20 15:43:22'),
(1386, 'ch', 'add_role', '添加角色', '2025-03-20 15:43:22', '2025-03-20 15:43:22'),
(1387, 'ar', 'add_module', 'إضافة وحدة نمطية', '2025-03-20 15:44:28', '2025-03-20 15:44:28'),
(1388, 'ur', 'add_module', '_ ماڈیول شامل کریں۔', '2025-03-20 15:44:28', '2025-03-20 15:44:28'),
(1389, 'ch', 'add_module', '添加模块', '2025-03-20 15:44:28', '2025-03-20 15:44:28'),
(1390, 'ar', 'add_permission', 'إضافة إذن', '2025-03-20 15:46:00', '2025-03-20 15:46:00'),
(1391, 'ur', 'add_permission', 'شامل کریں_اجازت', '2025-03-20 15:46:00', '2025-03-20 15:46:00'),
(1392, 'ch', 'add_permission', '添加权限', '2025-03-20 15:46:00', '2025-03-20 15:46:00'),
(1393, 'ar', 'add_new', 'إضافة جديد', '2025-03-20 15:47:11', '2025-03-20 15:47:11'),
(1394, 'ur', 'add_new', 'نیا شامل کریں۔', '2025-03-20 15:47:11', '2025-03-20 15:47:11'),
(1395, 'ch', 'add_new', '添加新', '2025-03-20 15:47:11', '2025-03-20 15:47:11'),
(1396, 'ar', 'add_language', 'إضافة لغة', '2025-03-20 15:48:05', '2025-03-20 15:48:05'),
(1397, 'ur', 'add_language', 'شامل کریں_زبان', '2025-03-20 15:48:05', '2025-03-20 15:48:05'),
(1398, 'ch', 'add_language', '添加语言', '2025-03-20 15:48:05', '2025-03-20 15:48:05'),
(1399, 'ar', 'add_career', 'إضافة مهنة', '2025-03-20 15:49:15', '2025-03-20 15:49:15'),
(1400, 'ur', 'add_career', 'شامل کریں_کیرئیر', '2025-03-20 15:49:15', '2025-03-20 15:49:15'),
(1401, 'ch', 'add_career', '添加职业', '2025-03-20 15:49:15', '2025-03-20 15:49:15'),
(1402, 'ar', 'additional_info', 'معلومات إضافية', '2025-03-20 15:50:11', '2025-03-20 15:50:11'),
(1403, 'ur', 'additional_info', 'اضافی_معلومات', '2025-03-20 15:50:11', '2025-03-20 15:50:11'),
(1404, 'ch', 'additional_info', '附加信息', '2025-03-20 15:50:11', '2025-03-20 15:50:11'),
(1405, 'ar', 'active', 'نشيط', '2025-03-20 15:53:40', '2025-03-20 15:53:40'),
(1406, 'ur', 'active', 'فعال', '2025-03-20 15:53:40', '2025-03-20 15:53:40'),
(1407, 'ch', 'active', '积极的', '2025-03-20 15:53:40', '2025-03-20 15:53:40'),
(1408, 'ar', 'actions', 'الأفعال', '2025-03-20 15:55:34', '2025-03-20 15:55:34'),
(1409, 'ur', 'actions', 'اعمال', '2025-03-20 15:55:34', '2025-03-20 15:55:34'),
(1410, 'ch', 'actions', '行动', '2025-03-20 15:55:34', '2025-03-20 15:55:34'),
(1411, 'ar', 'acceptpngjpgjpeg', 'قبول: png،jpg،jpeg', '2025-03-20 15:57:35', '2025-03-20 15:57:35'),
(1412, 'ur', 'acceptpngjpgjpeg', 'قبول کریں: پی این جی، جے پی جی، جے پی ای جی', '2025-03-20 15:57:35', '2025-03-20 15:57:35'),
(1413, 'ch', 'acceptpngjpgjpeg', '接受：png、jpg、jpeg', '2025-03-20 15:57:35', '2025-03-20 15:57:35'),
(1414, 'en', 'relevant_experience', 'relevant_experience', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1415, 'en', 'enter_relevant_experience', 'enter_relevant_experience', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1416, 'en', 'total_experience', 'total_experience', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1417, 'en', 'enter_total_experience', 'enter_total_experience', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1418, 'en', 'job_type', 'job_type', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1419, 'en', 'enter_job_type', 'enter_job_type', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1420, 'en', 'no_of_openings', 'no_of_openings', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1421, 'en', 'enter_no_of_openings', 'enter_no_of_openings', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1422, 'en', 'text_4', 'text_4', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1423, 'en', 'enter_text_4', 'enter_text_4', '2025-03-21 08:30:01', '2025-03-21 08:30:01'),
(1424, 'en', 'job_description', 'job_description', '2025-03-21 10:17:02', '2025-03-21 10:17:02'),
(1425, 'en', 'enter_job_description', 'enter_job_description', '2025-03-21 10:17:02', '2025-03-21 10:17:02'),
(1426, 'en', 'responsibility', 'responsibility', '2025-03-21 10:59:54', '2025-03-21 10:59:54'),
(1427, 'en', 'enter_responsibility', 'enter_responsibility', '2025-03-21 10:59:54', '2025-03-21 10:59:54'),
(1428, 'en', 'edit_module', 'edit_module', '2025-03-21 12:34:51', '2025-03-21 12:34:51'),
(1429, 'en', 'profile_updated_successfully', 'profile_updated_successfully', '2025-03-26 06:13:30', '2025-03-26 06:13:30'),
(1430, 'en', 'please_enter_a_role_name', 'Please enter a role name.', '2025-03-26 06:42:38', '2025-03-26 06:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` int NOT NULL DEFAULT '5' COMMENT '1 Admin,2 Sub Admin,3 Driver,4 Service Provider,5 Customer',
  `register_type` int NOT NULL DEFAULT '0' COMMENT '1 => App,2 => Web',
  `register_method` int NOT NULL DEFAULT '0' COMMENT '1 => System,2 => Facebook,3 => Google, 4 => Apple',
  `is_approved` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 => Pen0ding,1 => Approved,2 => Block',
  `is_verify_otp` int NOT NULL DEFAULT '0' COMMENT '0 not verify,1 verify',
  `otp` int DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int NOT NULL DEFAULT '0',
  `token` longtext COLLATE utf8mb4_unicode_ci COMMENT 'for login generate token by passport',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_delete` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `profile_image`, `phone`, `user_type`, `register_type`, `register_method`, `is_approved`, `is_verify_otp`, `otp`, `email_verified_at`, `password`, `country_id`, `token`, `remember_token`, `created_at`, `updated_at`, `is_delete`, `is_active`) VALUES
(1, 'Admin', 'Admin', NULL, 'admin@labbah.com', NULL, NULL, 1, 0, 0, '1', 1, NULL, NULL, '$2y$12$1loEgvcnN/b207CAeMsQBOSYtPQR3SOOIHXb3B7lgUQkYh6GeGBV2', 0, NULL, NULL, '2025-02-06 03:45:20', '2025-02-06 03:45:20', '0', 1),
(2, 'Admin', 'K', NULL, 'admin@labbahk.com', '1741167709_profile_image.png', '7417798798', 1, 0, 0, '1', 1, NULL, NULL, '$2y$12$nAMW0KOuEx6ZLmNlnvYLzu8oXFMXr.dBeAYLoTMXpZsp.lm641Ov.', 0, NULL, NULL, '2025-02-06 03:45:20', '2025-03-05 14:41:49', '0', 1),
(5, 'Sub Admin', 'K1234', 'male', 'subadmin@labbahk.com', '1741167349_profile_image.png', '7417798458', 2, 0, 0, '1', 1, NULL, NULL, '$2y$12$nAMW0KOuEx6ZLmNlnvYLzu8oXFMXr.dBeAYLoTMXpZsp.lm641Ov.', 38, NULL, NULL, '2025-02-06 03:45:20', '2025-03-19 09:11:06', '0', 1),
(6, 'Yael', 'Britt', 'male', 'nemacisu@mailinator.com', '1741167255_profile_image.png', '12115547764', 2, 2, 1, '1', 0, NULL, NULL, '$2y$12$V.rwJ8rb8HJ0Jzh36yXpxOPVL0J2NDvJGEz2tLMN0fOQ/rjKkTymS', 1, NULL, NULL, '2025-02-27 00:19:23', '2025-03-05 14:34:15', '0', 1),
(7, 'Amaya', 'Ward', 'female', 'wozapeh@mailinator.com', '1741167304_profile_image.png', '16193162284', 2, 2, 1, '1', 0, NULL, NULL, '$2y$12$DHknBsB/3T.9C8x530xVae/EojEKlfoDz3U22dSGlGCxBwJ3tgrFm', 2, NULL, NULL, '2025-02-27 00:21:40', '2025-03-05 14:35:04', '0', 1),
(10, 'Hillary', 'Buckley', 'Female', 'qixoguripa@mailinator.com', '1740635879_profile_image.png', '11412366017', 2, 2, 1, '1', 0, NULL, NULL, '$2y$12$FMijC1PfjM0wR3vF4.bJL.SsmEyLgxYOHuoEpq0zMi.PDaibpNCvS', 0, NULL, NULL, '2025-02-27 00:27:59', '2025-02-27 01:56:56', '1', 1),
(12, 'Blair', 'Powers', 'female', 'zuqo@mailinator.com', '1741167283_profile_image.png', '13292122222', 2, 2, 1, '1', 0, NULL, NULL, '$2y$12$RmjNaqxabvyF1lmxsM9bi.Zov98g7RWsNf56cBEBuDkkXUL2Sy9Tq', 2, NULL, NULL, '2025-02-27 01:55:46', '2025-03-05 14:34:43', '0', 1),
(13, 'Vincent', 'Simon', 'male', 'nuhexotiv@mailinator.com', '1741167268_profile_image.png', '11386288623', 2, 2, 1, '1', 0, NULL, NULL, '$2y$12$RUGR6wgMYC.1dPELO0Di2O1FCbX32qh.n1SMYYgR.eO8oL7UWxbS.', 159, NULL, NULL, '2025-02-27 07:33:10', '2025-03-05 14:34:28', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_languages`
--

DROP TABLE IF EXISTS `user_languages`;
CREATE TABLE IF NOT EXISTS `user_languages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_languages`
--

INSERT INTO `user_languages` (`id`, `user_id`, `language`, `created_at`, `updated_at`) VALUES
(2, 2, 'en', '2025-02-13 00:56:35', '2025-03-19 11:17:31');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
