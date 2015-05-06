<?php

define("ROWS_TO_FETCH_AT_ONCE", 5000);
define("ROWS_TO_DISPLAY_AT_ONCE", 2000);

define("URL_TO_FETCH_HEADERS", "https://openpaymentsdata.cms.gov/api/views/hrpy-hqv8.json?accessType=WEBSITE");
define("URL_TO_SCRAPE_DATA", "https://openpaymentsdata.cms.gov/views/INLINE/rows.json?accessType=WEBSITE&method=getByIds&asHashes=true");
define("SEND_STREAM_VIEW", '{"columns":[{"id":180496831,"name":"General_Transaction_ID","dataTypeName":"text","fieldName":"general_transaction_id","position":1,"tableColumnId":22158069,"width":223,"format":{},"metadata":{}},{"id":180496832,"name":"Program_Year","dataTypeName":"number","fieldName":"program_year","position":2,"tableColumnId":22158070,"width":169,"format":{"precisionStyle":"standard","noCommas":"true","align":"right"},"metadata":{}},{"id":180496833,"name":"Payment_Publication_Date","dataTypeName":"calendar_date","fieldName":"payment_publication_date","position":3,"tableColumnId":22158071,"width":249,"format":{"align":"left","view":"date"},"metadata":{}},{"id":180496834,"name":"Submitting_Applicable_Manufacturer_or_Applicable_GPO_Name","dataTypeName":"text","fieldName":"submitting_applicable_manufacturer_or_applicable_gpo_name","position":4,"tableColumnId":22158072,"width":470,"format":{},"metadata":{}},{"id":180496835,"name":"Covered_Recipient_Type","dataTypeName":"text","fieldName":"covered_recipient_type","position":5,"tableColumnId":22158073,"width":250,"format":{},"metadata":{}},{"id":180496836,"name":"Teaching_Hospital_ID","dataTypeName":"text","fieldName":"teaching_hospital_id","position":6,"tableColumnId":22158074,"width":216,"format":{},"metadata":{}},{"id":180496837,"name":"Teaching_Hospital_Name","dataTypeName":"text","fieldName":"teaching_hospital_name","position":7,"tableColumnId":22158075,"width":253,"format":{},"metadata":{}},{"id":180496838,"name":"Physician_Profile_ID","dataTypeName":"text","fieldName":"physician_profile_id","position":8,"tableColumnId":22158076,"width":231,"format":{},"metadata":{}},{"id":180496839,"name":"Physician_First_Name","dataTypeName":"text","fieldName":"physician_first_name","position":9,"tableColumnId":22158077,"width":222,"format":{},"metadata":{}},{"id":180496840,"name":"Physician_Middle_Name","dataTypeName":"text","fieldName":"physician_middle_name","position":10,"tableColumnId":22158078,"width":238,"format":{},"metadata":{}},{"id":180496841,"name":"Physician_Last_Name","dataTypeName":"text","fieldName":"physician_last_name","position":11,"tableColumnId":22158079,"width":229,"format":{},"metadata":{}},{"id":180496842,"name":"Physician_Name_Suffix","dataTypeName":"text","fieldName":"physician_name_suffix","position":12,"tableColumnId":22158080,"width":233,"format":{},"metadata":{}},{"id":180496843,"name":"Recipient_Primary_Business_Street_Address_Line1","dataTypeName":"text","fieldName":"recipient_primary_business_street_address_line1","position":13,"tableColumnId":22158081,"width":386,"format":{},"metadata":{}},{"id":180496844,"name":"Recipient_Primary_Business_Street_Address_Line2","dataTypeName":"text","fieldName":"recipient_primary_business_street_address_line2","position":14,"tableColumnId":22158082,"width":387,"format":{},"metadata":{}},{"id":180496845,"name":"Recipient_City","dataTypeName":"text","fieldName":"recipient_city","position":15,"tableColumnId":22158083,"width":186,"format":{},"metadata":{}},{"id":180496846,"name":"Recipient_State","dataTypeName":"text","fieldName":"recipient_state","position":16,"tableColumnId":22158084,"width":177,"format":{},"metadata":{}},{"id":180496847,"name":"Recipient_Zip_Code","dataTypeName":"text","fieldName":"recipient_zip_code","position":17,"tableColumnId":22158085,"width":205,"format":{},"metadata":{}},{"id":180496848,"name":"Recipient_Country","dataTypeName":"text","fieldName":"recipient_country","position":18,"tableColumnId":22158086,"width":194,"format":{},"metadata":{}},{"id":180496849,"name":"Recipient_Province","dataTypeName":"text","fieldName":"recipient_province","position":19,"tableColumnId":22158087,"width":200,"format":{},"metadata":{}},{"id":180496850,"name":"Recipient_Postal_Code","dataTypeName":"text","fieldName":"recipient_postal_code","position":20,"tableColumnId":22158088,"width":229,"format":{},"metadata":{}},{"id":180496851,"name":"Physician_Primary_Type","dataTypeName":"text","fieldName":"physician_primary_type","position":21,"tableColumnId":22158089,"width":242,"format":{},"metadata":{}},{"id":180496852,"name":"Physician_Specialty","dataTypeName":"text","fieldName":"physician_specialty","position":22,"tableColumnId":22158090,"width":220,"format":{},"metadata":{}},{"id":180496853,"name":"Physician_License_State_code1","dataTypeName":"text","fieldName":"physician_license_state_code1","position":23,"tableColumnId":22158091,"width":278,"format":{},"metadata":{}},{"id":180496854,"name":"Physician_License_State_code2","dataTypeName":"text","fieldName":"physician_license_state_code2","position":24,"tableColumnId":22158092,"width":272,"format":{},"metadata":{}},{"id":180496855,"name":"Physician_License_State_code3","dataTypeName":"text","fieldName":"physician_license_state_code3","position":25,"tableColumnId":22158093,"width":274,"format":{},"metadata":{}},{"id":180496856,"name":"Physician_License_State_code4","dataTypeName":"text","fieldName":"physician_license_state_code4","position":26,"tableColumnId":22158094,"width":281,"format":{},"metadata":{}},{"id":180496857,"name":"Physician_License_State_code5","dataTypeName":"text","fieldName":"physician_license_state_code5","position":27,"tableColumnId":22158095,"width":279,"format":{},"metadata":{}},{"id":180496858,"name":"Product_Indicator","dataTypeName":"text","fieldName":"product_indicator","position":28,"tableColumnId":22158096,"width":192,"format":{},"metadata":{}},{"id":180496859,"name":"Name_of_Associated_Covered_Drug_or_Biological1","dataTypeName":"text","fieldName":"name_of_associated_covered_drug_or_biological1","position":29,"tableColumnId":22158097,"width":389,"format":{},"metadata":{}},{"id":180496860,"name":"Name_of_Associated_Covered_Drug_or_Biological2","dataTypeName":"text","fieldName":"name_of_associated_covered_drug_or_biological2","position":30,"tableColumnId":22158098,"width":400,"format":{},"metadata":{}},{"id":180496861,"name":"Name_of_Associated_Covered_Drug_or_Biological3","dataTypeName":"text","fieldName":"name_of_associated_covered_drug_or_biological3","position":31,"tableColumnId":22158099,"width":400,"format":{},"metadata":{}},{"id":180496862,"name":"Name_of_Associated_Covered_Drug_or_Biological4","dataTypeName":"text","fieldName":"name_of_associated_covered_drug_or_biological4","position":32,"tableColumnId":22158100,"width":393,"format":{},"metadata":{}},{"id":180496863,"name":"Name_of_Associated_Covered_Drug_or_Biological5","dataTypeName":"text","fieldName":"name_of_associated_covered_drug_or_biological5","position":33,"tableColumnId":22158101,"width":410,"format":{},"metadata":{}},{"id":180496864,"name":"NDC_of_Associated_Covered_Drug_or_Biological1","dataTypeName":"text","fieldName":"ndc_of_associated_covered_drug_or_biological1","position":34,"tableColumnId":22158102,"width":389,"format":{},"metadata":{}},{"id":180496865,"name":"NDC_of_Associated_Covered_Drug_or_Biological2","dataTypeName":"text","fieldName":"ndc_of_associated_covered_drug_or_biological2","position":35,"tableColumnId":22158103,"width":384,"format":{},"metadata":{}},{"id":180496866,"name":"NDC_of_Associated_Covered_Drug_or_Biological3","dataTypeName":"text","fieldName":"ndc_of_associated_covered_drug_or_biological3","position":36,"tableColumnId":22158104,"width":383,"format":{},"metadata":{}},{"id":180496867,"name":"NDC_of_Associated_Covered_Drug_or_Biological4","dataTypeName":"text","fieldName":"ndc_of_associated_covered_drug_or_biological4","position":37,"tableColumnId":22158105,"width":391,"format":{},"metadata":{}},{"id":180496868,"name":"NDC_of_Associated_Covered_Drug_or_Biological5","dataTypeName":"text","fieldName":"ndc_of_associated_covered_drug_or_biological5","position":38,"tableColumnId":22158106,"width":384,"format":{},"metadata":{}},{"id":180496869,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply1","dataTypeName":"text","fieldName":"name_of_associated_covered_device_or_medical_supply1","position":39,"tableColumnId":22158107,"width":438,"format":{},"metadata":{}},{"id":180496870,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply2","dataTypeName":"text","fieldName":"name_of_associated_covered_device_or_medical_supply2","position":40,"tableColumnId":22158108,"width":435,"format":{},"metadata":{}},{"id":180496871,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply3","dataTypeName":"text","fieldName":"name_of_associated_covered_device_or_medical_supply3","position":41,"tableColumnId":22158109,"width":438,"format":{},"metadata":{}},{"id":180496872,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply4","dataTypeName":"text","fieldName":"name_of_associated_covered_device_or_medical_supply4","position":42,"tableColumnId":22158110,"width":440,"format":{},"metadata":{}},{"id":180496873,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply5","dataTypeName":"text","fieldName":"name_of_associated_covered_device_or_medical_supply5","position":43,"tableColumnId":22158111,"width":450,"format":{},"metadata":{}},{"id":180496874,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_Name","dataTypeName":"text","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_name","position":44,"tableColumnId":22158112,"width":510,"format":{},"metadata":{}},{"id":180496875,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_ID","dataTypeName":"text","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_id","position":45,"tableColumnId":22158113,"width":493,"format":{},"metadata":{}},{"id":180496876,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_State","dataTypeName":"text","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_state","position":46,"tableColumnId":22158114,"width":499,"format":{},"metadata":{}},{"id":180496877,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_Country","dataTypeName":"text","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_country","position":47,"tableColumnId":22158115,"width":518,"format":{},"metadata":{}},{"id":180496878,"name":"Dispute_Status_for_Publication","dataTypeName":"text","fieldName":"dispute_status_for_publication","position":48,"tableColumnId":22158116,"width":269,"format":{},"metadata":{}},{"id":180496879,"name":"Total_Amount_of_Payment_USDollars","dataTypeName":"money","fieldName":"total_amount_of_payment_usdollars","position":49,"tableColumnId":22158117,"width":322,"format":{},"metadata":{}},{"id":180496880,"name":"Date_of_Payment","dataTypeName":"calendar_date","fieldName":"date_of_payment","position":50,"tableColumnId":22158118,"width":199,"format":{"align":"left","view":"date"},"metadata":{}},{"id":180496881,"name":"Number_of_Payments_Included_in_Total_Amount","dataTypeName":"number","fieldName":"number_of_payments_included_in_total_amount","position":51,"tableColumnId":22158119,"width":384,"format":{},"metadata":{}},{"id":180496882,"name":"Form_of_Payment_or_Transfer_of_Value","dataTypeName":"text","fieldName":"form_of_payment_or_transfer_of_value","position":52,"tableColumnId":22158120,"width":327,"format":{},"metadata":{}},{"id":180496883,"name":"Nature_of_Payment_or_Transfer_of_Value","dataTypeName":"text","fieldName":"nature_of_payment_or_transfer_of_value","position":53,"tableColumnId":22158121,"width":329,"format":{},"metadata":{}},{"id":180496884,"name":"City_of_Travel","dataTypeName":"text","fieldName":"city_of_travel","position":54,"tableColumnId":22158122,"width":171,"format":{},"metadata":{}},{"id":180496885,"name":"State_of_Travel","dataTypeName":"text","fieldName":"state_of_travel","position":55,"tableColumnId":22158123,"width":182,"format":{},"metadata":{}},{"id":180496886,"name":"Country_of_Travel","dataTypeName":"text","fieldName":"country_of_travel","position":56,"tableColumnId":22158124,"width":188,"format":{},"metadata":{}},{"id":180496887,"name":"Physician_Ownership_Indicator","dataTypeName":"text","fieldName":"physician_ownership_indicator","position":57,"tableColumnId":22158125,"width":264,"format":{},"metadata":{}},{"id":180496888,"name":"Third_Party_Payment_Recipient_Indicator","dataTypeName":"text","fieldName":"third_party_payment_recipient_indicator","position":58,"tableColumnId":22158126,"width":324,"format":{},"metadata":{}},{"id":180496889,"name":"Name_of_Third_Party_Entity_Receiving_Payment_or_Transfer_of_Value","dataTypeName":"text","fieldName":"name_of_third_party_entity_receiving_payment_or_transfer_of_value","position":59,"tableColumnId":22158127,"width":503,"format":{},"metadata":{}},{"id":180496890,"name":"Charity_Indicator","dataTypeName":"text","fieldName":"charity_indicator","position":60,"tableColumnId":22158128,"width":178,"format":{},"metadata":{}},{"id":180496891,"name":"Third_Party_Equals_Covered_Recipient_Indicator","dataTypeName":"text","fieldName":"third_party_equals_covered_recipient_indicator","position":61,"tableColumnId":22158129,"width":370,"format":{},"metadata":{}},{"id":180496892,"name":"Contextual_Information","dataTypeName":"text","fieldName":"contextual_information","position":62,"tableColumnId":22158130,"width":217,"format":{},"metadata":{}},{"id":180496893,"name":"Delay_in_Publication_of_General_Payment_Indicator","dataTypeName":"text","fieldName":"delay_in_publication_of_general_payment_indicator","position":63,"tableColumnId":22158131,"width":397,"format":{},"metadata":{}}],"id":"hrpy-hqv8","name":"General Payment Data with Identifying Recipient Information \u2013 Detailed Dataset 2013 Reporting Year","description":"All general (non-research, non-ownership related) payments made to physicians  and teaching hospitals where identifying data about the recipients, such as name, address, and specialty, are included.","displayType":"table","publicationAppendEnabled":false,"metadata":{"renderTypeConfig":{"visible":{"table":true}},"availableDisplayTypes":["table","fatrow","page"],"rdfSubject":"0","filterCondition":{"value":"AND","children":[{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158075},"operator":"EQUALS"}},{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158079},"operator":"EQUALS"}},{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158083},"operator":"EQUALS"}},{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158084},"operator":"EQUALS"}},{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158085},"operator":"EQUALS"}}],"type":"operator","metadata":{"unifiedVersion":2,"advanced":true}},"feature_flags":{"useSoda2":"false","disable_dataset_search_box":"true"},"jsonQuery":{}},"query":{},"flags":["default"],"originalViewId":"hrpy-hqv8","displayFormat":{}}');