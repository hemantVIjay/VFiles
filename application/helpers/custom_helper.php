<?php
  if (!defined('BASEPATH'))
      exit('No direct script access allowed');
  
  //-- execute var
  if (!function_exists('dd')) {
      function dd($var)
      {
          echo '<pre>';
          if (is_array($var)) {
              print_r($var);
              
          } else
              echo $var;
          die;
      }
  }
  
  //-- check logged user
  if (!function_exists('check_login_user')) {
      function check_login_user()
      {
          $ci = get_instance();
          if ($ci->session->userdata('is_login') != TRUE) {
              $ci->session->sess_destroy();
              redirect(base_url('auth'));
          }
      }
  }
  
  if (!function_exists('logged_in_user_id')) {
      
      function logged_in_user_id()
      {
          $logged_in_id = 0;
          $CI =& get_instance();
          if ($CI->session->userdata('id') && $CI->session->userdata('role')):
              $logged_in_id = 5; //$CI->session->userdata('id');
          endif;
          return $logged_in_id;
      }
      
  }
  
  
  
  if (!function_exists('check_power')) {
      function check_power($type)
      {
          $ci = get_instance();
          
          $ci->load->model('common_model');
          $option = $ci->common_model->check_power($type);
          
          return $option;
      }
  }
  
  //-- current date time function
  if (!function_exists('current_datetime')) {
      function current_datetime()
      {
          $dt        = new DateTime('now', new DateTimezone('Asia/Kolkata'));
          $date_time = $dt->format('Y-m-d H:i:s');
          return $date_time;
      }
  }
  
  //-- show current date & time with custom format
  if (!function_exists('my_date_show_time')) {
      function my_date_show_time($date)
      {
          if ($date != '') {
              $date2    = date_create($date);
              $date_new = date_format($date2, "d M Y h:i A");
              return $date_new;
          } else {
              return '';
          }
      }
  }
  
  
  if (!function_exists('get_nice_time')) {
      
      function get_nice_time($date)
      {
          
          $ci =& get_instance();
          if (empty($date)) {
              return "2 months ago"; //"No date provided";
          }
          
          $periods = array(
              "second",
              "minute",
              "hour",
              "day",
              "week",
              "month",
              "year",
              "decade"
          );
          $lengths = array(
              "60",
              "60",
              "24",
              "7",
              "4.35",
              "12",
              "10"
          );
          
          $now       = time();
          $unix_date = strtotime($date);
          
          // check validity of date
          if (empty($unix_date)) {
              return "2 months ago"; // "Bad date";
          }
          
          // is it future date or past date
          if ($now > $unix_date) {
              $difference = $now - $unix_date;
              $tense      = "ago";
          } else {
              $difference = $unix_date - $now;
              $tense      = "from now";
          }
          
          for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
              $difference /= $lengths[$j];
          }
          
          $difference = round($difference);
          
          if ($difference != 1) {
              $periods[$j] .= "s";
          }
          
          return "$difference $periods[$j] {$tense}";
      }
      
  }
  
  
  //-- show current date with custom format
  if (!function_exists('my_date_show')) {
      function my_date_show($date)
      {
          
          if ($date != '') {
              $date2    = date_create($date);
              $date_new = date_format($date2, "d M Y");
              return $date_new;
          } else {
              return '';
          }
      }
  }
  if (!function_exists('mD_format')) {
      function mD_format($date)
      {
          
          if ($date != '') {
              $date2    = date_create($date);
              $date_new = date_format($date2, "M d, Y");
              return $date_new;
          } else {
              return '';
          }
      }
  }
  
  if (!function_exists('create_log')) {
      function create_log($activity = null)
      {
          $ci =& get_instance();
          $data               = array();
          $data['user_id']    = check_licensee_id();
          $data['role_id']    = $ci->session->userdata('role');
          $user               = 1;
          $data['name']       = $ci->session->userdata('name');
          $data['phone']      = '';
          $data['ip_address'] = $_SERVER['REMOTE_ADDR'];
          $data['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
          $data['activity']   = $activity;
          $data['status']     = 1;
          $data['created_at'] = date('Y-m-d H:i:s');
          $data['created_by'] = check_licensee_id();
          $ci->db->insert('activity_logs', $data);
      }
  }
  
  
  if (!function_exists('check_permission')) {
      
      function check_permission($action)
      {
          $ci =& get_instance();
          $role_id        = $ci->session->userdata('role_id');
          $operation_slug = $ci->router->fetch_class();
          $module_slug    = $ci->router->fetch_module();
          
          if ($module_slug == '') {
              $module_slug = $operation_slug;
          }
          
          $module_slug = 'my_' . $module_slug;
          
          $data = $ci->config->item($operation_slug, $module_slug);
          
          $result = $data[$role_id];
          if (!empty($result)) {
              $array = explode('|', $result);
              if (!$array[$action]) {
                  error($ci->lang->line('permission_denied'));
                  redirect('dashboard');
              }
          } else {
              error($ci->lang->line('permission_denied'));
              redirect('dashboard');
          }
          
          return TRUE;
      }
      
  }
  if (!function_exists('has_permissionq')) {
      
      function has_permissionq($action, $module_slug = null, $operation_slug = null)
      {
          
          $ci =& get_instance();
          $role_id = $ci->session->userdata('role_id');
          
          if ($module_slug == '') {
              $module_slug = $operation_slug;
          }
          
          $module_slug = 'my_' . $module_slug;
          
          $data = $ci->config->item($operation_slug, $module_slug);
          
          $result = @$data[$role_id];
          
          if (!empty($result)) {
              $array = explode('|', $result);
              return $array[$action];
          } else {
              return FALSE;
          }
      }
  }
  
  if (!function_exists('new_has_permission')) {
      function has_permission($action)
      {
          $role = $ci->session->userdata('role');
          if ($role == 'Licensee') {
              return TRUE;
          } else if ($role == 'User') {
              $ci->load->model('common_model');
              $option = $ci->common_model->check_power_licensee_privileges($operation_id);
              
          } else {
              
              return FALSE;
          }
          
      }
  }
  
  
  /***------***/
  /*if (!function_exists('_countries')) {
  function _countries($id)
  {
  $ci =& get_instance();
  return $ci->master_model->_getCountries($id);
  }
  }*/
  
  
  if (!function_exists('_currencyID')) {
      function _currencyID($code)
      {
          $ci =& get_instance();
          $res = $ci->master_model->_currencyID($code);
          return $res;
      }
  }

  if (!function_exists('_banks')) {
      function _banks()
      {
          $ci =& get_instance();
          $res = $ci->masters->_banks();
          return $res;
      }
  }

  if (!function_exists('_amenities')) {
      function _amenities()
      {
          $ci =& get_instance();
          $res = $ci->masters->_amenities();
          return $res;
      }
  }

  if (!function_exists('_builderCode')) {
      function _builderCode($code)
      {
          $ci =& get_instance();
		  $str = 'PROPV';
          $res = $ci->masters->_builderCode($code);
          return $res;
      }
  }

  if (!function_exists('_builderDetails')) {
      function _builderDetails($id)
      {
          $ci =& get_instance();
		  $str = 'PROPV';
          $res = $ci->masters->_builderDetails($id);
          return $res;
      }
  }

  if (!function_exists('_propertyCode')) {
      function _propertyCode($builder, $p_type, $loc)
      {
          $ci =& get_instance();
		  $str = 'PROPV';
		  //$code = $str.$builder.$p_type.$loc;
		  $code = $str.$p_type;
          $res = $ci->masters->_propertyCode();
		  if(!empty($res)){
			$nCode = substr($res->code, -6);  
		  }else{
			$nCode = 0;
		  }
		  $nCode = $nCode+1;
		  $finalCode = $code.sprintf("%06d", $nCode);
          return $finalCode;
      }
  }
  
  
  if (!function_exists('_dateFormat')) {
      function _dateFormat($dd = '')
      {
          $ci =& get_instance();
          
          $nDate = DateTime::createFromFormat('d-m-Y', $dd);
          $nDD   = $nDate->format('Y-m-d');
          return $nDD;
      }
  }
  
  if (!function_exists('success')) {
      function success($message)
      {
          $CI =& get_instance();
          $CI->session->set_userdata('success', $message);
          return true;
      }
  }
  if (!function_exists('success_')) {
      function success_($message)
      {
          $CI =& get_instance();
          $CI->session->set_flashdata('success_', $message);
          return true;
      }
  }
  
  if (!function_exists('error')) {
      function error($message)
      {
          $CI =& get_instance();
          $CI->session->set_userdata('error', $message);
          return true;
      }
  }
  if (!function_exists('error_')) {
      function error_($message)
      {
          $CI =& get_instance();
          $CI->session->set_flashdata('error_', $message);
          return true;
      }
  }
  
  if (!function_exists('warning')) {
      function warning($message)
      {
          $CI =& get_instance();
          $CI->session->set_userdata('warning', $message);
          return true;
      }
  }
  
  if (!function_exists('info')) {
      
      function info($message)
      {
          $CI =& get_instance();
          $CI->session->set_userdata('info', $message);
          return true;
      }
      
  }
  
  if (!function_exists('send_data')) {
      
      function send_data($data, $md)
      {
          $CI =& get_instance();
          $host = 'http://localhost/desimurga/api/' . $md . '/';
          
          $apiKey   = 'CODEX@123';
          $username = "admin";
          $password = "1234";
          
          $ch = curl_init($host);
          
          curl_setopt($ch, CURLOPT_TIMEOUT, 30);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
              "X-API-KEY: " . $apiKey
          ));
          curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
          $result = curl_exec($ch);
          curl_close($ch);
          //        print_r($result);
          
      }
      
  }
  
  
  if (!function_exists('file_type')) {
      function file_type($type, $name)
      {
          $CI =& get_instance();
          $ext = explode('.', $name);
          if ($type == 'image/png' || $type == 'image/jpg' || $type == 'image/jpeg')
              return '<img src="' . base_url() . 'assets/images/jpg.png">';
          else if ($type == 'application/octet-stream' && ($ext[1] == 'xls' || $ext[1] == 'xlsx'))
              return '<img src="' . base_url() . 'assets/images/excel.png">';
          else if ($type == 'application/pdf')
              return '<img src="' . base_url() . 'assets/images/pdf.png">';
          else if ($type == 'application/octet-stream' && ($ext[1] == 'doc' || $ext[1] == 'docx'))
              return '<img src="' . base_url() . 'assets/images/word.png">';
          else
              return '<img src="' . base_url() . 'assets/images/jpg.png">';
          
      }
  }
  if (!function_exists('_dRegexmatch')) {
      function _dRegexmatch($checkval = '')
      {
          $ci =& get_instance();
          $regex = '^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$^';
          if (preg_match($regex, $checkval)) {
              $formatval = date('Y-m-d', strtotime($checkval));
          } else {
              $formatval = $checkval;
          }
          return $formatval;
      }
  }
  
  if (!function_exists('_createdirectory')) {
      
      function _createdirectory($dir, $subDir)
      {
          if (!is_dir('uploads/' . $dir)) {
              mkdir('uploads/' . $dir, 0777, TRUE);
          }
          if (!is_dir('uploads/' . $dir . '/' . $subDir)) {
              mkdir('uploads/' . $dir . '/' . $subDir, 0777, TRUE);
          }
          if (!is_dir('uploads/' . $dir . '/' . $subDir)) {
              return FALSE;
          } else {
              return TRUE;
          }
      }
      
  }
  if (!function_exists('_uploadFile')) {
      
      function _uploadFile($fname, $tmp_name, $Dname, $cName, $subDir, $exists)
      {          
          $CI =& get_instance();          
          $rfile = '';
          if ($fname != "") {
              $dest   = 'uploads/' . $subDir . '/' . $cName . '/';
              $f_type = explode(".", $fname);
              $ext    = strtolower($f_type[count($f_type) - 1]);
              $fpath  = md5($Dname . '-' . time() . '') . '.' . $ext;              
              move_uploaded_file($tmp_name, $dest . $fpath);              
              if ($exists != "") {
                  if (file_exists($dest . $exists)) {
                      @unlink($dest . $exists);
                  }
              }
              $rfile = $fpath;
          } else {
              $rfile = $exists;
          }
          return $rfile;
      }
      
  }
  
  if (!function_exists('_dFormat')) {
      function _dFormat($dd = '')
      {
          $ci =& get_instance();
          if ($dd != '0000-00-00' && $dd != '' && $dd != '1900-01-01') {
              $nDate = DateTime::createFromFormat('Y-m-d', $dd);
              $nDD   = $nDate->format('d-m-Y');
          } else {
              $nDD = '';
          }
          
          return $nDD;
      }
  }
  
  if (!function_exists('_sdFormat')) {
      function _sdFormat($dd = '')
      {
          $ci =& get_instance();
          if ($dd != '0000-00-00 00:00:00' && $dd != '' && $dd != '1900-01-01 00:00:00') {
              $nDate = DateTime::createFromFormat('Y-m-d H:i:s', $dd);
              $nDD   = $nDate->format('d-m-Y');
          } else {
              $nDD = '';
          }
          
          return $nDD;
      }
  }
  
  if (!function_exists('_countryID')) {
      function _countryID($name)
      {
          $ci =& get_instance();
          return $ci->master_model->_countryID($name);
      }
  }
  if (!function_exists('_countryN')) {
      function _countryN($name)
      {
          $ci =& get_instance();
          $cn = $ci->master_model->_countryN($name);
          if (!empty($cn)) {
              $cnt = $cn->name;
          } else {
              $cnt = '';
          }
          return $cnt;
      }
  }
 
  
  if (!function_exists('_propertyType')) {
      function _propertyType($mid)
      {
          $ci =& get_instance();
          $banks = "";
          $query = $ci->db->get('property_types');
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->name;
              $banks .= "</option>";
          }
          return $banks;
      }
  }


  if (!function_exists('_Floors')) {
      function _Floors($mid)
      {
          $ci =& get_instance();
          $banks = "";
          $query = $ci->db->get('floor_types');
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->name;
              $banks .= "</option>";
          }
          return $banks;
      }
  }


  if (!function_exists('_Numbers')) {
      function _Numbers($mid, $max)
      {
          $ci =& get_instance();
          $numbers = "";
		  
          for($i=1;$i<=$max; $i++) {
              $Sdata = ($i == $mid) ? 'selected' : '';
              $numbers .= "<option " . $Sdata . " value ='" . $i . "'>";
              $numbers .= $i;
              $numbers .= "</option>";
          }
          return $numbers;
      }
  }

  if (!function_exists('_builders')) {
      function _builders($mid)
      {
          $ci =& get_instance();
          $banks = "";
          $query = $ci->db->get('builders');
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->builder_name;
              $banks .= "</option>";
          }
          return $banks;
      }
  }

  if (!function_exists('_currencies')) {
      function _currencies($mid)
      {
          $ci =& get_instance();
          $banks = "";
          $query = $ci->db->get('currency');
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->code;
              $banks .= "</option>";
          }
          return $banks;
      }
  }
  
  if (!function_exists('_localities')) {
      function _localities($mid)
      {
          $ci =& get_instance();
          $banks = "";
          $ci->db->select('*');
          $ci->db->from('locations');
          $ci->db->where('status', 1);
          $query = $ci->db->get();
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->name;
              $banks .= "</option>";
          }
          return $banks;
      }
  }

  if (!function_exists('_cities')) {
      function _cities($mid)
      {
          $ci =& get_instance();
          $banks = "";
          $ci->db->select('*');
          $ci->db->from('cities');
          $ci->db->where('state_id', 38);
          $ci->db->order_by('name', 'asc');
          $query = $ci->db->get();
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->name;
              $banks .= "</option>";
          }
          return $banks;
      }
  }

  if (!function_exists('_districts')) {
      function _districts($mid)
      {
          $ci =& get_instance();
          $banks = "";
          $ci->db->select('*');
          $ci->db->from('districts');
          $ci->db->where('status', 1);
          $ci->db->order_by('name', 'asc');
          $query = $ci->db->get();
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->name;
              $banks .= "</option>";
          }
          return $banks;
      }
  }
  
  if (!function_exists('_states')) {
      function _states($mid)
      {
          $ci =& get_instance();
          $banks = "";
          $ci->db->from('states');
          $ci->db->order_by('name');
          $query = $ci->db->get();
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->name;
              $banks .= "</option>";
          }
          return $banks;
      }
  }
  
  if (!function_exists('_countries')) {
      function _countries($mid)
      {
          $ci =& get_instance();
          $banks = "";
          $ci->db->from('countries');
          $ci->db->where('id', 101);
          $query = $ci->db->get();
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->name;
              $banks .= "</option>";
          }
          return $banks;
      }
  }
  
  if (!function_exists('_users')) {
      function _users($role, $mid)
      {
          $ci =& get_instance();
          $banks = "";
          $ci->db->where('user_role_id', $role);
          $query = $ci->db->get('users');
          $Mq    = $query->result();
          
          foreach ($Mq as $row) {
              $Sdata = ($row->id == $mid) ? 'selected' : '';
              $banks .= "<option " . $Sdata . " value ='" . $row->id . "'>";
              $banks .= $row->full_name;
              $banks .= "</option>";
          }
          return $banks;
      }
  }
  
  if (!function_exists('paypal_payment')) {
      
      function paypal_payment($amt, $invoice_id)
      {
          
          $ci =& get_instance();
          $amount  = $amt;
          $invoice = $invoice_id;
          $demo    = 1;
          $data    = array(
              'invoice_id' => $invoice,
              'amount' => $amount
          );
          
          $pay_amount = $data['amount'];
          
          $ci->paypal->add_field('rm', 2);
          $ci->paypal->add_field('no_note', 0);
          $ci->paypal->add_field('item_name', 'Invoice');
          $ci->paypal->add_field('amount', $pay_amount);
          $ci->paypal->add_field('custom', $data['invoice_id']);
          $ci->paypal->add_field('business', 'rajan@yopmail.org');
          $ci->paypal->add_field('tax', 0);
          $ci->paypal->add_field('quantity', 1);
          $ci->paypal->add_field('currency_code', 'USD');
          
          $ci->paypal->add_field('notify_url', base_url('payment/paypal_notify'));
          $ci->paypal->add_field('cancel_return', base_url('payment/payment_cancel/' . $data['invoice_id']));
          $ci->paypal->add_field('return', base_url('payment/payment_success/' . $data['invoice_id']));
          
          
          
          if ($demo == 1) {
              $ci->paypal->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
          } else {
              $ci->paypal->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
          }
          
          $ci->paypal->submit_paypal_post();
      }
  }
  
  if (!function_exists('_recaptchaValidate')) {
      function _recaptchaValidate($captcha)
      {
          
          $secretKey    = RE_CAPTCHA_SITE_KEY;
          $ip           = $_SERVER['REMOTE_ADDR'];
          $url          = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) . '&response=' . urlencode($captcha);
          $response     = file_get_contents($url);
          $responseKeys = json_decode($response, true);
          
          if ($responseKeys["success"]) {
              return true;
          } else {
              return false;
          }
      }
  }
  
  
  if (!function_exists('_getDocumentByRelation')) {
      function _getDocumentByRelation($where)
      {
          $ci =& get_instance();
          return $ci->web->check_document($where);
      }
  }
  
  
  if (!function_exists('_getLastInvoice')) {
      
      function _getLastInvoice()
      {
          $ci =& get_instance();
          
          $ci->db->order_by('id', 'desc');
          $ci->db->limit(1, 1);
          $res = $ci->db->get('invoices')->row();
          return $res->id;
      }
  }
  
  if (!function_exists('_getSetting')) {
      
      function _getSetting()
      {
          
          $ci =& get_instance();
          $ci->db->select('*');
          $query  = $ci->db->get('settings');
          $result = $query->row();
          return $result;
      }
  }
  
  if (!function_exists('_cityName')) {
      
      function _cityName($id)
      {
          
          $ci =& get_instance();
          $ci->db->select('*');
          $ci->db->where('id', $id);
          $ci->db->order_by('name');
          $query  = $ci->db->get('cities');
          $result = $query->row();
          if (!empty($result)) {
              return $result->name;
          } else {
              return '';
          }
          
      }
  }
  
  if (!function_exists('_cityDetails')) {
      
      function _cityDetails($id)
      {          
          $ci =& get_instance();
          $ci->db->select('c.name as city, s.name as state, ct.name as country');
          $ci->db->from('cities c');
          $ci->db->join('states s', 'c.state_id = s.id', 'left');
          $ci->db->join('countries ct', 's.country_id = ct.id', 'left');
          $ci->db->where('c.id', $id);
          $query  = $ci->db->get();
          $result = $query->row();
          if (!empty($result)) {
              return $result;
          } else {
              return array();
          }
          
      }
  }
  
  
  if (!function_exists('sendEmail')) {
      function sendEmail($to, $subject, $message)
      {
          $data = array();
          $ci =& get_instance();
          $ci->load->library('phpmailer_lib');
          $mail = $ci->phpmailer_lib->load();
          
          $mail->Host       = 'mail.desimurgawala.com';
          $mail->SMTPAuth   = true;
          $mail->Username   = 'enquiry@desimurgawala.com';
          $mail->Password   = '!RHPodeygyz#';
          $mail->SMTPSecure = 'tls';
          $mail->Port       = 587;
          
          $mail->setFrom('', '');
          
          $data['logo']               = $logo;
          $data['application_title']  = 'DesiMurgawala';
          $data['application_footer'] = 'DesiMurgawala';
          $data['email_content']      = $message;
          
          $email_body = $ci->load->view('email/template_mail', $data, true);
          $mail->addAddress($to);
          $mail->Subject = $subject;
          $mail->isHTML(true);
          $mail->Body = $email_body;
          
          if (!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
              return true;
          }
          
      }
      
  }
  
  if (!function_exists('_availableQuantity')) {
      
      function _availableQuantity($pid)
      {
          
          $ci =& get_instance();
          
          $sql    = "Select A.purchased_quantity, (A.purchased_quantity - SUM(B.assigned_quantity)) as available_quantity from daily_purchases A JOIN user_quantities B on A.id = B.purchase_id where A.id = $pid";
          $query  = $ci->db->query($sql);
          $result = $query->row();
          if (!empty($result)) {
              if ($result->available_quantity != '') {
                  return $result->available_quantity;
              } else {
                  return $result->purchased_quantity;
              }
          } else {
              return 0;
          }
          
      }
  }
  
  if (!function_exists('_allProducts')) {
      
      function _allProducts()
      {
          
          $ci =& get_instance();
          $query = $ci->db->get('products');
          $res   = $query->result();
          if (!empty($res)) {
              return $res;
          } else {
              return array();
          }
      }
  }
  
  if (!function_exists('_deliveryGuys')) {
      
      function _deliveryGuys()
      {
          
          $ci =& get_instance();
          $ci->db->where('user_role_id', 5);
          $query = $ci->db->get('users');
          $res   = $query->result();
          if (!empty($res)) {
              return $res;
          } else {
              return array();
          }
      }
  }
  
  if (!function_exists('_locations')) {
      
      function _locations()
      {          
          $ci =& get_instance();
          $query = $ci->db->get('locations');
          $res   = $query->result();
          if (!empty($res)) {
              return $res;
          } else {
              return array();
          }
      }
  }
  
  if (!function_exists('_assign_zones')) {
      
      function _assign_zones()
      {
          
          $ci =& get_instance();
          $query = $ci->db->get('zones');
          $res   = $query->result();
          if (!empty($res)) {
              return $res;
          } else {
              return array();
          }
      }
  }
  
  if (!function_exists('_userlocations')) {
      
      function _userlocations($uid)
      {
          
          $ci =& get_instance();
          $ci->db->where('user_id', $uid);
          $query = $ci->db->get('user_locations');
          $res   = $query->row();
          
          if (!empty($res)) {
              $loc = $res->locations;
              return explode(',', $loc);
          } else {
              return array();
          }
      }
  }
  
  
  if (!function_exists('_remaining_product_qty')) {
      
      function _remaining_product_qty()
      {
          $ci =& get_instance();
          $res = $ci->inventory_model->_remaining_product_qty();
          if (!empty($res)) {
              return $res;
          } else {
              return array();
          }
      }
  }
  
  
  if (!function_exists('array_flatten')) {
      
      function array_flatten($array)
      {
          if (!is_array($array)) {
              return false;
          }
          $result = array();
          foreach ($array as $key => $value) {
              if (is_array($value)) {
                  $result = array_merge($result, array_flatten($value));
              } else {
                  $result = array_merge($result, array(
                      $key => $value
                  ));
              }
          }
          return $result;
      }
      
  }
  
  if (!function_exists('_orderDetails')) {
      
      function _orderDetails($id)
      {          
          $ci =& get_instance();
          $res = $ci->order_model->_orderDetails($id);
          $arr = array();
          foreach ($res as $ar) {
              $srr['key']   = $ar->meta_key;
              $srr['value'] = $ar->meta_value;
              $arr[]        = $srr;
          }
          $result = array_map(function($v)
          {
              //return [$v['key'] => $v['value']];
          }, $arr);
          
          if (!empty($result)) {
              return array_flatten($result);
          } else {
              return array();
          }
      }
  }
  
  
  
  if (!function_exists('_products')) {
      
      function _products()
      {
          $ci =& get_instance();
          $res = $ci->inventory_model->_products();
          if (!empty($res)) {
              return $res;
          } else {
              return array();
          }
      }
  }
  
  if (!function_exists('_orders')) {
      
      function _orders()
      {
          $ci =& get_instance();
          $res = $ci->order_model->_orders();
          if (!empty($res)) {
              return $res;
          } else {
              return array();
          }
      }
  }
  
  
  if (!function_exists('_customers')) {
      
      function _customers()
      {
          $ci =& get_instance();
          $res = $ci->order_model->_customers();
          if (!empty($res)) {
              return $res;
          } else {
              return array();
          }
      }
  }
  
  if (!function_exists('_productInfo')) {
      
      function _productInfo($id)
      {
          $ci =& get_instance();
          $res = $ci->inventory_model->_productInfo($id);
          if (!empty($res)) {
              return $res;
          } else {
              return array();
          }
      }
  }
  
  if (!function_exists('_wURL')) {
      
      function _wURL()
      {
          $ci =& get_instance();
          $res = $ci->inventory_model->_wURL();
          if (!empty($res)) {
              return $res->option_value;
          } else {
              return array();
          }
      }
  }
  
  if (!function_exists('_unitPrice')) {
      
      function _unitPrice($pid)
      {
          $ci =& get_instance();
          $res = $ci->inventory_model->_unitPrice($pid);
          if (!empty($res)) {
              return $res->min_price;
          } else {
              return array();
          }
      }
  }
  
  if (!function_exists('_thumbnail')) {
      
      function _thumbnail($id)
      {
          $ci =& get_instance();
          $res = $ci->inventory_model->_thumbnail($id);
          if (!empty($res)) {
              $img   = $res->meta_value; //str_replace('.jpg', '-300x300.jpg',$res->meta_value);
              $thumb = _wURL() . '/wp-content/uploads/' . $img;
              return $thumb;
          } else {
              $str = '';
              return $str;
          }
      }
  }
  
  if (!function_exists('_customerDetails')) {
      
      function _customerDetails($id)
      {
          
          $ci =& get_instance();
          $res = $ci->order_model->_customerDetails($id);
          $arr = array();
          foreach ($res as $ar) {
              $srr['key']   = $ar->meta_key;
              $srr['value'] = $ar->meta_value;
              $arr[]        = $srr;
          }
          $result = array_map(function($v)
          {
              //return [$v['key'] => $v['value']];
          }, $arr);
          
          if (!empty($result)) {
              return array_flatten($result);
          } else {
              return array();
          }
      }
  }
  
  
  if (!function_exists('_productDetails')) {
      
      function _productDetails($id)
      {
          $ci =& get_instance();
          $res = $ci->inventory_model->_productDetails($id);
          
          $arr = array();
          foreach ($res as $ar) {
              $srr['key']   = $ar->meta_key;
              $srr['value'] = $ar->meta_value;
              $arr[]        = $srr;
          }
          $result = array_map(function($v)
          {
              //return [$v['key'] => $v['value']];
          }, $arr);
          
          if (!empty($result)) {
              return array_flatten($result);
          } else {
              return array();
          }
      }
  }
