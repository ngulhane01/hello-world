<?php

namespace Psi\Eos\Entrata;

/**
 * EOS PLURAL CLASS
 * Warning: This is a composite key based class. If you are regenerating the this
 * class again, please do so by checking the composite key checkbox.
 *
 * Following methods from class \CMaintenanceRequests are not generated as they are
 * not compatible.
 * Please note that only public and static/non static methods are generated.
 * All private, protected, final and magic methods are excluded.
 * @todo : Review method preparePaginatedMaintenanceRequestsWhereCondition()
 * @todo : Review method loadCommonFilterConditions()
 */
class CMaintenanceRequests extends \Psi\Eos\CEosPluralBase {

	/**
	 * @param string $strSql
	 * @param \CDatabase $objDatabase
	 * @param bool $boolIsReturnKeyedArray When true array keyed by id is returned
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequests( $strSql, $objDatabase, $boolIsReturnKeyedArray = true ) {
		return $this->fetchObjects( $strSql, \CMaintenanceRequest::class, $objDatabase, $boolIsReturnKeyedArray );
	}

	/**
	 * @param string $strSql
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest
	 */
	public function fetchMaintenanceRequest( $strSql, $objDatabase ) {
		return $this->fetchObject( $strSql, \CMaintenanceRequest::class, $objDatabase );
	}

	/**
	 * @param string $strWhere Specify the where clause
	 * @param \CDatabase $objDatabase
	 * @return int Row count
	 */
	public function fetchMaintenanceRequestCount( $strWhere, $objDatabase ) {
		return $this->fetchRowCount( $strWhere, 'view_maintenance_requests', $objDatabase );
	}

	/**
	 * @param int $intId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest
	 */
	public function fetchMaintenanceRequestByIdByCid( $intId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequest( sprintf( 'SELECT * FROM view_maintenance_requests WHERE id = %d AND cid = %d', $intId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByCid( $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE cid = %d', $intCid ), $objDatabase );
	}

	/**
	 * @param int $intParentMaintenanceRequestId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByParentMaintenanceRequestIdByCid( $intParentMaintenanceRequestId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE parent_maintenance_request_id = %d AND cid = %d', $intParentMaintenanceRequestId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intPropertyId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByPropertyIdByCid( $intPropertyId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE property_id = %d AND cid = %d', $intPropertyId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intPropertyBuildingId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByPropertyBuildingIdByCid( $intPropertyBuildingId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE property_building_id = %d AND cid = %d', $intPropertyBuildingId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intPropertyUnitId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByPropertyUnitIdByCid( $intPropertyUnitId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE property_unit_id = %d AND cid = %d', $intPropertyUnitId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intUnitSpaceId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByUnitSpaceIdByCid( $intUnitSpaceId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE unit_space_id = %d AND cid = %d', $intUnitSpaceId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intCustomerId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByCustomerIdByCid( $intCustomerId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE customer_id = %d AND cid = %d', $intCustomerId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intLeaseId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByLeaseIdByCid( $intLeaseId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE lease_id = %d AND cid = %d', $intLeaseId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intJobProjectId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByJobProjectIdByCid( $intJobProjectId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE job_project_id = %d AND cid = %d', $intJobProjectId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intMaintenancePriorityId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByMaintenancePriorityIdByCid( $intMaintenancePriorityId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE maintenance_priority_id = %d AND cid = %d', $intMaintenancePriorityId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intMaintenanceStatusId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByMaintenanceStatusIdByCid( $intMaintenanceStatusId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE maintenance_status_id = %d AND cid = %d', $intMaintenanceStatusId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intMaintenanceLocationId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByMaintenanceLocationIdByCid( $intMaintenanceLocationId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE maintenance_location_id = %d AND cid = %d', $intMaintenanceLocationId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intPropertyUnitMaintenanceLocationId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByPropertyUnitMaintenanceLocationIdByCid( $intPropertyUnitMaintenanceLocationId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE property_unit_maintenance_location_id = %d AND cid = %d', $intPropertyUnitMaintenanceLocationId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intMaintenanceProblemId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByMaintenanceProblemIdByCid( $intMaintenanceProblemId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE maintenance_problem_id = %d AND cid = %d', $intMaintenanceProblemId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intSubMaintenanceProblemId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsBySubMaintenanceProblemIdByCid( $intSubMaintenanceProblemId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE sub_maintenance_problem_id = %d AND cid = %d', $intSubMaintenanceProblemId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intRecurringMaintenanceRequestId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByRecurringMaintenanceRequestIdByCid( $intRecurringMaintenanceRequestId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE recurring_maintenance_request_id = %d AND cid = %d', $intRecurringMaintenanceRequestId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intCompanyEmployeeId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByCompanyEmployeeIdByCid( $intCompanyEmployeeId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE company_employee_id = %d AND cid = %d', $intCompanyEmployeeId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intApPayeeId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByApPayeeIdByCid( $intApPayeeId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE ap_payee_id = %d AND cid = %d', $intApPayeeId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intPsProductId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByPsProductIdByCid( $intPsProductId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE ps_product_id = %d AND cid = %d', $intPsProductId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intMaintenanceTemplateId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByMaintenanceTemplateIdByCid( $intMaintenanceTemplateId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE maintenance_template_id = %d AND cid = %d', $intMaintenanceTemplateId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intMaintenanceRequestTypeId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByMaintenanceRequestTypeIdByCid( $intMaintenanceRequestTypeId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE maintenance_request_type_id = %d AND cid = %d', $intMaintenanceRequestTypeId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intMainPhoneNumberTypeId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByMainPhoneNumberTypeIdByCid( $intMainPhoneNumberTypeId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE main_phone_number_type_id = %d AND cid = %d', $intMainPhoneNumberTypeId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intAltPhoneNumberTypeId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByAltPhoneNumberTypeIdByCid( $intAltPhoneNumberTypeId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE alt_phone_number_type_id = %d AND cid = %d', $intAltPhoneNumberTypeId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intAssetId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByAssetIdByCid( $intAssetId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE asset_id = %d AND cid = %d', $intAssetId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intAddOnId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByAddOnIdByCid( $intAddOnId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE add_on_id = %d AND cid = %d', $intAddOnId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intMaintenanceGroupId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByMaintenanceGroupIdByCid( $intMaintenanceGroupId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE maintenance_group_id = %d AND cid = %d', $intMaintenanceGroupId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intMaintenanceExceptionId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByMaintenanceExceptionIdByCid( $intMaintenanceExceptionId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE maintenance_exception_id = %d AND cid = %d', $intMaintenanceExceptionId, $intCid ), $objDatabase );
	}

	/**
	 * @param int $intUpdatedPsProductId
	 * @param int $intCid
	 * @param \CDatabase $objDatabase
	 * @return \CMaintenanceRequest[]
	 */
	public function fetchMaintenanceRequestsByUpdatedPsProductIdByCid( $intUpdatedPsProductId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM view_maintenance_requests WHERE updated_ps_product_id = %d AND cid = %d', $intUpdatedPsProductId, $intCid ), $objDatabase );
	}

	public function fetchMakeReadyMaintenanceRequestsByUnitSpaceIdByCid( $intUnitSpaceId, $intCid, $objDatabase, $arrintMaintenanceStatusIds = NULL, $boolIsFectchSubTasks = false ) {
		if( false == \valId( $intUnitSpaceId ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON ( vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id )
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL
						AND vmr.unit_space_id = ' . ( int ) $intUnitSpaceId . '
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . '
						AND mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';

		if( false == $boolIsFectchSubTasks ) {
			$strSql .= ' AND vmr.parent_maintenance_request_id IS NULL ';
		}

		if( true == \valArr( $arrintMaintenanceStatusIds ) ) {
			$strSql .= ' AND vmr.maintenance_status_id NOT IN ( ' . implode( ',', $arrintMaintenanceStatusIds ) . ' )';
		}

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMakeReadyMaintenanceRequestsByCustomerIdByLeaseIdByCid( $intCustomerId, $intLeaseId, $intCid, $objDatabase, $intUnitSpaceId = NULL ) {
		if( ( false == \valId( $intCustomerId ) || false == \valId( $intLeaseId ) ) && false == \valId( $intUnitSpaceId ) ) {
			return NULL;
		}

		$strSqlWhere = '';

		if( true == \valId( $intCustomerId ) && true == \valId( $intLeaseId ) ) {
			$strSqlWhere .= ' ( vmr.customer_id = ' . ( int ) $intCustomerId . ' 
							  AND vmr.lease_id = ' . ( int ) $intLeaseId . ' )';

			if( true == \valId( $intUnitSpaceId ) ) {
				$strSqlWhere = ' AND ( ' . $strSqlWhere . ' OR vmr.unit_space_id = ' . ( int ) $intUnitSpaceId . ' )';
			} else {
				$strSqlWhere = ' AND ' . $strSqlWhere;
			}
		} elseif( true == \valId( $intUnitSpaceId ) ) {
			$strSqlWhere = ' AND vmr.unit_space_id = ' . ( int ) $intUnitSpaceId;
		}

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON ( vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id )
					WHERE
						vmr.cid = ' . ( int ) $intCid
		          . $strSqlWhere . '
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . '
						AND mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
						AND vmr.deleted_by IS NULL
						AND vmr.parent_maintenance_request_id IS NULL
					ORDER BY
						vmr.created_on DESC
					LIMIT 1 ';

		return $this->fetchMaintenanceRequest( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsDetailsByMaintenanceRequestIdsByPropertyIdsByCIds( $arrintMaintenanceRequestIds, $arrintPropertyIds, $intCid, $objDatabase ) {
		if( false == \valArr( $arrintMaintenanceRequestIds ) || false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}

		$arrstrProductName = \CPsProduct::createService()->getProductNames();

		$strSql = 'SELECT
						mr.id AS maintenance_request_id,
						mr.parent_maintenance_request_id,
						mr.created_on AS maintenance_request_created_on,
						mrd.scheduled_start_datetime,
						mrd.scheduled_end_datetime,
						pa.street_line1,
						pa.street_line2,
						pa.city,
						pa.state_code,
						pa.postal_code,
						util_get_translated( \'name\', mp.name, mp.details ) AS priority_name,
						util_get_translated( \'name\', ms.name, ms.details ) AS status_name,
						mpr.name AS maintenance_problem_name,
						mpr1.name AS maintenance_category_name,
						CASE WHEN ml.is_system = 1 THEN NULL WHEN puml.name IS NOT NULL THEN puml.name ELSE ml.name END AS maintenance_location_name,
						tz.time_zone_name AS time_zone_name,
						mlt.name AS maintenance_location_type_name,
						ce.name_first AS company_employee_name_first,
						ce.name_last AS company_employee_name_last,
						c.name_full AS customer_full_name,
						mrd.email_address,
						mrd.main_phone_number,
						p.property_name,
						pb.building_name,
						COALESCE( us.unit_number_cache, pu.unit_number, mrd.unit_number ) AS unit_number_cache,
						mrd.permission_to_enter,
						mrd.problem_description,
						mr.ps_product_id,
						mr.created_on,
						mr.remote_primary_key,
						mr.sub_maintenance_problem_id,
						mpr2.name AS action_name,
						mpr2.is_published AS is_published_problem_action,
						mr.property_id,
						mr.maintenance_request_type_id,
						l.id AS lease_id,
						mr.printed_on,
						mr.customer_id,
						mrd.is_pet,
						mr.ps_product_id,
						ld.alarm_key,
						mr.created_by,
						CASE
							WHEN lp.move_out_date IS NOT NULL
							THEN ( date( lp.move_out_date ) + 1 )- date( lp.move_in_date )
							ELSE ( date( now() ) + 1 ) - date( lp.move_in_date )
						END AS days_occupied,
		                CASE
							WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
								\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::PMS_INTEGRATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::PMS_INTEGRATION] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::SITE_TABLET . ' THEN
								\'' . $arrstrProductName[\CPsProduct::SITE_TABLET] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::INSPECTION_MANAGER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::INSPECTION_MANAGER] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::API_SERVICES . ' THEN
								\'' . $arrstrProductName[\CPsProduct::API_SERVICES] . '\'
						END as origin,
						mrd.requested_datetime,
						mr.due_date,
                        mp.maintenance_priority_type_id,
                        ms.maintenance_status_type_id,
                        pu.unit_number,
                        CASE
							WHEN pu.id IS NOT NULL
							THEN 
								( SELECT COUNT(tempus.id)
								FROM unit_spaces tempus
								WHERE tempus.property_unit_id = pu.id 
										AND tempus.unit_space_status_type_id IN ( ' . \CUnitSpaceStatusType::OCCUPIED_NO_NOTICE . ', ' . \CUnitSpaceStatusType::NOTICE_RENTED . ', ' . \CUnitSpaceStatusType::NOTICE_UNRENTED . ' ) 
										AND tempus.current_lease_id IS NOT NULL AND tempus.cid = pu.cid )
							ELSE 0
						END AS occupied_unit_spaces,
						ap.company_name  AS vendor_name
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
						LEFT JOIN lease_details ld ON ( mr.cid = ld.cid AND mr.lease_id = ld.lease_id )
						LEFT JOIN leases l ON (mr.cid = l.cid AND mr.property_id = l.property_id AND mr.lease_id = l.id)
						LEFT JOIN lease_processes lp ON (l.cid = lp.cid AND lp.lease_id = l.id AND lp.customer_id IS NULL)
						LEFT JOIN property_addresses pa ON ( mr.cid = pa.cid AND mr.property_id = pa.property_id AND address_type_id = ' . \CAddressType::PRIMARY . ' AND pa.is_alternate = false )
						LEFT JOIN properties p ON ( p.cid = mr.cid AND p.id = mr.property_id )
						JOIN maintenance_priorities mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_priority_id )
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
						LEFT JOIN company_employees ce ON ( ce.cid = mr.cid AND ce.id = mr.company_employee_id )
						LEFT JOIN maintenance_problems mpr ON ( mr.cid=mpr.cid AND mpr.id=mr.maintenance_problem_id )
						LEFT JOIN maintenance_problems mpr1 ON ( mpr.cid = mpr1.cid AND mpr1.id = mpr.maintenance_problem_id )
						LEFT JOIN maintenance_problems mpr2 ON ( mr.cid = mpr2.cid AND mpr2.id = mr.sub_maintenance_problem_id )
						LEFT JOIN maintenance_locations ml ON ( mr.cid=ml.cid AND mr.maintenance_location_id=ml.id )
						LEFT JOIN maintenance_location_types mlt ON ( mlt.id = ml.maintenance_location_type_id )
						LEFT JOIN time_zones AS tz ON ( p.time_zone_id = tz.id )
						LEFT JOIN property_units pu ON ( mr.cid = pu.cid AND mr.property_id = pu.property_id AND ( ( l.property_unit_id = pu.id AND mr.lease_id IS NOT NULL ) OR ( mr.property_unit_id = pu.id AND mr.lease_id IS NULL ) ) )
						LEFT JOIN property_buildings pb ON ( pb.cid = pu.cid AND pb.property_id = pu.property_id AND pb.id = pu.property_building_id )
						LEFT JOIN inspections i ON ( i.cid = mr.cid AND mr.property_id = i.property_id AND i.maintenance_request_id = mr.id )
						LEFT JOIN unit_spaces us ON ( us.cid = mr.cid AND us.property_id = mr.property_id AND ( ( l.unit_space_id = us.id AND mr.lease_id IS NOT NULL ) OR ( mr.unit_space_id = us.id AND mr.lease_id IS NULL ) OR ( i.unit_space_id = us.id AND mr.lease_id IS NULL AND mr.unit_space_id IS NULL ) ) )
						LEFT JOIN customers c ON ( mr.cid = c.cid AND mr.customer_id = c.id )
						LEFT JOIN ap_payees ap ON ( mr.ap_payee_id = ap.id AND mr.cid = ap.cid )
						LEFT JOIN property_unit_maintenance_locations puml ON (mr.cid = puml.cid AND mr.property_unit_maintenance_location_id = puml.id)
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' )
						AND ( mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' ) OR mr.parent_maintenance_request_id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' ) )
						AND mr.deleted_on IS NULL
						AND mr.deleted_by IS NULL
					ORDER BY
						mr.parent_maintenance_request_id desc,
						idx(ARRAY[' . implode( ',', $arrintMaintenanceRequestIds ) . '],mr.id)';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchCustomMaintenanceRequestByIdByCid( $intId, $intCid, $objDatabase, $boolIncludeDeletedUnits = false, $boolIncludeDeletedWorkOrder = false ) {
		if( false == \valId( $intId ) ) {
			return NULL;
		}

		$strCheckDeletedUnitsSql = ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';
		$strCheckDeletedWorkOrdersSql = ( false == $boolIncludeDeletedWorkOrder ) ? ' AND vmr.deleted_on IS NULL' : '';

		$strSql = ' SELECT util_set_locale( \'' . \CLocaleContainer::createService()->getLocaleCode() . '\', \'' . \CLocaleContainer::createService()->getDefaultLocaleCode() . '\' );
		SELECT
						vmr.id,
						vmr.cid,
						vmr.parent_maintenance_request_id,
						vmr.property_id,
						vmr.property_building_id,
						vmr.property_unit_id,
						vmr.unit_space_id,
						vmr.customer_id,
						vmr.lease_id,
						vmr.maintenance_priority_id,
						vmr.maintenance_status_id,
						vmr.maintenance_location_id,
						vmr.property_unit_maintenance_location_id,
						vmr.maintenance_problem_id,
						vmr.sub_maintenance_problem_id,
						vmr.recurring_maintenance_request_id,
						vmr.company_employee_id,
						vmr.ap_payee_id,
						vmr.ps_product_id,
						vmr.updated_ps_product_id,
						vmr.maintenance_template_id,
						vmr.maintenance_request_type_id,
						vmr.main_phone_number_type_id,
						vmr.alt_phone_number_type_id,
						vmr.asset_id,
						vmr.remote_primary_key,
						vmr.due_date,
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						vmr.permission_to_enter,
						CASE WHEN mst.maintenance_status_type_id = ' . \CMaintenanceStatusType::OPEN . ' THEN ld.alarm_key ELSE NULL END AS alarm_code,
						vmr.requested_datetime,
						CASE
							WHEN date_part ( \'hour\', vmr.requested_datetime ) >= 0 AND date_part ( \'hour\', vmr.requested_datetime ) <= 11 THEN
								\'Morning\'
							ELSE
								\'Afternoon\'
						END AS requested_time,
						vmr.scheduled_start_datetime,
						vmr.scheduled_end_datetime,
						vmr.actual_start_datetime,
						vmr.completed_datetime,
						vmr.ignore_response_times,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						vmr.customer_name_first,
						vmr.customer_name_first_encrypted,
						vmr.customer_name_last,
						vmr.customer_name_last_encrypted,
						c.name_full AS customer_full_name,
						COALESCE ( util_get_translated( \'unit_number\', us.unit_number_cache, us.details ), pu.unit_number, vmr.unit_number ) AS unit_number,
						CASE
							WHEN ( SELECT count( id ) FROM unit_spaces WHERE property_unit_id = us.property_unit_id AND cid = us.cid ) > 1
							THEN space_number
							ELSE \'\'
						END AS space_number,
						vmr.main_phone_number,
						vmr.main_phone_number_encrypted,
						vmr.alt_phone_number,
						vmr.alt_phone_number_encrypted,
						vmr.email_address,
						vmr.sms_confirmed_on,
						vmr.is_pet,
						vmr.is_resident_visible,
						vmr.imported_on,
						vmr.exported_on,
						vmr.printed_on,
						vmr.deleted_by,
						vmr.deleted_on,
						vmr.updated_by,
						vmr.updated_on,
						vmr.created_by,
						vmr.created_on,
 						pb.building_name,
						mst.maintenance_status_type_id,
						util_get_translated( \'name\', mrp.name, mrp.details ) AS maintenance_problem_name,
						COALESCE( mpc.name, \'Not Categorized\' ) As maintenance_category_name,
						mrpa.name AS maintenance_problem_action_name,
						mrpa.is_published AS is_published_problem_action,
						COALESCE ( mrp.maintenance_problem_id, 0 ) AS maintenance_category_id,
						util_get_translated( \'name\', mst.name, mst.details ) AS maintenance_status_name,
						util_get_system_translated( \'name\', mst1.name, mst1.details ) AS maintenance_status_type_name,
						CASE WHEN ml.is_system = 1 THEN NULL
							WHEN puml.name IS NOT NULL THEN util_get_translated( \'name\', puml.name, puml.details )
							ELSE util_get_translated( \'name\', ml.name, ml.details )
						END AS maintenance_location_name,
						ml.maintenance_location_type_id AS maintenance_location_type,
						ce.name_first,
						vmr.maintenance_group_id,
						ce.name_last,
						mp.maintenance_priority_type_id AS maintenance_priority_type_id,
						i.id AS inspection_id,
						cev.id AS calendar_event_id,
						CASE WHEN cu.company_employee_id IS NULL THEN \'System\' END AS username,
						CASE
							WHEN vmr.remote_primary_key IS NOT NULL AND vmr.ps_product_id = ' . \CPsProduct::ENTRATA . '
								THEN \'Migration\'
							WHEN vmr.remote_primary_key IS NOT NULL AND vmr.ps_product_id != ' . \CPsProduct::ENTRATA . '
								THEN \'Integration\'
							WHEN vmr.ps_product_id IS NOT NULL AND ( vmr.ps_product_id IN ( ' . \CPsProduct::RESIDENT_PORTAL . ',' . \CPsProduct::FACEBOOK_INTEGRATION . ' ) OR ( vmr.ps_product_id = ' . \CPsProduct::SITE_TABLET . ' AND vmr.created_by = ' . \CCompanyUser::RESIDENT_SYNC_APP . ' )) AND vmr.customer_name_first IS NOT NULL
								THEN c.name_full
							WHEN vmr.ps_product_id IS NOT NULL AND ( vmr.ps_product_id IN ( ' . \CPsProduct::RESIDENT_PORTAL . ',' . \CPsProduct::FACEBOOK_INTEGRATION . ' ) OR ( vmr.ps_product_id = ' . \CPsProduct::SITE_TABLET . ' AND vmr.created_by = ' . \CCompanyUser::RESIDENT_SYNC_APP . ' )) AND vmr.customer_name_first IS NULL AND c.name_full IS NOT NULL
								THEN c.name_full
							WHEN (vmr.ps_product_id IS NULL OR vmr.ps_product_id NOT IN ( ' . \CPsProduct::RESIDENT_PORTAL . ',' . \CPsProduct::FACEBOOK_INTEGRATION . ' )) AND ( cu.id < ' . \CCompanyUser::MAX_PSI_ADMIN_USER_ID . ' or cu.username LIKE  \'%PSI Admin%\' )
								THEN \'Entrata Support\'
							WHEN (vmr.ps_product_id IS NULL OR vmr.ps_product_id NOT IN ( ' . \CPsProduct::RESIDENT_PORTAL . ',' . \CPsProduct::FACEBOOK_INTEGRATION . ' )) AND (ce.name_first IS NOT NULL OR ce.name_last IS NOT NULL)
								THEN ce.name_first || \' \' || ce.name_last
							WHEN (vmr.ps_product_id IS NULL OR vmr.ps_product_id NOT IN ( ' . \CPsProduct::RESIDENT_PORTAL . ',' . \CPsProduct::FACEBOOK_INTEGRATION . ' )) AND (ce.name_first IS NULL OR ce.name_last IS NULL)
								THEN cu.username
						END AS work_order_created_by,
						p.property_name,
						vmr.response_duration,
						vmr.required_response_datetime,
						vmr.maintenance_exception_id,
						vmr.details
					FROM
						view_maintenance_requests vmr
						JOIN properties p ON (vmr.property_id = p.id AND vmr.cid = p.cid)
						JOIN maintenance_statuses mst ON ( vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id )
						JOIN maintenance_status_types mst1 ON ( mst.maintenance_status_type_id = mst1.id )
						LEFT JOIN maintenance_problems mrp ON ( vmr.cid = mrp.cid AND vmr.maintenance_problem_id = mrp.id )
						LEFT JOIN maintenance_problems mpc ON ( mpc.cid = mrp.cid AND mrp.maintenance_problem_id = mpc.id )
				 		LEFT JOIN maintenance_problems mrpa ON ( vmr.cid = mrpa.cid AND vmr.sub_maintenance_problem_id = mrpa.id )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
						JOIN company_users cu ON ( cu.cid = vmr.cid AND cu.id = vmr.created_by AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' ) )
						LEFT JOIN company_employees ce ON ( vmr.cid = ce.cid AND cu.company_employee_id = ce.id )
						LEFT JOIN inspections i ON ( i.cid = vmr.cid AND vmr.property_id = i.property_id AND i.maintenance_request_id = vmr.id )
						JOIN maintenance_priorities mp ON ( vmr.cid = mp.cid AND vmr.maintenance_priority_id = mp.id )
						LEFT JOIN customers c ON ( vmr.cid = c.cid AND vmr.customer_id = c.id )
						LEFT JOIN leases l ON ( vmr.cid = l.cid AND vmr.property_id = l.property_id AND vmr.lease_id = l.id )
						LEFT JOIN lease_details ld ON ( l.cid = ld.cid AND l.id = ld.lease_id )
						LEFT JOIN property_units pu ON ( vmr.cid = pu.cid AND vmr.property_id = pu.property_id AND ( ( l.property_unit_id = pu.id AND vmr.lease_id IS NOT NULL ) OR ( vmr.property_unit_id = pu.id AND vmr.lease_id IS NULL )  ) ' . $strCheckDeletedUnitsSql . ' )
						LEFT JOIN property_buildings pb ON ( pb.cid = pu.cid AND pb.property_id = pu.property_id AND pb.id = pu.property_building_id )
						LEFT JOIN unit_spaces us ON ( us.cid = vmr.cid AND us.property_id = vmr.property_id AND us.id = vmr.unit_space_id )
						JOIN calendar_event_types cet ON ( cet.cid = vmr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
						LEFT JOIN calendar_events cev ON ( cev.cid = vmr.cid AND cev.reference_id = vmr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
						LEFT JOIN property_unit_maintenance_locations puml ON (vmr.cid = puml.cid AND vmr.property_unit_maintenance_location_id = puml.id)
					WHERE
						vmr.cid=' . ( int ) $intCid . $strCheckDeletedWorkOrdersSql . '
						AND vmr.id=' . ( int ) $intId;

		return $this->fetchMaintenanceRequest( $strSql, $objDatabase );
	}

	public function fetchCustomAllowedMaintenanceRequestByIdByCompanyUserIdByCid( $intCompanyUserId, $intId, $intCid, $boolIsAdministrator, $objDatabase, $boolIncludeDeletedUnits = false ) {

		$strCompanyUserSql = $this->buildCompanyUserPropertiesSql( $intCid, $intCompanyUserId, $boolIsAdministrator );

		$strCheckDeletedUnitsSql = ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						vmr.customer_name_first AS customer_name_first,
						vmr.customer_name_last AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*,
						pb.building_name,
						COALESCE ( us.unit_number_cache,vmr.unit_number, pu.unit_number ) AS unit_number,
						mst.maintenance_status_type_id,
						util_get_translated( \'name\', ls.name, ls.details ) AS resident_status_type_name,
						mst.name AS maintenance_status_name,
						mp.maintenance_priority_type_id,
						c.name_full AS customer_full_name
					FROM
						view_maintenance_requests vmr
						LEFT JOIN property_units pu ON ( vmr.property_unit_id = pu.id AND vmr.cid = pu.cid ' . $strCheckDeletedUnitsSql . ' )
						LEFT JOIN property_buildings pb ON (  pu.cid = pb.cid AND pb.id =   CASE WHEN(vmr.property_building_id IS NOT NULL )THEN vmr.property_building_id ELSE pu.property_building_id END)
						JOIN maintenance_statuses mst ON ( vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid )
						LEFT JOIN lease_customers lc ON vmr.cid = lc.cid AND vmr.lease_id = lc.lease_id AND vmr.customer_id = lc.customer_id
						LEFT JOIN lease_status_types ls ON lc.lease_status_type_id = ls.id
						LEFT JOIN unit_spaces us ON ( vmr.cid = us.cid AND vmr.property_id = us.property_id AND vmr.unit_space_id = us.id )
						JOIN maintenance_priorities mp ON ( vmr.maintenance_priority_id = mp.id AND vmr.cid = mp.cid )
						JOIN ( ' . $strCompanyUserSql . ' ) AS cp on ( cp.id = vmr.property_id AND cp.cid = vmr.cid )
						LEFT JOIN customers c ON ( c.cid = lc.cid AND c.id = lc.customer_id )
					WHERE
						vmr.cid=' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL
						AND vmr.id=' . ( int ) $intId;

		return $this->fetchMaintenanceRequest( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByIdsByCid( $arrintMaintenanceRequestIds, $intCid, $objDatabase, $boolIsShowSubTasks = false ) {
		if( false == \valArr( $arrintMaintenanceRequestIds ) ) {
			return [];
		}

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						vmr.*,
						COALESCE ( util_get_translated( \'unit_number_cache\', us.unit_number_cache, us.details ), util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ), util_get_translated( \'unit_number\', pu.unit_number, pu.details ) ) AS unit_number,
						mst.maintenance_status_type_id,
						util_get_translated( \'name\', mst.name, mst.details ) AS maintenance_status_name,
						util_get_translated( \'name\', mrt.name, mrt.details ) AS maintenance_request_type,
						util_get_translated( \'name\', mp.name, mp.details ) AS maintenance_problem_name,
						CASE 
							WHEN ml.is_system = 1 THEN NULL 
							WHEN puml.name IS NOT NULL AND vmr.property_unit_maintenance_location_id IS NOT NULL THEN util_get_translated( \'name\', puml.name, puml.details ) 
							ELSE util_get_translated( \'name\', ml.name, ml.details )  
						END AS maintenance_location_name
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON ( vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid )
						LEFT JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
						LEFT JOIN maintenance_problems mp ON ( mp.id = vmr.maintenance_problem_id AND vmr.cid = mp.cid )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
						LEFT JOIN property_unit_maintenance_locations puml ON ( puml.cid = vmr.cid AND puml.id = vmr.property_unit_maintenance_location_id )
						LEFT JOIN property_units pu ON ( pu.cid = vmr.cid AND pu.id = vmr.property_unit_id AND pu.property_id = vmr.property_id AND pu.deleted_on IS NULL )
						LEFT JOIN unit_spaces us ON ( us.cid = vmr.cid AND us.property_id = vmr.property_id AND us.id = vmr.unit_space_id )
					WHERE
						vmr.cid=' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL';

		if( true == $boolIsShowSubTasks ) {
			$strSql .= ' AND ( ( vmr.parent_maintenance_request_id IS NOT NULL
						AND vmr.parent_maintenance_request_id IN (' . implode( ',', $arrintMaintenanceRequestIds ) . ') )
						OR vmr.id IN (' . implode( ',', $arrintMaintenanceRequestIds ) . ') )';
		} else {
			$strSql .= ' AND vmr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' ) ';
		}

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchCustomMaintenanceRequestsByMaintenanceStatusIdByCid( $intMaintenanceStatusId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM maintenance_requests WHERE cid::integer = %d AND maintenance_status_id::integer = %d AND deleted_by IS NULL ORDER BY created_on', ( int ) $intCid, ( int ) $intMaintenanceStatusId ), $objDatabase );
	}

	public function fetchPaginatedMaintenanceRequestsByMaintenanceFilter( $intPageNo, $intPageSize, $objDatabase, $objMaintenanceFilter, $boolIsFetchData = false, $boolIsApplyFilterCrieteria = false, $boolIsFromDashboard = false, $intTotalMaintenanceGroupsCount = NULL, $intMaintenanceGroupsOnPage = NULL, $boolIsShowAllWorkOrdersOnUnit = false, $arrintPmEnabledPropertyIds = [] ) {
		$arrstrProductName = \CPsProduct::createService()->getProductNames();

		if( false == is_null( $objMaintenanceFilter->getOrderByField() ) && 0 < strlen( $objMaintenanceFilter->getOrderByField() ) ) {

			$strOrderByField 		= $objMaintenanceFilter->getOrderByField();
			$strOrderBy				= '';
			$strOrderByType			= '';

			if( 0 == $objMaintenanceFilter->getOrderByType() ) {
				$strOrderByType = DESC;
			} else {
				$strOrderByType = ASC;
			}

			switch( $strOrderByField ) {

				case 'default':
					$strOrderBy .= ' ORDER BY mp.maintenance_priority_type_id DESC NULLS LAST, mst.id ASC, vmr.scheduled_start_datetime ASC NULLS LAST, vmr.requested_datetime ASC NULLS LAST, vmr.id DESC';
					break;

				case 'reference':
					$strOrderBy .= ' ORDER BY vmr.id ' . $strOrderByType;
					break;

				case 'type':
					$strOrderBy .= ' ORDER BY mrt.name ' . $strOrderByType;
					break;

				case 'request':
					$strOrderBy .= ' ORDER BY mprob.name ' . $strOrderByType;
					break;

				case 'location_name':
					$strOrderBy .= ' ORDER BY maintenance_location_name ' . $strOrderByType;
					break;

				case 'property_name':
					$strOrderBy .= ' ORDER BY cp.property_name ' . $strOrderByType;
					$strOrderBy .= ' , pb.building_name ' . $strOrderByType;
					$strOrderBy .= ' , substring( util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ), \'^[0-9]+\')::numeric ' . $strOrderByType;
					break;

				case 'building_name':
					$strOrderBy .= ' ORDER BY pb.building_name ' . $strOrderByType;
					$strOrderBy .= ' , substring( util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ), \'^[0-9]+\')::numeric ' . $strOrderByType;
					break;

				case 'origin':
					$strOrderBy .= ' ORDER BY origin ' . $strOrderByType;
					break;

				case 'created_by':
					$strOrderBy .= ' ORDER BY work_order_created_by ' . $strOrderByType;
					break;

				case 'assigned_to':
					$strOrderBy .= ' ORDER BY ce.name_first ' . $strOrderByType;
					break;

				case 'scheduled':
					$strOrderBy .= ' ORDER BY scheduled_date ' . $strOrderByType;
					break;

				case 'vendor':
					$strOrderBy .= ' ORDER BY ap.company_name ' . $strOrderByType;
					break;

				case 'status':
					$strOrderBy .= ' ORDER BY mst.name ' . $strOrderByType;
					break;

				case 'priority':
					$strOrderBy .= ' ORDER BY mp.maintenance_priority_type_id ' . $strOrderByType;
					break;

				case 'created_on':
					$strOrderBy .= ' ORDER BY vmr.created_on ' . $strOrderByType;
					break;

				case 'time_open':
					$strOrderBy .= ' ORDER BY time_open ' . $strOrderByType;
					break;

				case 'due_date':
					$strOrderBy .= ' ORDER BY due_date ' . $strOrderByType;
					break;

				case 'resident':
					$strOrderBy .= ' ORDER BY util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) ' . $strOrderByType;
					break;

				default:
					// Empty default case statement
					break;
			}
		}

		if( 'default' != $strOrderByField && 'reference' != $strOrderByField && true == \valStr( $strOrderBy ) ) {
			$strOrderBy .= ' , vmr.id ' . $strOrderByType;
		}

		if( 'assigned_to' == $strOrderByField || 'vendor' == $strOrderByField ) {
			if( 0 == $objMaintenanceFilter->getOrderByType() ) {
				$strOrderBy .= ' NULLS LAST ';
			} else {
				$strOrderBy .= ' NULLS FIRST ';
			}
		}

		$intOffset	= ( 0 < $intPageNo ) ? $intPageSize * ( $intPageNo - 1 ) : 0;
		$intLimit	= $intPageSize;

		if( 0 < $intMaintenanceGroupsOnPage ) {
			$intOffset	= $intOffset - ( $intTotalMaintenanceGroupsCount - $intMaintenanceGroupsOnPage );
			$intLimit	= $intLimit - $intMaintenanceGroupsOnPage;
		} else {
			$intOffset	= $intOffset - $intTotalMaintenanceGroupsCount;
		}

		if( true == \valArr( $objMaintenanceFilter->getCompanyUserPropertyIds() ) ) {
			$strLoadPropertiesJoinCondition = ' AND lp.property_id = ANY( ARRAY[' . implode( ',', $objMaintenanceFilter->getCompanyUserPropertyIds() ) . ']::INTEGER[] )';
		}

		$strSql = 'SELECT
						vmr.id,
						vmr.lease_id,
						vmr.actual_start_datetime,
				      	CASE
					       	WHEN mst.maintenance_status_type_id <> ' . \CMaintenanceStatusType::COMPLETED . '
					        	THEN abs( ( ( DATE_PART( \'day\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ) * 24
											+ DATE_PART( \'hour\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ) ) * 60
											+ DATE_PART( \'minute\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ) ) * 60
											+ DATE_PART( \'second\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ))
					        WHEN mst.maintenance_status_type_id = ' . \CMaintenanceStatusType::COMPLETED . '
					        	THEN abs( ( ( DATE_PART( \'day\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) * 24
											+ DATE_PART( \'hour\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) ) * 60
											+ DATE_PART( \'minute\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) ) * 60
											+ DATE_PART( \'second\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) )
				      	END AS time_open,
						vmr.due_date,
						vmr.customer_id,
						vmr.company_employee_id,
						vmr.ap_payee_id,
						vmr.maintenance_request_type_id,
						vmr.cid,
						vmr.ps_product_id,
						vmr.unit_space_id,
						vmr.maintenance_location_id,
						vmr.maintenance_priority_id,
						vmr.maintenance_status_id,
						vmr.property_building_id ,
						vmr.maintenance_problem_id,
						vmr.property_id,
						vmr.parent_maintenance_request_id,
						vmr.printed_on,
						vmr.deleted_by,
						vmr.remote_primary_key,
						vmr.property_unit_id,
						ce.name_first,
						ce.name_last,
						CASE
							WHEN vmr.remote_primary_key IS NOT NULL AND vmr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN \'Migration\'
							WHEN vmr.remote_primary_key IS NOT NULL AND vmr.ps_product_id != ' . \CPsProduct::ENTRATA . ' THEN \'Integration\'
							WHEN vmr.ps_product_id IS NOT NULL AND vmr.ps_product_id IN ( ' . \CPsProduct::RESIDENT_PORTAL . ',
									' . \CPsProduct::SITE_TABLET . ', ' . \CPsProduct::FACEBOOK_INTEGRATION . ' )
							AND vmr.customer_name_first IS NOT NULL THEN util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) || \' \' || util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details )
							WHEN vmr.ps_product_id IS NOT NULL AND vmr.ps_product_id IN ( ' . \CPsProduct::RESIDENT_PORTAL . ',
									' . \CPsProduct::SITE_TABLET . ', ' . \CPsProduct::FACEBOOK_INTEGRATION . ' ) AND vmr.customer_name_first IS NULL AND cust.name_first IS NOT NULL AND cust.name_last IS NOT NULL THEN cust.name_first || \' \' || cust.name_last
							WHEN (vmr.ps_product_id IS NULL OR vmr.ps_product_id NOT IN ( ' . \CPsProduct::RESIDENT_PORTAL . ',
									' . \CPsProduct::SITE_TABLET . ', ' . \CPsProduct::FACEBOOK_INTEGRATION . ' )) AND (ce.name_first IS NOT NULL OR ce.name_last IS NOT NULL) THEN ce.name_first || \' \' || ce.name_last
							WHEN (vmr.ps_product_id IS NULL OR vmr.ps_product_id NOT IN ( ' . \CPsProduct::RESIDENT_PORTAL . ',
									' . \CPsProduct::SITE_TABLET . ', ' . \CPsProduct::FACEBOOK_INTEGRATION . ' )) AND (ce.name_first IS NULL OR ce.name_last IS NULL) THEN cu.username
						END AS work_order_created_by,
						cust.name_full AS customer_full_name,
						cp.property_name,
						mst.name,
						mp.name AS maintenance_priority_name,
						mp.maintenance_priority_type_id,
						pb.building_name,
						mprob.name,
						CASE
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
								\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::PMS_INTEGRATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::PMS_INTEGRATION] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::SITE_TABLET . ' THEN
								\'' . $arrstrProductName[\CPsProduct::SITE_TABLET] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::INSPECTION_MANAGER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::INSPECTION_MANAGER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::API_SERVICES . ' THEN
								\'' . $arrstrProductName[\CPsProduct::API_SERVICES] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA_FACILITIES_APP . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_FACILITIES_APP] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATAMATION] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA_MOBILE_MAINTENANCE . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_MOBILE_MAINTENANCE] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA_PAAS . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_PAAS] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::JOB_COSTING . ' THEN
								\'' . $arrstrProductName[\CPsProduct::JOB_COSTING] . '\'
						END AS origin,
						vmr.main_phone_number_type_id,
						vmr.alt_phone_number_type_id,
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						vmr.permission_to_enter,
						vmr.scheduled_start_datetime,
						vmr.scheduled_end_datetime,
						vmr.actual_start_datetime,
						vmr.completed_datetime,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						vmr.main_phone_number,
						vmr.alt_phone_number,
						vmr.email_address,
						vmr.sms_confirmed_on,
						mrt.name,
						COALESCE ( util_get_translated( \'unit_number\', us.unit_number_cache, us.details ), pu.unit_number, vmr.unit_number ) AS unit_number_cache,
						mst.maintenance_status_type_id,
						CASE WHEN ml.is_system = 1 THEN NULL
							WHEN puml.name IS NOT NULL THEN util_get_translated( \'name\', puml.name, puml.details )
							ELSE util_get_translated( \'name\', ml.name, ml.details )
						END AS maintenance_location_name,
						util_get_translated( \'name\', mprob.name, mprob.details ) AS maintenance_problem_name,
						util_get_translated( \'name\', mst.name, mst.details ) AS maintenance_status_name,
						util_get_translated( \'name\', mrt.name, mrt.details ) AS maintenance_request_type,
						mp.maintenance_priority_type_id,
						vmr.remote_primary_key,
						ap.company_name AS vendor_name,
						cev.start_datetime AS calendar_start_datetime,
						cev.end_datetime AS calendar_end_datetime,
						tz.time_zone_name,		
						CASE';

		if( true == \valArr( $arrintPmEnabledPropertyIds ) ) {
			$strSql .= '    WHEN vmr.property_id IN ( ' . implode( ',', $arrintPmEnabledPropertyIds ) . ' ) AND vmr.maintenance_request_type_id NOT IN( ' . implode( ',', [ \CMaintenanceRequestType::MAKE_READY, \CMaintenanceRequestType::RENOVATION ] ) . ' )
							THEN cev.end_datetime ';
		}

		$strSql .= '        WHEN vmr.scheduled_start_datetime IS NOT NULL AND vmr.scheduled_end_datetime IS NOT NULL THEN vmr.scheduled_start_datetime  
							WHEN vmr.scheduled_start_datetime IS NOT NULL AND vmr.scheduled_end_datetime IS NULL THEN vmr.scheduled_start_datetime
							WHEN vmr.scheduled_start_datetime IS NULL AND vmr.scheduled_end_datetime IS NOT NULL THEN vmr.scheduled_end_datetime
							ELSE NULL
						END as scheduled_date
					FROM
						view_maintenance_requests AS vmr';
		if( true == \valArr( $objMaintenanceFilter->getCustomPropertyGroupIds() ) ) {
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . implode( ',', $objMaintenanceFilter->getCustomPropertyGroupIds() ) . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id AND lp.is_disabled = 0 ' . $strLoadPropertiesJoinCondition . ' )';
		} elseif( true == \valArr( $objMaintenanceFilter->getPropertyGroupIds() ) ) {
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . implode( ',', $objMaintenanceFilter->getPropertyGroupIds() ) . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id AND lp.is_disabled = 0 ' . $strLoadPropertiesJoinCondition . ' )';
		}

		$strSql .= ' JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
					JOIN properties cp ON (vmr.property_id = cp.id AND vmr.cid = cp.cid)
					JOIN maintenance_statuses mst ON ( vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id )
					JOIN maintenance_priorities mp ON (vmr.cid = mp.cid AND vmr.maintenance_priority_id = mp.id )
					LEFT JOIN leases l ON ( l.cid = vmr.cid AND l.id = vmr.lease_id AND l.property_id = vmr.property_id ) ';
		if( true == $boolIsShowAllWorkOrdersOnUnit ) {
			$strSql .= ' LEFT JOIN lease_customers lc ON( lc.cid = l.cid AND l.id = lc.lease_id AND lc.property_id = l.property_id AND lc.customer_type_id = ' . \CCustomerType::PRIMARY . ' )
					             JOIN lease_intervals li ON( li.cid = l.cid AND l.id = li.lease_id AND li.id = l.active_lease_interval_id )';
		}
		$strSql .= ' LEFT JOIN property_units pu ON ( vmr.cid = pu.cid AND vmr.property_id = pu.property_id AND ( ( l.property_unit_id = pu.id AND vmr.lease_id IS NOT NULL ) OR ( vmr.property_unit_id = pu.id AND vmr.lease_id IS NULL )  ) )
					LEFT JOIN maintenance_problems mprob ON ( vmr.cid = mprob.cid AND vmr.maintenance_problem_id = mprob.id AND mprob.maintenance_problem_type_id IN ( ' . \CMaintenanceProblemType::MAINTENANCE_PROBLEM . ' ) )
					LEFT JOIN unit_spaces us ON ( vmr.cid = us.cid AND us.id = vmr.unit_space_id )
					LEFT JOIN property_buildings pb ON ( pu.property_building_id = pb.id AND pu.cid = pb.cid )
					LEFT JOIN maintenance_locations ml ON ( ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
					LEFT JOIN company_employees ce ON ( vmr.cid = ce.cid AND vmr.company_employee_id = ce.id )
					LEFT JOIN company_users cu ON ( vmr.cid = cu.cid AND vmr.created_by = cu.id AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' ) )
					LEFT JOIN customers cust ON (vmr.cid = cust.cid AND vmr.customer_id = cust.id )
					LEFT JOIN ap_payees ap ON ( ap.cid = vmr.cid AND ap.id = vmr.ap_payee_id )
					JOIN calendar_event_types cet ON ( cet.cid = vmr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
					LEFT JOIN calendar_events cev ON ( cev.cid = vmr.cid AND cev.reference_id = vmr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
					JOIN time_zones AS tz ON ( tz.id = cp.time_zone_id )
					LEFT JOIN property_unit_maintenance_locations puml ON (vmr.cid = puml.cid AND vmr.property_unit_maintenance_location_id = puml.id)
			WHERE
				cp.is_disabled = 0
				AND vmr.cid = ' . ( int ) $objMaintenanceFilter->getCid() . '
				AND vmr.parent_maintenance_request_id IS NULL ';

		$strConditionalSql = '';

		if( true == $boolIsShowAllWorkOrdersOnUnit ) {
			$strConditionalSql .= ' AND lc.lease_status_type_id IN( ' . implode( ',', [ \CLeaseStatusType::CURRENT, \CLeaseStatusType::NOTICE ] ) . ' )';
			if( false == is_null( $objMaintenanceFilter->getCompletedOnTo() ) ) {
				$strConditionalSql .= ' AND li.lease_start_date <= date( vmr.completed_datetime ) ';
			}
		} elseif( false == is_null( $objMaintenanceFilter->getCustomerId() ) ) {
			$strConditionalSql .= ' AND cust.id = ' . ( int ) $objMaintenanceFilter->getCustomerId();
		}
		if( true == $boolIsFromDashboard ) {
			$strConditionalSql .= ' AND vmr.maintenance_group_id IS NULL ';
		}
		if( false == is_null( $objMaintenanceFilter->getMaintenanceStatusTypeId() ) ) {
			$strConditionalSql .= ' AND mst.maintenance_status_type_id = ' . $objMaintenanceFilter->getMaintenanceStatusTypeId() . '
								AND lower( mst.name ) = \'on hold\' ';
		}

		if( false == is_null( $objMaintenanceFilter->getMaintenancePriorityTypeId() ) ) {
			$strConditionalSql .= ' AND mp.maintenance_priority_type_id = ' . $objMaintenanceFilter->getMaintenancePriorityTypeId();
		}
		if( true == \valId( $objMaintenanceFilter->getPropertyUnitId() ) ) {
			$strConditionalSql .= ' AND vmr.property_unit_id = ' . ( int ) $objMaintenanceFilter->getPropertyUnitId();
			if( false == \valStr( $objMaintenanceFilter->getUnitSpaceId() ) ) {
				$strConditionalSql .= ' AND vmr.lease_id IS NOT NULL ';
			}
		}
		if( true == \valId( $objMaintenanceFilter->getMaintenanceRequestId() ) ) {
			$strConditionalSql .= ' AND CAST(vmr.id AS TEXT) LIKE \'%' . ( int ) $objMaintenanceFilter->getMaintenanceRequestId() . '%\'';
		}
		if( true == \valId( $objMaintenanceFilter->getUnitSpaceId() ) ) {
			$strConditionalSql .= ' AND vmr.unit_space_id = ' . ( int ) $objMaintenanceFilter->getUnitSpaceId();
		}
		if( false == is_null( $objMaintenanceFilter->getLeaseId() ) && false == $boolIsShowAllWorkOrdersOnUnit ) {
			$strConditionalSql .= ' AND vmr.lease_id = ' . $objMaintenanceFilter->getLeaseId();
		}
		if( 1 == $objMaintenanceFilter->getIsArchive() ) {
			$strConditionalSql .= ' AND vmr.deleted_by IS NOT NULL';
		} else {
			$strConditionalSql .= ' AND vmr.deleted_by IS NULL';
		}
		if( true == \valArr( $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) ) {
			$strConditionalSql .= ' AND mrt.id IN ( ' . implode( ' , ', $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) . ' )';
		}

		if( true == \valArr( $objMaintenanceFilter->getUnitSpaceStatusTypeIds() ) ) {
			$strConditionalSql .= ' AND us.unit_space_status_type_id IN ( ' . implode( ',', $objMaintenanceFilter->getUnitSpaceStatusTypeIds() ) . ' ) ';
		}

		if( false == is_null( $objMaintenanceFilter->getCompletedOnFrom() ) && 'Min' != $objMaintenanceFilter->getCompletedOnFrom() && false == is_null( $objMaintenanceFilter->	getCompletedOnTo() ) && 'Max' != $objMaintenanceFilter->getCompletedOnTo() ) {

			$objMaintenanceStatus = \Psi\Eos\Entrata\CMaintenanceStatuses::createService()->fetchMaintenanceStatusByCidByCode( $objMaintenanceFilter->getCid(), \CMaintenanceStatusType::COMPLETED, $objDatabase );

			if( true == \valObj( $objMaintenanceStatus, 'CMaintenanceStatus' ) ) {
				$strConditionalSql	.= ' AND vmr.maintenance_status_id = \'' . ( int ) $objMaintenanceStatus->getId() . '\'';
			}
		} elseif( ( false == is_null( $objMaintenanceFilter->getCompletedOnFrom() ) && 'Min' != $objMaintenanceFilter->getCompletedOnFrom() ) || ( false == is_null( $objMaintenanceFilter->getCompletedOnTo() ) && 'Max' != $objMaintenanceFilter->getCompletedOnTo() ) ) {

			$objMaintenanceStatus = \Psi\Eos\Entrata\CMaintenanceStatuses::createService()->fetchMaintenanceStatusByCidByCode( $objMaintenanceFilter->getCid(), \CMaintenanceStatusType::COMPLETED, $objDatabase );

			if( true == \valObj( $objMaintenanceStatus, 'CMaintenanceStatus' ) ) {
				$strConditionalSql	.= ' AND vmr.maintenance_status_id = \'' . ( int ) $objMaintenanceStatus->getId() . '\'';
			}
		}

		if( true == $boolIsApplyFilterCrieteria ) {
			$arrstrAndSearchParameters = $this->fetchNewMaintenanceFilterSearchCriteria( $objMaintenanceFilter, $boolIsSearchByFilter = true, $boolIsFromMaintenanceDashboard = true );
			$strConditionalSql	.= ( ( false == is_null( $arrstrAndSearchParameters ) ) ? ' AND ' . implode( ' AND ', $arrstrAndSearchParameters ) : '' );
		} else {
			$arrstrAndSearchParameters = $this->fetchNewMaintenanceFilterSearchCriteria( $objMaintenanceFilter, $boolIsSearchByFilter = false, $boolIsFromMaintenanceDashboard = true );
			$strConditionalSql	= ( ( false == is_null( $arrstrAndSearchParameters ) ) ? ' AND ' . implode( ' AND ', $arrstrAndSearchParameters ) : '' );
		}

		if( false == is_null( $objMaintenanceFilter->getOrderByField() ) ) {
			$strConditionalSql .= $strOrderBy;
		} else {
			$strConditionalSql .= ' ORDER BY vmr.id DESC, vmr.actual_start_datetime DESC ';
		}

		$strConditionalSql	.= ' OFFSET ' . ( int ) $intOffset . ' LIMIT ' . ( int ) $intLimit;

		$strSql = $strSql . ' ' . $strConditionalSql;

		if( true == $boolIsFetchData ) {
			return \fetchData( $strSql, $objDatabase );
		} else {
			return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
		}
	}

	public function fetchPaginatedSubMaintenanceRequestsByMaintenanceFilter( $objDatabase, $objMaintenanceFilter, $boolIsFetchData = NULL ) {

		if( false == is_null( $objMaintenanceFilter->getOrderByField() ) && 0 < strlen( $objMaintenanceFilter->getOrderByField() ) ) {

			$strOrderByField 		= $objMaintenanceFilter->getOrderByField();
			$strOrderBy				= '';
			$strOrderByType			= '';

			if( 0 == $objMaintenanceFilter->getOrderByType() ) {
				$strOrderByType = DESC;
			} else {
				$strOrderByType = ASC;
			}

			switch( $strOrderByField ) {

				case 'default':
					$strOrderBy .= ' ORDER BY mp.maintenance_priority_type_id DESC NULLS LAST, mst.id ASC, vmr.scheduled_start_datetime ASC NULLS LAST, vmr.requested_datetime ASC NULLS LAST, vmr.id DESC';
					break;

				case 'property_unit_id':
					$strOrderBy .= ' ORDER BY vmr.unit_number ' . $strOrderByType;
					break;

				case 'reference':
					$strOrderBy .= ' ORDER BY vmr.id ' . $strOrderByType;
					break;

				case 'type':
					$strOrderBy .= ' ORDER BY mrt.name ' . $strOrderByType;
					break;

				case 'request':
					$strOrderBy .= ' ORDER BY mprob.name ' . $strOrderByType;
					break;

				case 'created_by':
					$strOrderBy .= ' ORDER BY work_order_created_by ' . $strOrderByType;
					break;

				case 'assigned_to':
					$strOrderBy .= ' ORDER BY ce.name_first ' . $strOrderByType;
					break;

				case 'vendor':
					$strOrderBy .= ' ORDER BY ap.company_name ' . $strOrderByType;
					break;

				case 'scheduled':
					$strOrderBy .= ' ORDER BY vmr.scheduled_start_datetime ' . $strOrderByType;
					break;

				case 'status':
					$strOrderBy .= ' ORDER BY mst.name ' . $strOrderByType;
					break;

				case 'priority':
					$strOrderBy .= ' ORDER BY mp.name ' . $strOrderByType;
					break;

				default:
					// Empty default case statement
					break;
			}
		}

		if( 'assigned_to' == $strOrderByField || 'vendor' == $strOrderByField ) {
			if( 0 == $objMaintenanceFilter->getOrderByType() ) {
				$strOrderBy .= ' NULLS LAST ';
			} else {
				$strOrderBy .= ' NULLS FIRST ';
			}
		}

		$strSql = 'SELECT
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						vmr.*,
						ce.name_first,
						ce.name_last,
						mst.name,
						mp.name,
						mprob.name,
						mrt.name,
						mst.maintenance_status_type_id,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
						mprob.name AS maintenance_problem_name,
						mst.name AS maintenance_status_name,
						ap.company_name AS vendor_name
					FROM
						view_maintenance_requests vmr';

		if( false == is_null( $objMaintenanceFilter->getPropertyGroupIds() ) && true == \valArr( $objMaintenanceFilter->getPropertyGroupIds() ) ) {
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . implode( ',', $objMaintenanceFilter->getPropertyGroupIds() ) . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id AND lp.is_disabled = 0 )';
		}

		$strSql .= ' JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
						LEFT JOIN property_units pu ON ( vmr.cid = pu.cid AND vmr.property_unit_id = pu.id AND pu.deleted_on IS NULL )
						JOIN maintenance_statuses mst ON ( vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id )
						JOIN maintenance_priorities mp ON ( vmr.cid = mp.cid AND vmr.maintenance_priority_id = mp.id )
						LEFT JOIN maintenance_problems mprob ON ( vmr.cid = mprob.cid AND vmr.maintenance_problem_id = mprob.id )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
						LEFT JOIN company_employees ce ON ( vmr.cid = ce.cid AND vmr.company_employee_id = ce.id )
						LEFT JOIN company_employees cec ON ( vmr.cid = cec.cid  AND vmr.company_employee_id = cec.id AND vmr.created_by = cec.id )
						LEFT JOIN company_users cu ON ( vmr.cid = cu.cid AND vmr.created_by = cu.id AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' ) )
						LEFT JOIN customers cust ON ( vmr.cid = cust.cid AND vmr.customer_id = cust.id )
						LEFT JOIN ap_payees ap ON ( ap.cid = vmr.cid AND ap.id = vmr.ap_payee_id )
					WHERE
						vmr.cid = ' . ( int ) $objMaintenanceFilter->getCid();

		$strSql .= ' AND vmr.parent_maintenance_request_id IS NOT NULL';

		$strSql .= ' AND vmr.deleted_by IS NULL';

		if( true == \valArr( $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) && 0 == $objMaintenanceFilter->getIsShowSubTasks() ) {
			$strSql .= ' AND mrt.id IN ( ' . implode( ' , ', $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) . ' )';
		}

		$arrstrAndSearchParameters = $this->fetchNewMaintenanceFilterSearchCriteria( $objMaintenanceFilter );

		if( true == \valArr( $objMaintenanceFilter->getParentMaintenanceRequestIds() ) ) {
			$arrstrAndSearchParameters[] = ' vmr.parent_maintenance_request_id IN (' . implode( ',', $objMaintenanceFilter->getParentMaintenanceRequestIds() ) . ')';
		}

		$strSql	.= ( ( false == is_null( $arrstrAndSearchParameters ) ) ? ' AND ' . implode( ' AND ', $arrstrAndSearchParameters ) : '' );

		if( false == is_null( $objMaintenanceFilter->getCompletedOnFrom() ) && 'Min' != $objMaintenanceFilter->getCompletedOnFrom() && false == is_null( $objMaintenanceFilter->getCompletedOnTo() ) && 'Max' != $objMaintenanceFilter->getCompletedOnTo() ) {

			$objMaintenanceStatus = \Psi\Eos\Entrata\CMaintenanceStatuses::createService()->fetchMaintenanceStatusByCidByCode( $objMaintenanceFilter->getCid(), \CMaintenanceStatusType::COMPLETED, $objDatabase );

			if( true == \valObj( $objMaintenanceStatus, 'CMaintenanceStatus' ) ) {
				$strSql	.= ' AND vmr.maintenance_status_id = \'' . ( int ) $objMaintenanceStatus->getId() . '\'';
			}
		} elseif( ( false == is_null( $objMaintenanceFilter->getCompletedOnFrom() ) && 'Min' != $objMaintenanceFilter->getCompletedOnFrom() ) || ( false == is_null( $objMaintenanceFilter->getCompletedOnTo() ) && 'Max' != $objMaintenanceFilter->getCompletedOnTo() ) ) {

			$objMaintenanceStatus = \Psi\Eos\Entrata\CMaintenanceStatuses::createService()->fetchMaintenanceStatusByCidByCode( $objMaintenanceFilter->getCid(), \CMaintenanceStatusType::COMPLETED, $objDatabase );

			if( true == \valObj( $objMaintenanceStatus, 'CMaintenanceStatus' ) ) {
				$strSql	.= ' AND vmr.maintenance_status_id = \'' . ( int ) $objMaintenanceStatus->getId() . '\'';
			}
		}

		if( false == is_null( $objMaintenanceFilter->getOrderByField() ) ) {
			$strSql .= $strOrderBy;
		} else {
			$strSql .= ' ORDER BY vmr.id DESC, vmr.actual_start_datetime DESC ';
		}

		if( true == $boolIsFetchData ) {
			return \fetchData( $strSql, $objDatabase );
		} else {
			return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
		}
	}

	public function fetchSimpleIncompleteMaintenanceRequestsByLeaseIdByMaintenanceStatusCodeByLimitByCid( $intLeaseId, $intCid, $objDatabase ) {

		$strSql = ' SELECT
						  mr.id,
						  mr.created_on,
						  CASE WHEN ml.name IS NOT NULL THEN ml.name ELSE mrt.name END AS maintenance_location_name,
						   mr.maintenance_request_type_id
					FROM  public.maintenance_requests mr
						  LEFT JOIN public.maintenance_locations ml ON ( mr.cid = ml.cid AND mr.maintenance_location_id = ml.id )
						  JOIN public.maintenance_statuses mst ON ( mr.cid = mst.cid AND mr.maintenance_status_id = mst.id )
						  JOIN maintenance_request_types mrt ON ( mrt.id = mr.maintenance_request_type_id )
					WHERE
						  mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
						  AND mr.cid::int = ' . ( int ) $intCid . '
						  AND mr.lease_id = ' . ( int ) $intLeaseId . '
						  AND mr.parent_maintenance_request_id IS NULL
						  AND mr.deleted_by IS NULL
					ORDER BY
						  mr.created_on DESC ';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchSimpleIncompleteMaintenanceRequestsByPropertyUnitIdByCid( $intPropertyUnitId, $intCid, $objDatabase, $boolIsShowAllWorkOrdersOnUnit = false ) {

		$strSql = ' SELECT
						  mr.id,
						  mr.created_on,
						  CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name
					FROM  public.maintenance_requests mr
						  JOIN public.maintenance_locations ml ON ( mr.cid = ' . ( int ) $intCid . ' AND mr.cid = ml.cid AND mr.maintenance_location_id = ml.id )
						  JOIN public.maintenance_statuses mst ON ( mst.cid = ' . ( int ) $intCid . ' AND mr.cid = mst.cid AND mr.maintenance_status_id = mst.id  )';

		if( true == $boolIsShowAllWorkOrdersOnUnit ) {
			$strSql .= ' JOIN cached_leases cl ON ( cl.cid = mr.cid AND cl.id = mr.lease_id AND cl.property_id = mr.property_id )';
		}

		$strSql .= ' WHERE
						mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
						AND mr.cid::int = ' . ( int ) $intCid . '
						AND mr.property_unit_id = ' . ( int ) $intPropertyUnitId;

		if( true == $boolIsShowAllWorkOrdersOnUnit ) {
			$strSql .= ' AND cl.lease_status_type_id IN ( ' . \CLeaseStatusType::CURRENT . ',' . \CLeaseStatusType::NOTICE . ' )';
		}

		$strSql .= '	AND mr.lease_id IS NOT NULL
						AND mr.parent_maintenance_request_id IS NULL
						AND mr.deleted_by IS NULL
					ORDER BY
						mr.created_on DESC ';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchTotalMaintenanceRequestsCountByMaintenanceFilter( $objMaintenanceFilter, $objDatabase, $boolSearchSubTask = false, $boolIsEntrataMobile = NULL, $boolIsFetchByStatus = NULL, $boolIncludeDeletedUnits = false, $boolIncludeDeletedUnitSpaces = false, $arrintPropertyGroupIds = [], $boolIsApplyFilterCrieteria = true, $boolIsFromDashboard = false, $boolIsFromApVendor = false, $boolGetAssignedCount = false, $boolShowDisabledData = false ) {

		$strCheckDeletedUnitsSql = ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';
		$strCheckDeletedUnitSpacesSql = ( false == $boolIncludeDeletedUnitSpaces ) ? ' AND us.deleted_on IS NULL' : '';

		if( false == $boolIsApplyFilterCrieteria ) {
			$objMaintenanceFilter->setPropertyGroupIds( $arrintPropertyGroupIds );
		}
		if( NULL != $boolIsFetchByStatus ) {
			$strSql = 'SELECT
						COUNT(vmr.id),
						mst.maintenance_status_type_id ';
		} elseif( true == $boolIsEntrataMobile ) {
			$strSql = 'SELECT
						COUNT(vmr.id),
						mp.maintenance_priority_type_id ';
		} elseif( true == $boolGetAssignedCount ) {
			$strSql = 'SELECT 
						COUNT ( CASE WHEN vmr.company_employee_id IS NULL THEN vmr.id END ) AS not_assigned ';

			if( true == \valArr( $objMaintenanceFilter->getCompanyEmployeeIds() ) ) {
				$strSql .= ' , COUNT ( CASE WHEN vmr.company_employee_id IN (' . implode( ',', $objMaintenanceFilter->getCompanyEmployeeIds() ) . ') AND vmr.company_employee_id IS NOT NULL THEN vmr.id END ) AS assigned_to_you,
							COUNT ( CASE WHEN vmr.company_employee_id NOT IN (' . implode( ',', $objMaintenanceFilter->getCompanyEmployeeIds() ) . ') AND vmr.company_employee_id IS NOT NULL THEN vmr.id END ) AS assigned_to_others ';
			}
		} else {
			$strSql = 'SELECT
						COUNT(vmr.id) ';
		}

		$strSql .= ' FROM maintenance_requests vmr';
		if( false == is_null( $objMaintenanceFilter->getPropertyId() ) ) {
			$arrintProperty = [ $objMaintenanceFilter->getPropertyId() ];
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . implode( ',', $arrintProperty ) . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id ' . ( ( false == $boolShowDisabledData ) ? ' AND lp.is_disabled = 0 ' : '' ) . ' )';
		} elseif( true == \valArr( $objMaintenanceFilter->getCustomPropertyGroupIds() ) ) {
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . implode( ',', $objMaintenanceFilter->getCustomPropertyGroupIds() ) . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id ' . ( ( false == $boolShowDisabledData ) ? ' AND lp.is_disabled = 0 ' : '' ) . ' )';
		} elseif( false == is_null( $objMaintenanceFilter->getPropertyGroupIds() ) && true == \valArr( $objMaintenanceFilter->getPropertyGroupIds() ) ) {
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . implode( ',', $objMaintenanceFilter->getPropertyGroupIds() ) . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id ' . ( ( false == $boolShowDisabledData ) ? ' AND lp.is_disabled = 0 ' : '' ) . ' )';
		}

		$strSql .= ' JOIN maintenance_request_details mrd ON ( mrd.maintenance_request_id = vmr.id AND mrd.cid = vmr.cid )
							LEFT JOIN property_units pu ON (vmr.property_unit_id = pu.id AND vmr.cid = pu.cid ' . $strCheckDeletedUnitsSql . ' )	';

		if( true == $boolIsEntrataMobile ) {
			$strSql .= ' JOIN maintenance_priorities mp ON ( vmr.maintenance_priority_id = mp.id AND vmr.cid = mp.cid )';
		}

		$strSql .= 'LEFT JOIN unit_spaces us ON ( vmr.unit_space_id = us.id AND vmr.cid = us.cid ' . $strCheckDeletedUnitSpacesSql . ' )
					JOIN maintenance_statuses mst ON (vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid)
			WHERE
					vmr.cid = ' . ( int ) $objMaintenanceFilter->getCid();

		if( ( ( true == $boolIsFromDashboard && true == $boolIsApplyFilterCrieteria ) || true == $boolGetAssignedCount ) && false == in_array( \CMaintenanceRequestType::RECURRING, $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) ) {
			$strSql .= ' AND vmr.maintenance_group_id IS NULL ';
		}

		if( false == $boolIsFromApVendor && false == \valArr( $objMaintenanceFilter->getCompanyEmployeeIds() ) ) {
			if( true == $boolSearchSubTask ) {
				$strSql .= ' AND vmr.parent_maintenance_request_id IS NOT NULL';
			} else {
				$strSql .= ' AND vmr.parent_maintenance_request_id IS NULL';
			}
		}

		if( NULL != $boolIsFetchByStatus && true == $boolIsApplyFilterCrieteria ) {
			$strSql .= ' AND mst.maintenance_status_type_id = ' . $boolIsFetchByStatus . '
						 AND lower( mst.name ) = \'on hold\' ';
		}

		if( false == is_null( $objMaintenanceFilter->getLeaseId() ) && true == $boolIsApplyFilterCrieteria ) {
			$strSql .= ' AND vmr.lease_id = ' . $objMaintenanceFilter->getLeaseId();
		}

		if( 1 == $objMaintenanceFilter->getIsArchive() ) {
			$strSql .= ' AND vmr.deleted_by IS NOT NULL';
		} else {
			$strSql .= ' AND vmr.deleted_by IS NULL';
		}

		if( false != \valArr( $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) && true == $boolIsApplyFilterCrieteria ) {
			$strSql .= ' AND vmr.maintenance_request_type_id IN ( ' . implode( ' , ', $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) . ' )';
		}

		if( false != \valArr( $objMaintenanceFilter->getUnitSpaceStatusTypeIds() ) && true == $boolIsApplyFilterCrieteria ) {
			$strSql .= ' AND us.unit_space_status_type_id IN ( ' . implode( ',', $objMaintenanceFilter->getUnitSpaceStatusTypeIds() ) . ' ) ';
		}

		if( true == $boolIsFromApVendor && false != \valArr( $objMaintenanceFilter->getApPayeeIds() ) ) {
			$strSql .= ' AND vmr.ap_payee_id IN ( ' . implode( ' , ', $objMaintenanceFilter->getApPayeeIds() ) . ' )';
		}

		if( true == $boolIsApplyFilterCrieteria ) {
			$arrstrAndSearchParameters = $this->fetchNewMaintenanceFilterSearchCriteria( $objMaintenanceFilter, $boolIsSearchByFilter = true, false, $boolGetAssignedCount );
		} else {

			if( false == is_null( $objMaintenanceFilter->getSearchKeyword() ) ) {
				$strSql .= ' AND vmr.id = ' . $objMaintenanceFilter->getSearchKeyword();
			}

		}

		$strSql	.= ( ( false == is_null( $arrstrAndSearchParameters ) ) ? ' AND ' . implode( ' AND ', $arrstrAndSearchParameters ) : '' );

		if( ( ( false == is_null( $objMaintenanceFilter->getCompletedOnFrom() ) && 'Min' != $objMaintenanceFilter->getCompletedOnFrom() ) || ( false == is_null( $objMaintenanceFilter->getCompletedOnTo() ) && 'Max' != $objMaintenanceFilter->getCompletedOnTo() ) ) && true == $boolIsApplyFilterCrieteria ) {

			$strSql	.= ' AND vmr.maintenance_status_id = ( SELECT
																id
															FROM
																maintenance_statuses
															WHERE
																cid = ' . ( int ) $objMaintenanceFilter->getCid() . '
																AND maintenance_status_type_id = ' . \CMaintenanceStatusType::COMPLETED . '
															LIMIT 1 ) ';
		}

		if( true == \valStr( $objMaintenanceFilter->getUnitSpaceId() ) && true == \valId( $objMaintenanceFilter->getPropertyUnitId() ) ) {
			$strSql .= ' AND vmr.property_unit_id = ' . ( int ) $objMaintenanceFilter->getPropertyUnitId();

			if( true == \valId( $objMaintenanceFilter->getUnitSpaceId() ) ) {
				$strSql .= ' AND vmr.unit_space_id = ' . ( int ) $objMaintenanceFilter->getUnitSpaceId();
			}
		}

		if( true == \valId( $objMaintenanceFilter->getMaintenanceRequestId() ) ) {
			$strSql .= ' AND CAST(vmr.id AS TEXT) LIKE \'%' . ( int ) $objMaintenanceFilter->getMaintenanceRequestId() . '%\'';
		}

		if( true == $boolIsEntrataMobile ) {
			$strSql .= ' GROUP BY
							mp.maintenance_priority_type_id ';
		} elseif( NULL != $boolIsFetchByStatus ) {
			$strSql .= ' GROUP BY
							mst.maintenance_status_type_id ';
		}

		$arrstrData = ( array ) \fetchData( $strSql, $objDatabase );

		if( true == $boolIsEntrataMobile || NULL != $boolIsFetchByStatus || true == $boolGetAssignedCount ) {
			return $arrstrData;
		} elseif( true == \valArr( $arrstrData ) ) {
			return $arrstrData[0]['count'];
		}

		return 0;

	}

	public function fetchPaginatedMobileMaintenanceRequestsByMaintenanceFilter( $intPageSize, $objMaintenanceFilter, $intMaintenancePriorityTypeId, $objDatabase, $boolSearchSubTask = false, $boolIncludeDeletedUnits = false, $boolIncludeDeletedUnitSpaces = false, $arrintPropertyGroupIds = [], $intTotalMaintenanceGroups, $intMaintenanceGroupsOnPage, $boolIsAppliedFilter = false ) {

		$strCheckDeletedUnitsSql 	  = ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';
		$strCheckDeletedUnitSpacesSql = ( false == $boolIncludeDeletedUnitSpaces ) ? ' AND us.deleted_on IS NULL' : '';
		if( true == \valStr( $objMaintenanceFilter->getSearchKeyword() ) && true == \valArr( $arrintPropertyGroupIds ) ) {
			$objMaintenanceFilter->setPropertyGroupIds( $arrintPropertyGroupIds );
		}

		if( false == is_null( $objMaintenanceFilter->getOrderByField() ) && 0 < strlen( $objMaintenanceFilter->getOrderByField() ) ) {

			$strOrderByField 		= $objMaintenanceFilter->getOrderByField();
			$strOrderBy				= NULL;

			if( 'default' == $strOrderByField ) {
				$strOrderBy .= ' ORDER BY mp.maintenance_priority_type_id DESC NULLS LAST, mst.id ASC, mrd.scheduled_start_datetime ASC NULLS LAST, mrd.requested_datetime ASC NULLS LAST, vmr.id DESC';
			}
		}

		$intOffset	= ( 0 < $objMaintenanceFilter->getPageNumber() ) ? $intPageSize * ( $objMaintenanceFilter->getPageNumber() - 1 ) : 0;
		$intLimit	= $intPageSize;

		if( 0 < $intMaintenanceGroupsOnPage ) {
			$intOffset	= $intOffset - ( $intTotalMaintenanceGroups - $intMaintenanceGroupsOnPage );
			$intLimit	= $intLimit - $intMaintenanceGroupsOnPage;
		}

		$strSql = 'SELECT
					vmr.id,
					vmr.maintenance_status_id,
					vmr.maintenance_request_type_id,
					vmr.maintenance_location_id,
					vmr.maintenance_problem_id,
					vmr.maintenance_priority_id,
					vmr.property_unit_id,
					vmr.lease_id,
					vmr.property_id,
					vmr.ps_product_id,
					vmr.remote_primary_key,
					vmr.parent_maintenance_request_id,
					cp.property_name,
					pb.building_name,
					COALESCE ( us.unit_number_cache,mrd.unit_number, pu.unit_number ) AS unit_number,
					mrd.created_on,
					mrd.actual_start_datetime,
					mst.maintenance_status_type_id,
					mp1.name AS maintenance_category_name,
					CASE WHEN ml.is_system = 1 THEN NULL WHEN puml.name IS NOT NULL THEN puml.name ELSE ml.name END AS maintenance_location_name
					FROM maintenance_requests vmr';

		if( false == is_null( $objMaintenanceFilter->getPropertyId() ) && 0 < $objMaintenanceFilter->getPropertyId() ) {
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . $objMaintenanceFilter->getPropertyId() . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id AND lp.is_disabled = 0 )';
		} elseif( false == is_null( $objMaintenanceFilter->getPropertyGroupIds() ) && true == \valArr( $objMaintenanceFilter->getPropertyGroupIds() ) ) {
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . implode( ',', $objMaintenanceFilter->getPropertyGroupIds() ) . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id AND lp.is_disabled = 0 )';

		} elseif( true == \valArr( $arrintPropertyGroupIds ) ) {
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . implode( ',', $arrintPropertyGroupIds ) . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id AND lp.is_disabled = 0 )';
		}

		$strSql .= ' JOIN maintenance_request_details mrd ON ( mrd.maintenance_request_id = vmr.id AND mrd.cid = vmr.cid )
					JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
					LEFT JOIN leases l ON ( l.cid = vmr.cid AND l.id = vmr.lease_id AND l.property_id = vmr.property_id )
					LEFT JOIN property_units pu ON ( vmr.cid = pu.cid AND vmr.property_id = pu.property_id AND ( ( l.property_unit_id = pu.id AND vmr.lease_id IS NOT NULL ) OR ( vmr.property_unit_id = pu.id AND vmr.lease_id IS NULL ) ) ' . $strCheckDeletedUnitsSql . ' )
					LEFT JOIN property_buildings pb ON ((pu.property_building_id = pb.id AND pu.cid = pb.cid) OR (vmr.property_building_id = pb.id AND vmr.cid = pb.cid))
					LEFT JOIN properties cp ON (vmr.property_id = cp.id AND vmr.cid = cp.cid)
					JOIN maintenance_statuses mst ON (vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid)
					JOIN maintenance_priorities mp ON (vmr.maintenance_priority_id = mp.id AND vmr.cid = mp.cid)
					LEFT JOIN unit_spaces us ON ( vmr.unit_space_id = us.id AND vmr.cid = us.cid ' . $strCheckDeletedUnitSpacesSql . ' )
					LEFT JOIN maintenance_problems mprob ON ( mprob.cid = vmr.cid AND mprob.id = vmr.maintenance_problem_id )
					LEFT JOIN maintenance_problems mp1 ON ( mp1.cid = mprob.cid AND mp1.id = mprob.maintenance_problem_id )
					LEFT JOIN maintenance_locations ml ON (ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
					LEFT JOIN property_unit_maintenance_locations puml ON (vmr.cid = puml.cid AND vmr.property_unit_maintenance_location_id = puml.id)
				WHERE
					cp.is_disabled = 0
					AND vmr.cid = ' . ( int ) $objMaintenanceFilter->getCid() . ' ';

		if( false == \valStr( $objMaintenanceFilter->getSearchKeyword() ) && false == $boolIsAppliedFilter && false == in_array( \CMaintenanceRequestType::RECURRING, $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) ) {

			$strSql .= ' AND vmr.maintenance_group_id IS NULL ';
		}

		if( false != \valId( $intMaintenancePriorityTypeId ) && \CMaintenancePriority::OTHER != $intMaintenancePriorityTypeId && false == \valStr( $objMaintenanceFilter->getSearchKeyword() ) ) {
			$strSql .= ' AND mp.maintenance_priority_type_id = ' . ( int ) $intMaintenancePriorityTypeId;
		} elseif( \CMaintenancePriority::OTHER == $intMaintenancePriorityTypeId && false == \valStr( $objMaintenanceFilter->getSearchKeyword() ) ) {
			$strSql .= ' AND mp.maintenance_priority_type_id IS NULL ';
		}

		if( true == $boolSearchSubTask && false == \valStr( $objMaintenanceFilter->getSearchKeyword() ) ) {
			$strSql .= ' AND vmr.parent_maintenance_request_id IS NOT NULL';
		} elseif( false == \valStr( $objMaintenanceFilter->getSearchKeyword() ) ) {
			$strSql .= ' AND vmr.parent_maintenance_request_id IS NULL';
		}
		if( true == \valId( $objMaintenanceFilter->getBuildingId() ) ) {
			$strSql .= ' AND pb.id = ' . ( int ) $objMaintenanceFilter->getBuildingId();
		}

		if( false == is_null( $objMaintenanceFilter->getLeaseId() ) && false == \valStr( $objMaintenanceFilter->getSearchKeyword() ) ) {
			$strSql .= ' AND vmr.lease_id = ' . $objMaintenanceFilter->getLeaseId();
		}

		if( 1 == $objMaintenanceFilter->getIsArchive() ) {
			$strSql .= ' AND vmr.deleted_by IS NOT NULL';
		} else {
			$strSql .= ' AND vmr.deleted_by IS NULL';
		}

		if( true == \valArr( $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) ) {
			$strSql .= ' AND mrt.id IN ( ' . implode( ' , ', $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) . ' )';
		}

		if( true == \valArr( $objMaintenanceFilter->getUnitSpaceStatusTypeIds() ) && false == \valStr( $objMaintenanceFilter->getSearchKeyword() ) ) {
			$strSql .= ' AND us.unit_space_status_type_id IN ( ' . implode( ',', $objMaintenanceFilter->getUnitSpaceStatusTypeIds() ) . ' ) ';
		}

		if( true == \valStr( $objMaintenanceFilter->getSearchKeyword() ) ) {
			$arrstrAndSearchParameters = $this->fetchNewMaintenanceFilterSearchCriteria( $objMaintenanceFilter, $boolIsSearchByFilter = false );
		} else {
			$arrstrAndSearchParameters = $this->fetchNewMaintenanceFilterSearchCriteria( $objMaintenanceFilter, $boolIsSearchByFilter = true );
		}

		$strSql	.= ( ( false == is_null( $arrstrAndSearchParameters ) ) ? ' AND ' . implode( ' AND ', $arrstrAndSearchParameters ) : '' );
		if( true == \valArr( $objMaintenanceFilter->getParentMaintenanceRequestIds() ) ) {
			$strSql .= ' OR vmr.id IN (' . implode( ',', $objMaintenanceFilter->getParentMaintenanceRequestIds() ) . ')';
		}

		if( false == is_null( $objMaintenanceFilter->getOrderByField() ) ) {
			$strSql .= $strOrderBy;
		} else {
			$strSql .= ' ORDER BY vmr.id DESC, mrd.actual_start_datetime DESC ';
		}
		$strSql	.= ' OFFSET ' . ( int ) $intOffset . ' LIMIT ' . ( int ) $intLimit;

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );

	}

	public function fetchMaintenanceRequestByRemotePrimaryKeyByCid( $strRemotePrimaryKey, $intCid, $objDatabase ) {
		// temporary fix until we call util_set_locale() within CDatabase::open();
		if( \CDatabaseType::CLIENT == $objDatabase->getDatabaseTypeId() ) {
			\CLocaleContainer::createService()->initializeDatabase( $objDatabase );
		}
		return $this->fetchMaintenanceRequest( sprintf( 'SELECT 
								util_get_translated( \'problem_description\', problem_description, details ) AS problem_description,
								util_get_translated( \'additional_info\', additional_info, details ) AS additional_info,
								util_get_translated( \'location_specifics\', location_specifics, details ) AS location_specifics,
								util_get_translated( \'ignore_response_reason\', ignore_response_reason, details ) AS ignore_response_reason,
								util_get_translated( \'customer_name_first\', customer_name_first, details ) AS customer_name_first,
								util_get_translated( \'customer_name_last\', customer_name_last, details ) AS customer_name_last,
								util_get_translated( \'unit_number\', unit_number, details ) AS unit_number,
								* 
							FROM view_maintenance_requests 
							WHERE 
								cid::integer = %d 
								AND lower( remote_primary_key ) = \'%s\' 
							ORDER BY created_on LIMIT 1',
			( int ) $intCid, \Psi\CStringService::singleton()->strtolower( trim( addslashes( $strRemotePrimaryKey ) ) ) ), $objDatabase );
	}

	public function fetchCustomMaintenanceRequestsByPropertyUnitIdByCid( $intPropertyUnitId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( 'SELECT * FROM maintenance_requests WHERE property_unit_id = ' . ( int ) $intPropertyUnitId . ' AND cid::integer = ' . ( int ) $intCid . ' AND deleted_by IS NULL', $objDatabase );
	}

	public function fetchMaintenanceRequestsByCompanyLocationIdByCid( $intMaintenanceLocationId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM maintenance_requests WHERE maintenance_location_id = %d AND cid = %d ', ( int ) $intMaintenanceLocationId, ( int ) $intCid ), $objDatabase );
	}

	public function fetchMaintenanceRequestsByCompanyProblemIdByCid( $intMaintenanceProblemId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM maintenance_requests WHERE maintenance_problem_id = %d AND cid = %d ', ( int ) $intMaintenanceProblemId, ( int ) $intCid ), $objDatabase );
	}

	public function fetchCustomMaintenanceRequestsByMaintenancePriorityIdByCid( $intMaintenancePriorityId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM maintenance_requests WHERE cid::integer = %d AND maintenance_priority_id::integer = %d', ( int ) $intCid, ( int ) $intMaintenancePriorityId ), $objDatabase );
	}

	public function fetchCustomMaintenanceRequestsByMaintenanceLocationIdByCid( $intMaintenanceLocationId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM maintenance_requests WHERE cid::integer = %d AND maintenance_location_id::integer = %d', ( int ) $intCid, ( int ) $intMaintenanceLocationId ), $objDatabase );
	}

	public function fetchCustomMaintenanceRequestsByMaintenanceProblemIdByCid( $intMaintenanceProblemId, $intCid, $objDatabase ) {
		return $this->fetchMaintenanceRequests( sprintf( 'SELECT * FROM maintenance_requests WHERE cid::integer = %d AND ( maintenance_problem_id::integer = %d OR sub_maintenance_problem_id = %d )', ( int ) $intCid, ( int ) $intMaintenanceProblemId, ( int ) $intMaintenanceProblemId ), $objDatabase );
	}

	public function fetchInCompleteMaintenanceRequestsByPropertyIdByRemotePrimaryKeysByCid( $intPropertyId, $strRemotePrimaryKeys, $intCid, $objDatabase ) {

		if( false == \valStr( $strRemotePrimaryKeys ) ) {
			return NULL;
		}

		$strSql = 'SELECT 
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON ( vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid )
					WHERE
						vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL
						AND vmr.remote_primary_key IN ( ' . $strRemotePrimaryKeys . ' )
						AND mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );

	}

	public function fetchNonIntegratedMaintenanceRequestsByPropertyIdsByCid( $arrintPropertyIds, $intCid, $objDatabase ) {

		if( false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						DISTINCT ON (mr.id)
						mr.*
					FROM
						maintenance_requests mr,
						integration_clients ic
					WHERE
						mr.cid = ic.cid
						AND ic.integration_service_id = ' . ( int ) \CIntegrationService::SEND_MAINTENANCE_REQUEST . '
						AND mr.cid = ' . ( int ) $intCid . '
						AND mr.remote_primary_key IS NULL
						AND ic.created_on < mr.created_on
						AND mr.property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' )
						AND mr.deleted_by IS NULL';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchAllOpenAndSomeClosedMaintenanceRequestsByCustomerIdByDateByPropertyIdByCid( $intCustomerId, $intTimestamp, $boolHideExternalWorkOrders = false, $objLease, $intPropertyId, $intCid, $objDatabase, $boolIsUnitWide = false, $boolIsLeaseWide = false ) {

		if( true == $boolIsUnitWide ) {
			$strSelectSql = ' vmr.property_unit_id = ' . ( int ) $objLease->getPropertyUnitId();
		} else if( true == $boolIsLeaseWide ) {
			$strSelectSql = ' vmr.lease_id = ' . ( int ) $objLease->getId();
		} else {
			$strSelectSql = ' vmr.customer_id = ' . ( int ) $intCustomerId;
		}
		$strSql = 'SELECT util_set_locale( \'' . \CLocaleContainer::createService()->getLocaleCode() . '\', \'' . \CLocaleContainer::createService()->getDefaultLocaleCode() . '\' );
					SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						util_get_translated( \'name\', ms.name, ms.details ) AS maintenance_status_name,
						util_get_system_translated( \'name\', mst.name, mst.details ) AS maintenance_status_type_name,
						mst.id as maintenance_status_type_id,
						vmr.*
					FROM
						view_maintenance_requests vmr JOIN maintenance_statuses ms ON (ms.cid = vmr.cid AND ms.id = vmr.maintenance_status_id )
						JOIN maintenance_status_types mst ON (ms.maintenance_status_type_id = mst.id)
					WHERE
						 ' . $strSelectSql . '
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . '
						AND vmr.deleted_by IS NULL
						AND vmr.lease_id IS NOT NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.is_resident_visible = 1';

		if( true == $boolHideExternalWorkOrders ) {
			$strSql .= ' AND vmr.ps_product_id != ' . \CPsProduct::PMS_INTEGRATION;
		}

		if( false == is_null( $intTimestamp ) ) {
			$strSql .= ' AND vmr.actual_start_datetime >= \'' . date( 'm/d/Y H:i:s', $intTimestamp ) . '\'';
		}

		if( true == \valObj( $objLease, 'CLease' ) ) {
			if( false == is_null( trim( $objLease->getMoveInDate() ) ) && 0 < strlen( trim( $objLease->getMoveInDate() ) ) ) {
				$strSql .= ' AND vmr.actual_start_datetime >= \'' . date( 'm/d/Y H:i:s', strtotime( $objLease->getMoveInDate() ) ) . '\'';
			}

			$boolIsPastMaintenanceRequest = false;
			if( \COccupancyType::COMMERCIAL === ( int ) $objLease->getOccupancyTypeId() && \CLeaseStatusType::PAST != $objLease->getLeaseStatusTypeId() ) {
				$boolIsPastMaintenanceRequest = true;
			}

			if( false == $boolIsPastMaintenanceRequest && false == is_null( trim( $objLease->getMoveOutDate() ) ) && 0 < strlen( trim( $objLease->getMoveOutDate() ) ) ) {
				$strSql .= ' AND vmr.actual_start_datetime <= \'' . date( 'm/d/Y H:i:s', strtotime( $objLease->getMoveOutDate() ) ) . '\'';
			}
		}

		$strSql .= ' ORDER BY
						vmr.actual_start_datetime DESC';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchAllOpenMaintenanceRequestsByPropertyUnitIdByPropertyIdByCid( $boolHideExternalWorkOrders = false, $objLease, $intPropertyId, $intCid, $objDatabase ) {

		if( false == \valObj( $objLease, 'CLease' ) || ( true == \valObj( $objLease, 'CLease' ) && true == is_null( trim( $objLease->getPropertyUnitId() ) ) ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						util_get_translated( \'name\', mst.name, mst.details ) AS maintenance_status_name,
						util_get_system_translated( \'name\', mst1.name, mst1.details ) AS maintenance_status_type_name,
						vmr.*,
						mst.id AS mst_id,
						mst.code,
						mst.cid
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON (vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid )
						JOIN maintenance_status_types mst1 ON ( mst1.id = mst.maintenance_status_type_id )
					WHERE
						vmr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . '
						AND mst.maintenance_status_type_id =' . ( int ) \CMaintenanceStatusType::OPEN . '
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.deleted_by IS NULL
						AND vmr.lease_id IS NOT NULL
						AND vmr.property_unit_id = ' . ( int ) $objLease->getPropertyUnitId() . '
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.is_resident_visible = 1';

		if( true == $boolHideExternalWorkOrders ) {
			$strSql .= ' AND vmr.ps_product_id != ' . ( int ) \CPsProduct::PMS_INTEGRATION;
		}

		if( false == is_null( trim( $objLease->getMoveInDate() ) ) && 0 < strlen( trim( $objLease->getMoveInDate() ) ) ) {
			$strSql .= ' AND vmr.actual_start_datetime >= \'' . date( 'm/d/Y H:i:s', strtotime( $objLease->getMoveInDate() ) ) . '\'';
		}

		if( false == is_null( trim( $objLease->getMoveOutDate() ) ) && 0 < strlen( trim( $objLease->getMoveOutDate() ) ) ) {
			$strSql .= ' AND vmr.actual_start_datetime <= \'' . date( 'm/d/Y H:i:s', strtotime( $objLease->getMoveOutDate() ) ) . '\'';
		}

		$strSql .= ' ORDER BY
						vmr.actual_start_datetime DESC';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchOpenMaintenanceRequestsCountByPropertyIdsByCid( $arrintPropertyIds, $intCid, $objDatabase ) {

		if( false == \valArr( $arrintPropertyIds ) ) {
			return 0;
		}

		$strSql = 'SELECT
						count(mr.id)
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mr.id = mrd.maintenance_request_id AND mr.cid = mrd.cid)
						JOIN maintenance_statuses ms ON ( ms.id = mr.maintenance_status_id AND	ms.cid = mr.cid )
					WHERE
						mr.property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' )
						AND mr.cid = ' . ( int ) $intCid . '
						AND ms.is_hidden_on_dashboard <> 1
						AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
						AND mr.parent_maintenance_request_id IS NULL
						AND mrd.completed_datetime IS NULL
						AND mr.deleted_by IS NULL';

		$arrstrOpenMaintenanceRequestCount = ( array ) \fetchData( $strSql, $objDatabase );

		return ( true == isset ( $arrstrOpenMaintenanceRequestCount[0]['count'] ) ) ? ( int ) $arrstrOpenMaintenanceRequestCount[0]['count'] : 0;
	}

	public function fetchAllNonDeletedMaintenanceRequestsByCustomerIdByCid( $intCustomerId, $intCid, $objDatabase ) {

		if( false == isset( $intCustomerId ) || true == is_null( $intCustomerId ) ) {
			return NULL;
		}

		$strSql = 'SELECT 
							util_get_translated( \'problem_description\', problem_description, details ) AS problem_description,
							util_get_translated( \'additional_info\', additional_info, details ) AS additional_info,
							util_get_translated( \'location_specifics\', location_specifics, details ) AS location_specifics,
							util_get_translated( \'ignore_response_reason\', ignore_response_reason, details ) AS ignore_response_reason,
							util_get_translated( \'customer_name_first\', customer_name_first, details ) AS customer_name_first,
							util_get_translated( \'customer_name_last\', customer_name_last, details ) AS customer_name_last,
							util_get_translated( \'unit_number\', unit_number, details ) AS unit_number,
							* 
						FROM 
							view_maintenance_requests 
						WHERE 
							customer_id = ' . ( int ) $intCustomerId . ' 
							AND cid = ' . ( int ) $intCid . ' 
							AND deleted_on IS NULL';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchAllNonDeletedMaintenanceRequestsByCustomerIdsByCid( $arrintCustomerIds, $intCid, $objDatabase ) {

		if( false == \valArr( $arrintCustomerIds ) ) {
			return NULL;
		}

		$strSql = 'SELECT 
							util_get_translated( \'problem_description\', problem_description, details ) AS problem_description,
							util_get_translated( \'additional_info\', additional_info, details ) AS additional_info,
							util_get_translated( \'location_specifics\', location_specifics, details ) AS location_specifics,
							util_get_translated( \'ignore_response_reason\', ignore_response_reason, details ) AS ignore_response_reason,
							util_get_translated( \'customer_name_first\', customer_name_first, details ) AS customer_name_first,
							util_get_translated( \'customer_name_last\', customer_name_last, details ) AS customer_name_last,
							util_get_translated( \'unit_number\', unit_number, details ) AS unit_number,
							* 
						FROM 
							view_maintenance_requests 
						WHERE 
							customer_id IN ( ' . implode( ',', $arrintCustomerIds ) . ' ) 
							AND cid = ' . ( int ) $intCid . ' 
							AND deleted_on IS NULL';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchAllNonDeletedMaintenanceRequestsByCustomerIdsByPropertyIdsByCid( $arrintCustomerIds, $arrintPropertyIds, $intCid, $objDatabase ) {

		if( false == \valArr( $arrintCustomerIds ) && false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}

		$strSql = 'SELECT 
							util_get_translated( \'problem_description\', problem_description, details ) AS problem_description,
							util_get_translated( \'additional_info\', additional_info, details ) AS additional_info,
							util_get_translated( \'location_specifics\', location_specifics, details ) AS location_specifics,
							util_get_translated( \'ignore_response_reason\', ignore_response_reason, details ) AS ignore_response_reason,
							util_get_translated( \'customer_name_first\', customer_name_first, details ) AS customer_name_first,
							util_get_translated( \'customer_name_last\', customer_name_last, details ) AS customer_name_last,
							util_get_translated( \'unit_number\', unit_number, details ) AS unit_number,
							* 
						FROM 
							view_maintenance_requests 
						WHERE 
							customer_id IN ( ' . implode( ',', $arrintCustomerIds ) . ' ) 
							AND property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' ) 
							AND cid = ' . ( int ) $intCid . ' 
							AND deleted_on IS NULL';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchNewMaintenanceFilterSearchCriteria( $objCompanyMaintenanceFilter, $boolIsSearchByFilter = false, $boolIsFromMaintenanceDashboard = false, $boolGetAssignedCount = false ) {

		$arrstrAndSearchParameters = [];
		$strUnitAlias = 'pu.';
		$strMaintenanceAlias = 'mrd.';

		/**
		 *  This is temporary code will remove after complete optimization for all sql's
		 */
		if( true == $boolIsFromMaintenanceDashboard ) {
			$strUnitAlias = 'vmr.';
			$strMaintenanceAlias = 'vmr.';
		}
		if( true == \valStr( $objCompanyMaintenanceFilter->getSearchKeyword() ) ) {
			$arrstrAdvancedSearchQuickSearch = explode( ' ', $objCompanyMaintenanceFilter->getSearchKeyword() );
			if( true == \valArr( $arrstrAdvancedSearchQuickSearch ) ) {
				$arrstrAdvancedSearchParameters = [];
				foreach( $arrstrAdvancedSearchQuickSearch as $strKeywordAdvancedSearchQuickSearch ) {
					if( false == empty( $strKeywordAdvancedSearchQuickSearch ) ) {
						array_push( $arrstrAdvancedSearchParameters, ' ( ' . $strUnitAlias . 'unit_number ILIKE E\'%' . addslashes( $strKeywordAdvancedSearchQuickSearch ) . '%\'' );
						array_push( $arrstrAdvancedSearchParameters, $strMaintenanceAlias . 'customer_name_first ILIKE E\'%' . addslashes( $strKeywordAdvancedSearchQuickSearch ) . '%\'' );
						array_push( $arrstrAdvancedSearchParameters, $strMaintenanceAlias . 'customer_name_last ILIKE E\'%' . addslashes( $strKeywordAdvancedSearchQuickSearch ) . '%\'' );
						array_push( $arrstrAdvancedSearchParameters, 'vmr.id = ' . ( int ) $strKeywordAdvancedSearchQuickSearch . ')' );
					}
				}

				$arrstrFilteredAdvancedSearchParameters = array_filter( $arrstrAdvancedSearchParameters );

				if( false == empty( $arrstrFilteredAdvancedSearchParameters ) ) {
					$strAndSearchParameter 			= ' ( ' . implode( ' OR ', $arrstrAdvancedSearchParameters ) . ' )';
					$strAndSearchParameter 			= explode( ') OR ', $strAndSearchParameter );
					$strAndSearchParameter 			= implode( ') AND', $strAndSearchParameter );
					$arrstrAndSearchParameters[] 	= $strAndSearchParameter;
				}
			}
		}

		// Create SQL parameters.
		if( true == $boolIsSearchByFilter ) {
			if( true == \valArr( $objCompanyMaintenanceFilter->getPsProductIds() ) ) {
				$arrstrAndSearchParameters[] = ' vmr.ps_product_id IN (' . implode( ',', $objCompanyMaintenanceFilter->getPsProductIds() ) . ')';
			}

			if( false == is_null( $objCompanyMaintenanceFilter->getStartDatetime() ) && false == is_null( $objCompanyMaintenanceFilter->getEndDatetime() ) ) {
				$arrstrAndSearchParameters[] = '( ( ' . $strMaintenanceAlias . 'actual_start_datetime >= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getStartDatetime() ) ) . ' 00:00:00\' AND ' . $strMaintenanceAlias . 'actual_start_datetime <= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getEndDatetime() ) ) . ' 23:59:59\' ) OR vmr.maintenance_request_type_id = 1 )';
			} else {

				if( false == is_null( $objCompanyMaintenanceFilter->getStartDatetime() ) ) {
					$arrstrAndSearchParameters[] = $strMaintenanceAlias . 'actual_start_datetime >= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getStartDatetime() ) ) . ' 00:00:00\'';
				}
				if( false == is_null( $objCompanyMaintenanceFilter->getEndDatetime() ) ) {
					$arrstrAndSearchParameters[] = $strMaintenanceAlias . 'actual_start_datetime <= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getEndDatetime() ) ) . ' 23:59:59\'';
				}
			}
			if( false == is_null( $objCompanyMaintenanceFilter->getCustomerId() ) ) {
				$arrstrAndSearchParameters[] = ' ( vmr.customer_id = ' . ( int ) $objCompanyMaintenanceFilter->getCustomerId() . ')';
			}
			if( true == \valArr( $objCompanyMaintenanceFilter->getMaintenanceStatusIds() ) ) {
				$arrstrAndSearchParameters[] = ' vmr.maintenance_status_id IN (' . implode( ',', $objCompanyMaintenanceFilter->getMaintenanceStatusIds() ) . ')';
			}
			if( true == \valArr( $objCompanyMaintenanceFilter->getMaintenanceStatusTypeIds() ) ) {
				$arrstrAndSearchParameters[] = ' mst.maintenance_status_type_id IN ( ' . implode( ' , ', $objCompanyMaintenanceFilter->getMaintenanceStatusTypeIds() ) . ' )';
			}
			if( true == \valArr( $objCompanyMaintenanceFilter->getMaintenancePriorityIds() ) ) {
				$arrstrAndSearchParameters[] = ' vmr.maintenance_priority_id IN (' . implode( ',', $objCompanyMaintenanceFilter->getMaintenancePriorityIds() ) . ')';
			}
			if( true == \valArr( $objCompanyMaintenanceFilter->getMaintenanceLocationIds() ) ) {
				$arrstrAndSearchParameters[] = ' vmr.maintenance_location_id IN (' . implode( ',', $objCompanyMaintenanceFilter->getMaintenanceLocationIds() ) . ')';
			}
			if( 0 == $objCompanyMaintenanceFilter->getSearchAllProblemTypes() && true == \valArr( $objCompanyMaintenanceFilter->getMaintenanceProblemIds() ) ) {
				$arrstrAndSearchParameters[] = ' vmr.maintenance_problem_id IN (' . implode( ',', $objCompanyMaintenanceFilter->getMaintenanceProblemIds() ) . ')';
			}

			if( true == \valArr( $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) && false == $boolGetAssignedCount ) {

				if( true == in_array( 1, $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) && false == in_array( 'all_users', $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) ) {
					$arrstrAndSearchParameters[] = ' ( vmr.company_employee_id IN (' . implode( ',', $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) . ') OR vmr.company_employee_id IS NULL )';
				} elseif( true == in_array( 'all_users', $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) && false == in_array( 1, $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) ) {
					$arrstrAndSearchParameters[] = ' vmr.company_employee_id IS NOT NULL ';
				} elseif( 'true' == $objCompanyMaintenanceFilter->getIsAssignedToOthers() ) {
					$arrstrAndSearchParameters[] = ' vmr.company_employee_id IS NOT NULL AND vmr.company_employee_id NOT IN (' . implode( ',', $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) . ')';
				} elseif( true == $objCompanyMaintenanceFilter->getIsNotAssigned() ) {
					$arrstrAndSearchParameters[] = ' vmr.company_employee_id IS NULL ';
				} elseif( false == in_array( 1, $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) && false == in_array( 'all_users', $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) ) {

					$arrstrAndSearchParameters[] = ' vmr.company_employee_id IN (' . implode( ',', $objCompanyMaintenanceFilter->getCompanyEmployeeIds() ) . ')';
				}

			} elseif( true == $objCompanyMaintenanceFilter->getIsNotAssigned() ) {
				$arrstrAndSearchParameters[] = ' vmr.company_employee_id IS NULL ';
			}

			if( true == \valArr( $objCompanyMaintenanceFilter->getApPayeeIds() ) ) {
				$arrstrAndSearchParameters[] = ' vmr.ap_payee_id IN (' . implode( ',', $objCompanyMaintenanceFilter->getApPayeeIds() ) . ')';
			}

			if( false == is_null( $objCompanyMaintenanceFilter->getCreatedOnFrom() ) && 'Min' != $objCompanyMaintenanceFilter->getCreatedOnFrom() ) {
				$arrstrAndSearchParameters[] = $strMaintenanceAlias . 'actual_start_datetime >= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getCreatedOnFrom() ) ) . ' 00:00:00\'';
			}
			if( false == is_null( $objCompanyMaintenanceFilter->getCreatedOnTo() ) && 'Max' != $objCompanyMaintenanceFilter->getCreatedOnTo() ) {
				$arrstrAndSearchParameters[] = $strMaintenanceAlias . 'actual_start_datetime <= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getCreatedOnTo() ) ) . ' 23:59:59\'';
			}
			if( false == is_null( $objCompanyMaintenanceFilter->getCompletedOnFrom() ) && 'Min' != $objCompanyMaintenanceFilter->getCompletedOnFrom() ) {
				$arrstrAndSearchParameters[] = $strMaintenanceAlias . 'completed_datetime >= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getCompletedOnFrom() ) ) . ' 00:00:00\'';
			}
			if( false == is_null( $objCompanyMaintenanceFilter->getCompletedOnTo() ) && 'Max' != $objCompanyMaintenanceFilter->getCompletedOnTo() ) {
				$arrstrAndSearchParameters[] = $strMaintenanceAlias . 'completed_datetime <= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getCompletedOnTo() ) ) . ' 23:59:59\'';
			}

			if( false == is_null( $objCompanyMaintenanceFilter->getScheduledOnFrom() ) && false == is_null( $objCompanyMaintenanceFilter->getScheduledOnTo() ) ) {

				$arrstrAndSearchParameters[] = ' ( ( ( COALESCE( date( ' . $strMaintenanceAlias . 'scheduled_start_datetime ), date( ' . $strMaintenanceAlias . 'scheduled_end_datetime ) ) >=  \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getScheduledOnFrom() ) ) . '\'	AND COALESCE( date( ' . $strMaintenanceAlias . 'scheduled_start_datetime ), date( ' . $strMaintenanceAlias . 'scheduled_end_datetime ) ) <=  \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getScheduledOnTo() ) ) . '\' )  OR ( COALESCE( date( ' . $strMaintenanceAlias . 'scheduled_end_datetime ), date( ' . $strMaintenanceAlias . 'scheduled_start_datetime ) ) >=  \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getScheduledOnFrom() ) ) . '\' AND COALESCE( date( ' . $strMaintenanceAlias . 'scheduled_end_datetime ), date( ' . $strMaintenanceAlias . 'scheduled_start_datetime ) ) <= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getScheduledOnTo() ) ) . '\' ) ) OR ( COALESCE( date( ' . $strMaintenanceAlias . 'scheduled_start_datetime ), date( ' . $strMaintenanceAlias . 'scheduled_end_datetime ) ) < \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getScheduledOnFrom() ) ) . '\' AND COALESCE( date( ' . $strMaintenanceAlias . 'scheduled_end_datetime ), date( ' . $strMaintenanceAlias . 'scheduled_start_datetime ) ) > \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getScheduledOnTo() ) ) . '\' ) )';
			}

			if( false == is_null( $objCompanyMaintenanceFilter->getDueOnFrom() ) && false == is_null( $objCompanyMaintenanceFilter->getDueOnTo() ) ) {
				$arrstrAndSearchParameters[] = ' date( vmr.due_date ) >= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getDueOnFrom() ) ) . '\' AND  date( vmr.due_date ) <= \'' . date( 'Y-m-d', strtotime( $objCompanyMaintenanceFilter->getDueOnTo() ) ) . '\'';
			}
		}
		if( 0 < count( $arrstrAndSearchParameters ) ) {
			return $arrstrAndSearchParameters;
		} else {
			return NULL;
		}
	}

	public function fetchMaintenanceRequestsByPropertyIdByMaintenanceProblemIdByCid( $intPropertyId, $intMaintenanceProblemId, $intCid, $objDatabase ) {

		$strCondition = ( false == is_null( $intPropertyId ) || 0 < $intPropertyId ) ? ' AND mr.property_id = ' . ( int ) $intPropertyId : NULL;

		$strSql = 'SELECT mr.* FROM
						maintenance_requests mr
					WHERE
						mr.cid = ' . ( int ) $intCid . $strCondition . '
						AND mr.deleted_by IS NULL
					AND ( mr.maintenance_problem_id = ' . ( int ) $intMaintenanceProblemId . ' OR mr.sub_maintenance_problem_id = ' . ( int ) $intMaintenanceProblemId . ' )
				  ';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByPropertyIdByMaintenanceStatusIdByCid( $intPropertyId, $intMaintenanceStatusId, $intCid, $objDatabase ) {

		$strCondition = ( false == is_null( $intPropertyId ) || 0 < $intPropertyId ) ? ' AND mr.property_id = ' . ( int ) $intPropertyId : NULL;

		$strSql = 'SELECT mr.*
					FROM
						maintenance_requests mr
					WHERE
						mr.cid = ' . ( int ) $intCid . $strCondition . '
						AND mr.deleted_by IS NULL
						AND ( mr.maintenance_status_id = ' . ( int ) $intMaintenanceStatusId . ' )';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByPropertyIdByMaintenanceLocationIdByCid( $intPropertyId, $intMaintenanceLocationId, $intCid, $objDatabase ) {

		$strCondition = ( false == is_null( $intPropertyId ) || 0 < $intPropertyId ) ? ' AND mr.property_id = ' . ( int ) $intPropertyId : NULL;

		$strSql = 'SELECT
						mr.*
					FROM
						maintenance_requests mr
					WHERE
						mr.cid = ' . ( int ) $intCid . $strCondition . '
						AND mr.maintenance_location_id = ' . ( int ) $intMaintenanceLocationId;

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByPropertyIdByMaintenancePriorityIdByCid( $intPropertyId, $intMaintenancePriorityId, $intCid, $objDatabase ) {

		$strCondition = ( false == is_null( $intPropertyId ) || 0 < $intPropertyId ) ? ' AND mr.property_id = ' . ( int ) $intPropertyId : NULL;

		$strSql = 'SELECT mr.*
					FROM
						maintenance_requests mr
					WHERE
						mr.cid = ' . ( int ) $intCid . $strCondition . '
						AND mr.deleted_by IS NULL
						AND mr.maintenance_priority_id = ' . ( int ) $intMaintenancePriorityId;

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByRemotePrimaryKeysByIntegrationDatabaseIdByCid( $arrstrMaintenanceRequestRemotePrimaryKeys, $intIntegrationDatabaseId, $intCid, $objDatabase ) {
		if( false == \valArr( $arrstrMaintenanceRequestRemotePrimaryKeys ) ) {
			return NULL;
		}

		$strSql = 'SELECT DISTINCT ON (vmr.id) 
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
					FROM
						view_maintenance_requests vmr,
						property_integration_databases pid
					WHERE
						vmr.property_id = pid.property_id
						AND vmr.cid = pid.cid
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL
						AND lower(vmr.remote_primary_key) IN ( \'' . implode( '\',\'', $arrstrMaintenanceRequestRemotePrimaryKeys ) . '\')
						AND pid.integration_database_id = ' . ( int ) $intIntegrationDatabaseId;

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByCallIdByCid( $intCallId, $intCid, $objDatabase ) {
		if( false == \valId( $intCallId ) || false == \valId( $intCid ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						mr.*
					FROM
						maintenance_requests mr
						JOIN maintenance_request_calls mrc ON ( mrc.maintenance_request_id = mr.id AND mrc.cid = mr.cid )
					WHERE
						mr.deleted_by IS NULL
						AND mrc.call_id = ' . ( int ) $intCallId . '
						AND mr.cid = ' . ( int ) $intCid;

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestPrintReportByMaintenanceRequestIdsByCid( $arrintMaintenanceRequestIds, $intCid, $objDatabase ) {

		$arrstrProductName = \CPsProduct::createService()->getProductNames();

		$strSql = 'SELECT
						mr.*,
						cp.property_name,
						ce.name_first,
						ce.name_last,
						util_get_translated( \'name\', ms.name, ms.details ) AS maintenance_status_name,
						util_get_translated( \'name\', mp.name, mp.details ) AS maintenance_priority_name,
						mprob.name AS maintenance_problem_name,
						CASE WHEN ml.is_system = 1 THEN NULL WHEN puml.name IS NOT NULL THEN puml.name ELSE ml.name END AS maintenance_location_name,
		                mrt.id AS maintenance_request_type_id,
						CASE
							 WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
							 WHEN mr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
								\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
							 WHEN mr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA_FACILITIES_APP . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_FACILITIES_APP] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATAMATION] . '\'
						END AS origin,
						mrd.scheduled_start_datetime,
						mrd.scheduled_end_datetime,
						mrd.actual_start_datetime,
						pu.unit_number,
						ms.maintenance_status_type_id,
						mp.maintenance_priority_type_id,
						c.name_full AS customer_full_name
					FROM
						maintenance_requests mr
                        JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id )
						LEFT JOIN leases l ON ( mr.cid = l.cid AND mr.property_id = l.property_id AND mr.lease_id = l.id )
						LEFT JOIN property_units pu ON ( mr.cid = pu.cid AND mr.property_id = pu.property_id AND ( ( l.property_unit_id = pu.id AND mr.lease_id IS NOT NULL ) OR ( mr.property_unit_id = pu.id AND mr.lease_id IS NULL ) ) )
						LEFT JOIN properties cp ON ( mr.property_id = cp.id AND mr.cid = cp.cid )
						JOIN maintenance_statuses ms ON ( mr.maintenance_status_id = ms.id AND mr.cid = ms.cid )
						JOIN maintenance_priorities mp ON ( mr.maintenance_priority_id = mp.id AND mr.cid = mp.cid )
						LEFT JOIN maintenance_problems mprob ON ( mr.maintenance_problem_id = mprob.id AND mr.cid = mprob.cid )
						LEFT JOIN company_employees ce ON ( mr.company_employee_id = ce.id AND mr.cid = ce.cid )
						LEFT JOIN maintenance_request_details mrd ON ( mrd.maintenance_request_id = mr.id AND mrd.cid = mr.cid )
						LEFT JOIN maintenance_locations ml ON( mr.maintenance_location_id = ml.id AND mr.cid = ml.cid )
						LEFT JOIN customers c ON ( mr.cid = c.cid AND mr.customer_id = c.id )
						LEFT JOIN property_unit_maintenance_locations puml ON (mr.cid = puml.cid AND mr.property_unit_maintenance_location_id = puml.id)
					WHERE
						cp.is_disabled <> 1 
						AND mr.cid = ' . ( int ) $intCid . '
		                AND mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchSubMaintenanceRequestsByMaintenanceRequestIdByCid( $intMaintenanceRequestId, $intCid, $objDatabase, $boolFetchOpenSubtasks = false, $boolFetchSubtasksScheduledEndDate = false, $boolIsFromEntrataMobile = false, $boolIsFromDashboard = false ) {

		$strSelectSql = '';
		if( false != $boolFetchSubtasksScheduledEndDate ) {
			$strSelectSql .= 'mrd.*,';
			$strJoinSql = 'LEFT JOIN maintenance_request_details mrd ON ( mrd.maintenance_request_id = mr.id AND mrd.cid = mr.cid )';
		}

		if( true == $boolIsFromEntrataMobile ) {
			$strSelectSql .= ' mr.id, mr.due_date,';
		} else {
			$strSelectSql .= 'mr.*,';
		}

		$strSql = 'SELECT ' . $strSelectSql . '
						ms.maintenance_status_type_id,
						ms.name AS maintenance_status_name,
						mpt.name AS maintenance_priority_name,
						CASE WHEN ml.is_system = 1 THEN NULL
							WHEN puml.name IS NOT NULL THEN util_get_translated( \'name\', puml.name, puml.details )
							ELSE util_get_translated( \'name\', ml.name, ml.details )
						END AS maintenance_location_name,
						util_get_translated( \'name\', mpr.name, mpr.details ) AS maintenance_problem_name,
						mpc.name AS maintenance_problem_action_name,
						mpc.is_published AS is_published_problem_action,
			 			mp.maintenance_priority_type_id,
						CASE
							WHEN mr.company_employee_id IS NOT NULL
								THEN ce.name_first || \' \' ||ce.name_last
							ELSE \'\'
						END AS company_employee_fullname,
						ap.company_name AS ap_payee_company_name,
						tz.time_zone_name,
						mrt.name as maintenance_request_type
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses ms ON ( mr.maintenance_status_id = ms.id AND mr.cid = ms.cid )
						JOIN maintenance_priorities mp ON ( mr.maintenance_priority_id = mp.id AND mr.cid = mp.cid )
						LEFT JOIN maintenance_priority_types mpt ON ( mp.maintenance_priority_type_id = mpt.id )
						LEFT JOIN maintenance_locations ml ON ( mr.maintenance_location_id = ml.id AND mr.cid = ml.cid )
						LEFT JOIN maintenance_problems mpr ON ( mr.maintenance_problem_id = mpr.id AND mr.cid = mpr.cid )
						LEFT JOIN maintenance_problems mpc ON ( mpc.cid = mr.cid AND mpc.id = mr.sub_maintenance_problem_id AND mr.sub_maintenance_problem_id IS NOT NULL)
						LEFT JOIN company_employees ce ON ( mr.cid = ce.cid AND mr.company_employee_id = ce.id AND mr.company_employee_id IS NOT NULL)
						LEFT JOIN ap_payees ap ON ( mr.cid = ap.cid AND mr.ap_payee_id = ap.id AND mr.ap_payee_id IS NOT NULL)
						LEFT JOIN property_unit_maintenance_locations puml ON (mr.cid = puml.cid AND mr.property_unit_maintenance_location_id = puml.id AND mr.property_unit_maintenance_location_id IS NOT NULL)
						LEFT JOIN maintenance_request_types mrt ON mrt.id = mr.maintenance_request_type_id
						JOIN properties p ON ( mr.property_id = p.id AND mr.cid = p.cid )
						JOIN time_zones tz ON ( tz.id = p.time_zone_id )
						' . $strJoinSql . '
					WHERE
						mr.parent_maintenance_request_id = ' . ( int ) $intMaintenanceRequestId . '
						AND mr.cid = ' . ( int ) $intCid . '
						AND mr.deleted_on IS NULL
						AND mr.deleted_by IS NULL ';

		if( true == $boolFetchOpenSubtasks ) {
			$strSql .= 'AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';
		}

		$strSql .= 'ORDER BY
						mr.id ';

		if( true == $boolIsFromEntrataMobile || true == $boolIsFromDashboard ) {
			return \fetchData( $strSql, $objDatabase );
		} else {
			return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
		}
	}

	public function fetchSubMaintenanceRequestHighestOrLowestEndDateByTypeByMaintenanceRequestIdByCid( $boolIsHighest, $intMaintenanceRequestId, $intCid, $objDatabase ) {
		$strSql = ' SELECT
						vmr.scheduled_end_datetime
					FROM
						view_maintenance_requests vmr
					WHERE
						vmr.parent_maintenance_request_id = ' . ( int ) $intMaintenanceRequestId . '
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_on IS NULL
						AND vmr.deleted_by IS NULL
						AND vmr.scheduled_end_datetime IS NOT NULL
					ORDER BY ';

		if( true == $boolIsHighest ) {
			$strSql	.= ' vmr.scheduled_end_datetime DESC ';
		} else {
			$strSql	.= ' vmr.scheduled_end_datetime ASC ';
		}

		$strSql	.= ' LIMIT 1';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMakeReadyMaintenanceRequestsForMakeReadyBoardByMakeReadyBoardFilter( $objMakeReadyBoardFilter, $objDatabase, $boolFetchCount = false, $boolFetchData = false ) {

		$intCid 		= $objMakeReadyBoardFilter->getCid();
		$intPropertyId	= $objMakeReadyBoardFilter->getPropertyId();

		return $this->fetchMakeReadyMaintenanceRequestsForMakeReadyBoardByCidByPropertyId( $intCid, $intPropertyId, $objMakeReadyBoardFilter, $objDatabase, $boolFetchCount, $boolFetchData );

	}

	public function fetchMakeReadyMaintenanceRequestsCountForMakeReadyBoardByMakeReadyBoardFilter( $objMakeReadyBoardFilter, $objDatabase, $boolFetchCount = true, $boolFetchData = false ) {

		$intCid 		= $objMakeReadyBoardFilter->getCid();
		$intPropertyId	= $objMakeReadyBoardFilter->getPropertyId();

		return $this->fetchMakeReadyMaintenanceRequestsForMakeReadyBoardByCidByPropertyId( $intCid, $intPropertyId, $objMakeReadyBoardFilter, $objDatabase, $boolFetchCount, $boolFetchData );

	}

	public function fetchMakeReadyMaintenanceRequestsForMakeReadyBoardByCidByPropertyId( $intCid, $intPropertyId, $objMakeReadyBoardFilter, $objDatabase, $boolFetchCount = false, $boolFetchData = false, $boolIncludeDeletedUnits = false, $boolIncludeDeletedUnitSpaces = false, $boolIncludeDeletedFloorPlans = false ) {

		$strCheckDeletedUnitsSql 		= ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';
		$strCheckDeletedUnitSpacesSql	= ( false == $boolIncludeDeletedUnitSpaces ) ? ' AND us.deleted_on IS NULL' : '';
		$strCheckDeletedUnitSpacesAsSql = ( false == $boolIncludeDeletedUnitSpaces ) ? ' AND deleted_on IS NULL' : '';
		$strCheckDeletedFloorPlansSql	= ( false == $boolIncludeDeletedFloorPlans ) ? ' AND pf.deleted_on IS NULL' : '';

		$strAdditionalWhereConditionForMobileMrb = '';
		$intPageSize 							 = 0;

		if( true == \valObj( $objMakeReadyBoardFilter, 'CMakeReadyBoardFilter' ) && false == is_null( $objMakeReadyBoardFilter->getOrderByField() ) && 0 < strlen( $objMakeReadyBoardFilter->getOrderByField() ) ) {

			$strOrderByField = $objMakeReadyBoardFilter->getOrderByField();
			$strOrderBy      = NULL;
			$strOrderByType  = ' ASC ';

			$intPageSize = $objMakeReadyBoardFilter->getPageSize();
			if( 0 < $intPageSize ) {
				$intOffset = ( 0 < $objMakeReadyBoardFilter->getPageNumber() ) ? $intPageSize * ( $objMakeReadyBoardFilter->getPageNumber() - 1 ) : 0;
				$intLimit  = $intPageSize;
			}

			switch( $strOrderByField ) {

				case 'unit':
					$strOrderBy .= ' ORDER BY tbl_main.unit_number ';
					break;

				case 'lease_end_date':
					$strOrderBy .= ' ORDER BY tbl_main.lease_end_date ';
					break;

				case 'maintenance_request_id':
					$strOrderBy .= ' ORDER BY vmr_id ';
					break;

				case 'scheduled_end_datetime':
					$strOrderBy .= ' ORDER BY tbl_main.scheduled_end_datetime ';
					break;

				case 'move_out_date':
					$strOrderBy .= ' ORDER BY tbl_main.move_out_date ';
					break;

				case 'move_in_date':
					$strOrderBy .= ' ORDER BY tbl_main.move_in_date ';
					break;

				case 'days_left':
					$strOrderBy .= ' ORDER BY tbl_main.days_remaining ';
					break;

				case 'default':
				default:
					$strOrderBy .= ' ORDER BY mst_id, tbl_main.days_remaining, vmr_id ';
					break;

			}

			if( 0 == $objMakeReadyBoardFilter->getOrderByType() ) {
				$strOrderByType = ' ASC NULLS LAST';
			} else {
				$strOrderByType = ' DESC NULLS LAST';
			}

			$strMrbStatus = $objMakeReadyBoardFilter->getMrbStatus();

			switch( $strMrbStatus ) {
				case 'over_due':
					$strAdditionalWhereConditionForMobileMrb = ' AND ( EXISTS (
																		SELECT vmrs.id
																		FROM view_maintenance_requests vmrs
																		JOIN maintenance_statuses msa ON ( msa.cid = vmrs.cid AND vmrs.maintenance_status_id = msa.id and msa.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ) 
																		WHERE vmrs.parent_maintenance_request_id = tbl_main.vmr_id
																		AND vmrs.cid = ' . ( int ) $intCid . '
																		AND vmrs.property_id = ' . ( int ) $intPropertyId . '
																		AND vmrs.deleted_by IS NULL
																	)
																	OR
																	 NOT EXISTS (
																				 SELECT
																					 vmrs.id
																				 FROM
																					 view_maintenance_requests vmrs
																				 WHERE
																					 vmrs.parent_maintenance_request_id = tbl_main.vmr_id
																					 AND vmrs.cid = ' . ( int ) $intCid . '
																					 AND vmrs.property_id = ' . ( int ) $intPropertyId . '
																				)
																		)
																AND days_remaining < 0 AND scheduled_end_datetime IS NOT NULL
																AND tbl_main.maintenance_status_type_id <> ' . \CMaintenanceStatusType::SUSPENDED;
					break;

				case 'upcoming':
					$strAdditionalWhereConditionForMobileMrb = ' AND ( EXISTS (
																		SELECT vmrs.id
																		FROM view_maintenance_requests vmrs
																		JOIN maintenance_statuses msa ON ( msa.cid = vmrs.cid AND vmrs.maintenance_status_id = msa.id and msa.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ) 
																		WHERE vmrs.parent_maintenance_request_id = tbl_main.vmr_id
																		AND vmrs.cid = ' . ( int ) $intCid . '
																		AND vmrs.property_id = ' . ( int ) $intPropertyId . '
																		AND vmrs.deleted_by IS NULL
																	)
																	OR
																	NOT EXISTS (
																				 SELECT
																					 vmrs.id
																				 FROM
																					 view_maintenance_requests vmrs
																				 WHERE
																					 vmrs.parent_maintenance_request_id = tbl_main.vmr_id
																					 AND vmrs.cid = ' . ( int ) $intCid . '
																					 AND vmrs.property_id = ' . ( int ) $intPropertyId . '
																				)
																		)
																	AND ( days_remaining >= 0
																			OR days_remaining IS NULL )
																	AND tbl_main.maintenance_status_type_id <> ' . \CMaintenanceStatusType::SUSPENDED;
					break;

				case 'completed':
					$strAdditionalWhereConditionForMobileMrb = ' AND ( NOT EXISTS (
																		SELECT vmrs.id
																		FROM view_maintenance_requests vmrs
																		JOIN maintenance_statuses msa ON ( msa.cid = vmrs.cid AND vmrs.maintenance_status_id = msa.id and msa.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ) 
																		WHERE vmrs.parent_maintenance_request_id = tbl_main.vmr_id
																		AND vmrs.cid = ' . ( int ) $intCid . '
																		AND vmrs.property_id = ' . ( int ) $intPropertyId . '
																		AND vmrs.deleted_by IS NULL
																	)
																		OR
																		NOT EXISTS (
																			SELECT
																				vmrs.id
																			FROM
																				view_maintenance_requests vmrs
																			WHERE
																				vmrs.parent_maintenance_request_id = tbl_main.vmr_id
																				AND vmrs.cid = ' . ( int ) $intCid . '
																				AND vmrs.property_id = ' . ( int ) $intPropertyId . '
																				AND vmrs.deleted_by IS NULL
																				 )
																	)
																	AND tbl_main.maintenance_status_type_id <> ' . \CMaintenanceStatusType::SUSPENDED;
					break;

				case 'on_hold':
					$strAdditionalWhereConditionForMobileMrb = ' AND ( EXISTS (
																		SELECT vmrs.id
																		FROM view_maintenance_requests vmrs
																		JOIN maintenance_statuses msa ON ( msa.cid = vmrs.cid AND vmrs.maintenance_status_id = msa.id and msa.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ) 
																		WHERE vmrs.parent_maintenance_request_id = tbl_main.vmr_id
																		AND vmrs.cid = ' . ( int ) $intCid . '
																		AND vmrs.property_id = ' . ( int ) $intPropertyId . '
																		AND vmrs.deleted_by IS NULL
																	)
																	OR
																	 NOT EXISTS (
																				 SELECT
																					 vmrs.id
																				 FROM
																					 view_maintenance_requests vmrs
																				 WHERE
																					 vmrs.parent_maintenance_request_id = tbl_main.vmr_id
																					 AND vmrs.cid = ' . ( int ) $intCid . '
																					 AND vmrs.property_id = ' . ( int ) $intPropertyId . '
																				)
																		)
																AND tbl_main.maintenance_status_type_id = ' . \CMaintenanceStatusType::SUSPENDED;
					break;

				case 'all':
				default:
					$strAdditionalWhereConditionForMobileMrb = '';
					break;
			}
		}

		if( false != $boolFetchCount ) {

			$strSql = 'SELECT vmr.id AS vmr_id,
						 ms.id AS ms_id,
						 mst.id AS mst_id,
						 ms.maintenance_status_type_id AS maintenance_status_type_id,
						 date( vmr.scheduled_end_datetime ) - date( now() ) AS days_remaining,
						 scheduled_end_datetime';
		} else {

			$strSql = 'SELECT
							util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
							util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
							util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
							util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
							util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
							util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
							vmr.*,
							COALESCE( util_get_translated( \'unit_number\', us.unit_number, us.details ), pu.unit_number, vmr.unit_number ) AS unit_number,
							vmr.id AS vmr_id,
							ce.name_first,
							ce.name_last,
							ms.id AS ms_id,
							mst.id AS mst_id,
							ms.maintenance_status_type_id AS maintenance_status_type_id,
							date( vmr.scheduled_end_datetime ) - date( now() ) AS days_remaining,
							li.lease_end_date,
							CASE
								 WHEN ( SELECT count( id ) FROM unit_spaces WHERE property_unit_id = vmr.property_unit_id AND cid = vmr.cid ' . $strCheckDeletedUnitSpacesAsSql . ' ) > 1
								 THEN space_number
								 ELSE \'\'
							END AS space_number,
							 ( SELECT
									MAX( ca.lease_start_date )
								FROM
									cached_applications ca
									JOIN unit_spaces us ON us.id = ca.unit_space_id AND us.cid = ca.cid ' . $strCheckDeletedUnitSpacesSql . '
										JOIN lease_customers lc ON lc.lease_id = ca.lease_id AND lc.cid = ca.cid
								WHERE
									us.unit_space_status_type_id IN ( ' . \CUnitSpaceStatusType::NOTICE_RENTED . ' , ' . \CUnitSpaceStatusType::VACANT_RENTED_NOT_READY . ' )
									AND lc.lease_status_type_id IN ( ' . \CLeaseStatusType::FUTURE . ' , ' . \CLeaseStatusType::APPLICANT . ' )
									AND lc.customer_type_id = ' . \CCustomerType::PRIMARY . '
									AND ( ca.application_stage_id, ca.application_status_id ) IN ( ' . \sqlIntMultiImplode( \CApplicationStageStatus::$c_arrintCompletedApplicationStatusIds ) . ' )
									AND ca.unit_space_id = vmr.unit_space_id
									AND ca.cid = vmr.cid
							 ) AS move_in_date,
							lp.move_out_date,
							usst.name AS unit_space_status_type_name,
							usst.id AS unit_space_status_type_id,
							pf.floorplan_name AS property_floorplan_name,
							pb.building_name';
		}

		$strSql = $strSql . '
					 FROM
						 view_maintenance_requests vmr
						 JOIN maintenance_statuses ms ON ( ms.cid = vmr.cid AND vmr.maintenance_status_id = ms.id )
						 JOIN maintenance_status_types mst ON ( ms.maintenance_status_type_id = mst.id )
						 LEFT JOIN unit_spaces us ON ( vmr.unit_space_id = us.id AND vmr.cid = us.cid ' . $strCheckDeletedUnitSpacesSql . ' )
						 LEFT JOIN property_units pu ON ( pu.id = vmr.property_unit_id AND pu.property_id = vmr.property_id AND pu.cid = vmr.cid ' . $strCheckDeletedUnitsSql . ' )
						 LEFT JOIN leases l on ( l.id= vmr.lease_id AND l.cid = vmr.cid )
						 LEFT JOIN lease_intervals li on ( li.lease_id = vmr.lease_id and li.id=l.active_lease_interval_id and li.cid = vmr.cid )
						 LEFT JOIN lease_processes lp on ( lp.lease_id = vmr.lease_id and lp.cid = vmr.cid AND lp.customer_id IS NULL )
						 LEFT JOIN property_buildings pb ON ( pu.property_building_id = pb.id AND pu.property_id = pb.property_id AND pu.cid = pb.cid )
						 LEFT JOIN unit_space_status_types usst ON ( us.unit_space_status_type_id = usst.id )
						 LEFT JOIN property_floorplans pf ON ( pf.id = pu.property_floorplan_id AND pf.cid = pu.cid AND pf.property_id = pu.property_id ' . $strCheckDeletedFloorPlansSql . ' )
						 LEFT JOIN company_employees ce ON ( ce.cid = vmr.cid AND ce.id = vmr.company_employee_id )
					WHERE
						 vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . '
						 AND ms.maintenance_status_type_id IN ( ' . \CMaintenanceStatusType::OPEN . ' , ' . \CMaintenanceStatusType::SUSPENDED . ' )
						 AND vmr.cid = ' . ( int ) $intCid . '
						 AND vmr.property_id =  ' . ( int ) $intPropertyId . '
						 AND vmr.parent_maintenance_request_id IS NULL
 						 AND vmr.deleted_by IS NULL
						 AND vmr.unit_space_id IS NOT NULL';

		if( true == \valObj( $objMakeReadyBoardFilter, 'CMakeReadyBoardFilter' ) && false == is_null( $objMakeReadyBoardFilter->getPropertyBuildingId() ) && 0 < strlen( $objMakeReadyBoardFilter->getPropertyBuildingId() && 0 != $objMakeReadyBoardFilter->getPropertyBuildingId() ) ) {
			$strSql .= ' AND pb.id = ' . $objMakeReadyBoardFilter->getPropertyBuildingId();
		}

		if( true == \valObj( $objMakeReadyBoardFilter, 'CMakeReadyBoardFilter' ) && false == is_null( $objMakeReadyBoardFilter->getUnitTypeIds() ) && true == \valArr( $objMakeReadyBoardFilter->getUnitTypeIds() ) ) {
			$strSql .= ' AND us.unit_space_status_type_id IN ( ' . implode( ',', $objMakeReadyBoardFilter->getUnitTypeIds() ) . ' ) ';
		}

		if( false != $boolFetchCount ) {
			$strSql .= ' GROUP BY
				vmr_id,
				ms_id,
				mst_id,
				maintenance_status_type_id,
				days_remaining,
				scheduled_end_datetime';
		}

		$strSqlSelect = '*';

		if( false != $boolFetchCount ) {
			$strSqlSelect = 'COUNT(0) AS cnt';
		}

		$strSql = 'SELECT ' . $strSqlSelect . '
					FROM
					( ' . $strSql . ' ) AS tbl_main
					WHERE
						1=1
						' . $strAdditionalWhereConditionForMobileMrb . '
					';

		if( true == \valObj( $objMakeReadyBoardFilter, 'CMakeReadyBoardFilter' ) && false == is_null( $objMakeReadyBoardFilter->getOrderByField() ) && false == is_null( $strOrderBy ) && false == $boolFetchCount ) {
			$strSql .= $strOrderBy . $strOrderByType;
		} elseif( false == $boolFetchCount ) {
			$strSql .= ' ORDER BY tbl_main.scheduled_end_datetime ASC';
		}

		if( 0 < $intPageSize ) {
			$strSql	.= ' OFFSET ' . ( int ) $intOffset . ' LIMIT ' . ( int ) $intLimit;
		}

		if( false != $boolFetchData ) {

			$arrmixMakeReadyRequests = \fetchData( $strSql, $objDatabase );

			return \rekeyArray( 'id', $arrmixMakeReadyRequests );
		}

		if( false != $boolFetchCount ) {

			$arrintMakeReadyRequestsCount = ( array ) \fetchData( $strSql, $objDatabase );

			if( false != \valArr( $arrintMakeReadyRequestsCount ) ) {
				return $arrintMakeReadyRequestsCount[0]['cnt'];
			}
			return 0;
		}

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchSubMaintenanceRequestsByMaintenanceRequestIdsByPropertyIdByCid( $arrintParentMaintenanceRequestIds, $intPropertyId, $intCid, $objDatabase, $boolFetchData = false ) {

		if( false == \valArr( $arrintParentMaintenanceRequestIds ) ) {
			return [];
		}

		$strSql = ' SELECT
						 vmr.id,
				 		 mst.code,
						 mst.name,
						 vmr.parent_maintenance_request_id,
						 vmr.lease_id,
						 vmr.maintenance_problem_id,
						 vmr.maintenance_status_id,
						 vmr.maintenance_template_id,
						 vmr.scheduled_end_datetime,
						 vmr.completed_datetime,
		 				 util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description
					 FROM
						 view_maintenance_requests vmr
						 JOIN maintenance_statuses mst ON ( mst.cid = vmr.cid AND vmr.maintenance_status_id = mst.id )
		 				 LEFT JOIN maintenance_templates mt ON ( mt.id = vmr.maintenance_template_id AND mt.cid = vmr.cid )
					 WHERE
						 vmr.parent_maintenance_request_id in (' . implode( ',', $arrintParentMaintenanceRequestIds ) . ')
						 AND vmr.property_id =  ' . ( int ) $intPropertyId . '
						 AND vmr.cid = ' . ( int ) $intCid . '
						 AND vmr.deleted_by IS NULL';

		if( false != $boolFetchData ) {

			$arrmixSubMaintenanceRequests = \fetchData( $strSql, $objDatabase );
			return \rekeyArray( 'id', $arrmixSubMaintenanceRequests );
		}

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchSimpleMaintenanceRequestsByMaintenanceRequestIdsByMaintenanceProblemIdByPropertyIdByCid( $arrintMakeReadyMaintenanceRequestIds, $intMaintenanceProblemId, $intPropertyId, $intCid, $objDatabase, $boolIncludeDeletedUnitSpaces = false ) {

		if( false == \valArr( $arrintMakeReadyMaintenanceRequestIds ) ) {
			return [];
		}

		$strCheckDeletedUnitSpacesSql = ( false == $boolIncludeDeletedUnitSpaces ) ? ' AND us.deleted_on IS NULL' : '';

		$strSqlWhere = '';

		if( false != \valId( $intMaintenanceProblemId ) ) {

			$strSqlWhere = ' AND ( mp.id = ' . ( int ) $intMaintenanceProblemId . ' OR mp.maintenance_problem_id = ' . ( int ) $intMaintenanceProblemId . ' )';
		}

		$strSql = 'SELECT
						mr.*,
						COALESCE ( us.building_name || \'-\' || us.unit_number_cache, us.building_name, mrd.unit_number ) AS unit_number,
		  				mrd.scheduled_start_datetime,
		  				mrd.actual_start_datetime,
						mp.maintenance_problem_id maintenance_problem_id_from_mp,
						mp.maintenance_problem_type_id maintenance_problem_type_id_from_mp,
						mrd.scheduled_end_datetime
					FROM
						maintenance_requests mr
						JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id ' . $strSqlWhere . ' )
						LEFT JOIN maintenance_problems mp1 ON( mp.cid = mp1.cid AND mp.maintenance_problem_id = mp1.id AND mp1.maintenance_problem_type_id = ' . \CMaintenanceProblemType::PROBLEM_CATEGORY . '  )
						JOIN maintenance_statuses mst ON( mst.cid = mr.cid AND mst.id = mr.maintenance_status_id AND mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) )
						JOIN maintenance_requests mr1 ON( mr1.cid = mr.cid AND mr1.id = mr.parent_maintenance_request_id )
						JOIN maintenance_templates mt ON( mt.cid = mr1.cid AND mt.id = mr1.maintenance_template_id AND mt.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . ')
						LEFT JOIN maintenance_request_details mrd ON ( mrd.cid = mr.cid AND mrd.maintenance_request_id = mr.id )
						LEFT JOIN unit_spaces us ON( us.id = mr.unit_space_id AND us.cid = mr.cid ' . $strCheckDeletedUnitSpacesSql . ' )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id = ' . ( int ) $intPropertyId . '
						AND mr.parent_maintenance_request_id IN( ' . implode( ',', $arrintMakeReadyMaintenanceRequestIds ) . ' )
					AND mr.deleted_on IS NULL';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByMaintenanceTemplateIdsByCid( $arrintMaintenanceTemplateIds, $intCid, $objDatabase ) {

		$strSql = 'SELECT
							util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
							util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
							util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
							util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
							util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
							util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
							util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
							vmr.*
					FROM
						view_maintenance_requests vmr
					WHERE
						vmr.maintenance_template_id IN ( ' . implode( ',', $arrintMaintenanceTemplateIds ) . ' )
						AND vmr.cid = ' . ( int ) $intCid . '
					 ORDER BY vmr.id ';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsWithPriorityNameByPropertyIdByCidByMonthByYear( $intPropertyId, $intCid, $strMonth, $strYear, $objDatabase ) {

		$strSql = ' SELECT
						requested_day,
						sum ( count_am ) AS count_am,
						sum ( count_pm ) AS count_pm
					FROM
						(SELECT
							date_part( \'day\', vmr.requested_datetime ) AS requested_day,
							CASE
								WHEN date_part ( \'hour\', vmr.requested_datetime ) >= 0 AND date_part ( \'hour\', vmr.requested_datetime ) <= 11 THEN
										count(date_part ( \'day\', vmr.requested_datetime ))
								ELSE
								 	0
								END AS count_am,
							CASE
								WHEN date_part ( \'hour\', vmr.requested_datetime ) > 11 AND date_part ( \'hour\', vmr.requested_datetime ) <= 23 THEN
										count(date_part ( \'day\', vmr.requested_datetime ))
								ELSE
									0
								END AS count_pm
						FROM
							view_maintenance_requests vmr
						WHERE
							vmr.parent_maintenance_request_id IS NULL
							AND vmr.cid = ' . ( int ) $intCid . '
							AND vmr.property_id = ' . ( int ) $intPropertyId . '
							AND date_part(\'month\', vmr.requested_datetime ) = ' . ( int ) $strMonth . '
							AND date_part(\'year\', vmr.requested_datetime ) = ' . ( int ) $strYear . '
							AND vmr.deleted_by IS NULL
						GROUP BY
							requested_day,
							date_part( \'hour\', vmr.requested_datetime )
						ORDER BY
							date_part( \'day\', vmr.requested_datetime )) AS result
					GROUP BY
						requested_day';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMakeReadyWorkOrderMaintenanceRequestByUnitIdByPropertyIdByCid( $intPropertyId, $intCid, $intUnitSpaceId, $objDatabase, $boolIsFromValidate = false ) {

		if( false == $boolIsFromValidate ) {
			$strSelectSql = ' SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*';
		} else {
			$strSelectSql = ' SELECT 
								vmr.id';
		}

		$strSql = $strSelectSql . '
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id
					WHERE
						vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.unit_space_id = ' . ( int ) $intUnitSpaceId . '
						AND mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' )
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.ps_product_id IS NOT NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.deleted_by IS NULL
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY;

		if( false == $boolIsFromValidate ) {
			return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
		} else {
			$arrmixData = \fetchData( $strSql, $objDatabase )[0];
			return $arrmixData;
		}
	}

	public function fetchMakeReadyWorkOrderMaintenanceRequestByLeaseIdByCustomerIdByPropertyIdByCid( $intLeaseId, $intCustomerId, $intPropertyId, $intCid, $objDatabase, $boolIsFromValidate = false ) {

		if( false == $boolIsFromValidate ) {
			$strSelectSql = ' SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*';
		} else {
			$strSelectSql = ' SELECT 
								vmr.id';
		}

		$strSql = $strSelectSql . '
					FROM
						view_maintenance_requests vmr
						JOIN lease_customers lc ON vmr.cid = lc.cid AND vmr.lease_id = lc.lease_id AND vmr.customer_id = lc.customer_id
						JOIN maintenance_statuses mst ON vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id
					WHERE
						vmr.lease_id = ' . ( int ) $intLeaseId . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.ps_product_id IS NOT NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.deleted_by IS NULL
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . '
						AND mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';

		if( true == \valId( $intCustomerId ) ) {
			$strSql .= 'AND vmr.customer_id = ' . ( int ) $intCustomerId;
		}

		if( false == $boolIsFromValidate ) {
			return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
		} else {
			$arrmixData = \fetchData( $strSql, $objDatabase )[0];
			return $arrmixData;
		}
	}

	public function fetchClosedMakeReadyWorkOrderMaintenanceRequestByLeaseIdByCustomerIdByPropertyIdByCid( $intLeaseId, $intCustomerId, $intPropertyId, $intCid, $objDatabase ) {

		$strSql = ' SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
					FROM
						view_maintenance_requests vmr
						JOIN lease_customers lc ON vmr.cid = lc.cid AND vmr.lease_id = lc.lease_id AND vmr.customer_id = lc.customer_id
						JOIN maintenance_statuses mst ON vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id
					WHERE
						vmr.lease_id = ' . ( int ) $intLeaseId . '
						AND vmr.customer_id = ' . ( int ) $intCustomerId . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.ps_product_id IS NOT NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.deleted_by IS NULL
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . '
						AND mst.maintenance_status_type_id = ' . ( int ) \CMaintenanceStatusType::COMPLETED;

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestDetailsByIdsByCid( $arrintMaintenanceRequestIds, $intCompanyUserId, $intCid, $objDatabase, $boolIncludeDeletedUnits = false, $boolFetchClosedWorkOrders = true ) {
		$strSql = $this->buildCompanyUserPropertiesSql( $intCid, $intCompanyUserId );

		$strCheckDeletedUnitsSql = ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';

		// Make sure that this query is returning problem_id only if action_id is null( Task #882007 )

		$strSql = 'SELECT
						mr.id,
						mr.company_employee_id,
						mr.maintenance_status_id,
						mr.property_id,
						mr.due_date,
						mr.ap_payee_id,
						mr.customer_id,
						mr.lease_id,
						mr.unit_space_id,
						mprob.name as problem,
						mprior.name as priority,
						pu.unit_number,
						cp.property_name,
						mr.created_on,
						mrd.requested_datetime,
						mrd.scheduled_start_datetime AS scheduled_start_date,
						mrd.scheduled_end_datetime AS scheduled_end_date,
						to_char(mrd.completed_datetime, \'DD/MM/YYYY\') AS completed_datetime,
						mrd.unit_number AS unit,
						mrd.problem_description,
						mr.remote_primary_key,
						mr.parent_maintenance_request_id,
						mr.maintenance_request_type_id,
						ce.name_first,
						ce.name_last,
						mst.id AS maintenance_status_type_id,
						CASE
							WHEN mr.parent_maintenance_request_id IS NULL THEN
								1
							WHEN mr.parent_maintenance_request_id IS NOT NULL THEN
								0
							END AS is_parent_maintenance_request,
						CASE
							WHEN mr.sub_maintenance_problem_id IS NULL
								THEN mr.maintenance_problem_id
							ELSE NULL
						END AS maintenance_problem_id,
						lc.lease_status_type_id,
						lc.customer_type_id,
						us.unit_space_status_type_id
					FROM
						maintenance_requests mr
						LEFT JOIN property_units pu ON ( mr.property_unit_id = pu.id AND mr.cid = pu.cid ' . $strCheckDeletedUnitsSql . ' )
						LEFT JOIN company_employees ce ON ( mr.cid = ce.cid AND mr.company_employee_id = ce.id )
						LEFT JOIN maintenance_problems mprob ON ( mr.maintenance_problem_id = mprob.id AND mr.cid = mprob.cid )
						JOIN maintenance_priorities mprior ON ( mr.maintenance_priority_id = mprior.id AND mr.cid = mprior.cid )
						JOIN maintenance_request_details mrd ON ( mrd.maintenance_request_id = mr.id AND mrd.cid = mr.cid )
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
						JOIN maintenance_status_types mst ON ( ms.maintenance_status_type_id = mst.id )
						JOIN ( ' . $strSql . ' ) cp ON ( cp.cid = mr.cid AND cp.id = mr.property_id )
						LEFT JOIN lease_customers lc ON ( lc.cid = mr.cid AND lc.customer_id = mr.customer_id AND lc.lease_id = mr.lease_id )
						LEFT JOIN unit_spaces us ON( us.id = mr.unit_space_id AND us.cid = mr.cid AND us.deleted_on IS NULL )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )
						AND mr.deleted_by IS NULL';

		if( false == $boolFetchClosedWorkOrders ) {
			$strSql .= ' AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';
		}

		$strSql .= ' ORDER BY
						mr.id DESC ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchSubMaintenanceRequestsByMaintenanceRequestIdsByCid( $arrintParentMaintenanceRequestIds, $intCid, $objDatabase, $arrintMaintenanceRequestTypeIds = NULL ) {
		if( false == \valArr( $arrintParentMaintenanceRequestIds ) ) {
			return NULL;
		}

		$strSql = ' SELECT 
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
					FROM
						view_maintenance_requests vmr
					WHERE
						vmr.parent_maintenance_request_id in (' . implode( ',', $arrintParentMaintenanceRequestIds ) . ')
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_on IS NULL
						AND vmr.deleted_by IS NULL
					';
		if( true == \valArr( $arrintMaintenanceRequestTypeIds ) ) {
			$strSql .= ' AND vmr.maintenance_request_type_id IN ( ' . implode( ',', $arrintMaintenanceRequestTypeIds ) . ' )';
		}
		$strSql .= 'ORDER BY
						vmr.id ';
		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchRecentlyUpdatedMakeReadyMaintenanceRequestsForMakeReadyBoardByPropertyUnitTypeIdByPropertyBuildingIdByPropertyIdByCid( $intPropertyUnitTypeId, $intPropertyBuildingId, $intPropertyId, $intCid, $objDatabase, $boolIncludeDeletedUnits = false, $boolIncludeDeletedUnitSpaces = false ) {

		$strCheckDeletedUnitsSql	  = ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';
		$strCheckDeletedUnitSpacesSql = ( false == $boolIncludeDeletedUnitSpaces ) ? ' AND us.deleted_on IS NULL' : '';

		// Below mentioned 2 minutes in query change should be changed in template file \Interfaces\Templates\Entrata\customers\maintenance_requests\make_ready_board\make_ready_board.tpl (current line no. 492 and code on line "refreshIntervalId = setInterval("autoUpdateMakeReadyBoard()", 120000 );" ) too
		$strSql = 'SELECT
						DISTINCT ON ( mr.id ) mr.id
					FROM
						maintenance_requests mr
						LEFT JOIN maintenance_requests cmr on cmr.parent_maintenance_request_id = mr.id and cmr.cid = mr.cid
						LEFT JOIN unit_spaces us ON ( mr.unit_space_id = us.id AND mr.cid = us.cid ' . $strCheckDeletedUnitSpacesSql . ' )
						LEFT JOIN property_units pu ON ( pu.id = mr.property_unit_id AND pu.property_id = mr.property_id AND pu.cid = mr.cid ' . $strCheckDeletedUnitsSql . ' )
						LEFT JOIN property_buildings pb ON ( pu.property_building_id = pb.id AND pu.property_id = pb.property_id AND pu.cid = pb.cid )
					WHERE
						mr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . '
						AND mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id =  ' . ( int ) $intPropertyId . '
						AND (mr.updated_on > ( NOW() - interval \'2 min\' ) OR cmr.updated_on > ( NOW() - interval \'2 min\') )
						AND mr.deleted_by IS NULL';

		if( false == empty( $intPropertyBuildingId ) ) {
			$strSql .= ' AND pb.id = ' . ( int ) $intPropertyBuildingId;
		}

		if( false == empty( $intPropertyUnitTypeId ) ) {
			if( \CUnitSpaceStatusType::NOTICE_UNRENTED == $intPropertyUnitTypeId ) {
				$strSql .= ' AND us.unit_space_status_type_id IN ( ' . implode( ',',  [ \CUnitSpaceStatusType::NOTICE_RENTED, \CUnitSpaceStatusType::NOTICE_UNRENTED ] ) . ' ) ';
			} elseif( 0 != $intPropertyUnitTypeId ) {
				$strSql .= ' AND us.unit_space_status_type_id IN ( ' . ( int ) $intPropertyUnitTypeId . ' ) ';
			}
		}

		$arrintMakeReadyMaintenanceRequestIds = [];

		$arrintMaintenanceRequestIds = ( array ) \fetchData( $strSql, $objDatabase );

		foreach( $arrintMaintenanceRequestIds as $arrintMaintenanceRequestId ) {
			$arrintMakeReadyMaintenanceRequestIds[] = $arrintMaintenanceRequestId['id'];
		}

		return $arrintMakeReadyMaintenanceRequestIds;
	}

	public function fetchRecentlyCreatedParentMakeReadyMaintenanceRequestsForMakeReadyBoardByPropertyUnitTypeIdByPropertyBuildingIdByPropertyIdByCid( $intPropertyUnitTypeId, $intPropertyBuildingId, $intPropertyId, $intCid, $objDatabase, $boolIncludeDeletedUnits = false, $boolIncludeDeletedUnitSpaces = false ) {

		$strCheckDeletedUnitsSql = ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';
		$strCheckDeletedUnitSpacesSql = ( false == $boolIncludeDeletedUnitSpaces ) ? ' AND us.deleted_on IS NULL' : '';

		// Below mentioned 2 minutes in query change should be changed in template file \Interfaces\Templates\Entrata\customers\maintenance_requests\make_ready_board\make_ready_board.tpl (current line no. 492 and code on line "refreshIntervalId = setInterval("autoUpdateMakeReadyBoard()", 120000 );" ) too
		$strSql = 'SELECT
						COUNT( mr.id ) AS total_count
					FROM
						maintenance_requests mr
						LEFT JOIN unit_spaces us ON ( mr.unit_space_id = us.id AND mr.cid = us.cid ' . $strCheckDeletedUnitSpacesSql . ' )
						LEFT JOIN property_units pu ON ( pu.id = mr.property_unit_id AND pu.property_id = mr.property_id AND pu.cid = mr.cid ' . $strCheckDeletedUnitsSql . ' )
						LEFT JOIN property_buildings pb ON ( pu.property_building_id = pb.id AND pu.property_id = pb.property_id AND pu.cid = pb.cid )
					WHERE
						mr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . '
						AND mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id =  ' . ( int ) $intPropertyId . '
						AND mr.parent_maintenance_request_id IS NULL
						AND (mr.created_on >= ( NOW() - interval \'2 min\' ) )
						AND mr.deleted_by IS NULL';

		if( false == empty( $intPropertyBuildingId ) ) {
			$strSql .= ' AND pb.id = ' . ( int ) $intPropertyBuildingId;
		}

		if( false == empty( $intPropertyUnitTypeId ) ) {
			if( \CUnitSpaceStatusType::NOTICE_UNRENTED == $intPropertyUnitTypeId ) {
				$strSql .= ' AND us.unit_space_status_type_id IN ( ' . implode( ',',  [ \CUnitSpaceStatusType::NOTICE_RENTED, \CUnitSpaceStatusType::NOTICE_UNRENTED ] ) . ' ) ';
			} elseif( 0 != $intPropertyUnitTypeId ) {
				$strSql .= ' AND us.unit_space_status_type_id IN ( ' . ( int ) $intPropertyUnitTypeId . ' ) ';
			}
		}

		$arrintMaintenanceRequestIdsCount = ( array ) \fetchData( $strSql, $objDatabase );

		if( false != isset( $arrintMaintenanceRequestIdsCount[0]['total_count'] ) ) {

			return $arrintMaintenanceRequestIdsCount[0]['total_count'];
		}

		return 0;
	}

	public function fetchSimpleMaintenanceRequestByCustomerIdByCid( $intCustomerId, $intCid, $objDatabase ) {

		$strSql = 'SELECT util_set_locale( \'' . \CLocaleContainer::createService()->getLocaleCode() . '\', \'' . \CLocaleContainer::createService()->getDefaultLocaleCode() . '\' );
						SELECT
						vmr.customer_id,
						vmr.lease_id,
						vmr.property_id,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.permission_to_enter,
						ld.alarm_key AS alarm_code,
						vmr.unit_space_id,
						vmr.maintenance_template_id,
						vmr.parent_maintenance_request_id,
						vmr.email_address,
						vmr.is_pet,
						mrn.is_resident_visible,
						mrn.is_entry_note,
						mrn.note
					FROM
						view_maintenance_requests vmr
						LEFT JOIN lease_details ld ON ( vmr.lease_id = ld.lease_id AND vmr.cid = ld.cid )
						LEFT JOIN maintenance_request_notes mrn ON ( mrn.maintenance_request_id = vmr.id AND mrn.cid = vmr.cid AND mrn.is_entry_note = true )
					WHERE
						vmr.customer_id = ' . ( int ) $intCustomerId . '
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.customer_id IS NOT NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.deleted_by IS NULL
					ORDER BY
						vmr.id DESC
					LIMIT 1 ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchEntryNoteEventsByMaintenanceRequestIdByCid( $intMaintenanceRequestId, $intCid, $objDatabase ) {

		$strSql = 'SELECT
						mr.id AS maintenance_request_id,
						e.notes AS entry_notes,
						e.updated_on,
						e.data_reference_id,
						mr.maintenance_request_type_id,
						mrt.name as maintenance_request_type,
						cu.username AS user_name
					FROM
						maintenance_requests mr
						JOIN events e ON ( e.data_reference_id = mr.id and e.cid = mr.cid )
						JOIN company_users cu ON ( e.updated_by = cu.id AND e.cid= cu.cid AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' ) )
						JOIN maintenance_request_types mrt ON mrt.id = mr.maintenance_request_type_id
					WHERE
						mr.id = ' . ( int ) $intMaintenanceRequestId . '
						AND e.cid = ' . ( int ) $intCid . '
						AND e.event_type_id = ' . ( int ) \CEventType::WORK_ORDER_UPDATED . '
						AND e.event_sub_type_id = ' . ( int ) \CEventSubType::WORKORDER_ENTRY_NOTE . '
						AND mr.parent_maintenance_request_id IS NULL
						AND mr.deleted_by IS NULL
						AND mr.deleted_on IS NULL
					ORDER BY
						e.updated_on DESC
					LIMIT 5 ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchEntryNotesFromEventsByLeaseIdsByCustomerIdByCid( $intLeaseIds, $intCustomerId, $intCid, $objDatabase ) {

		$strSql = 'SELECT
						mr.id AS maintenance_request_id,
						e.notes AS entry_notes,
						e.updated_on,
						e.data_reference_id,
						mr.maintenance_request_type_id,
						mrt.name as maintenance_request_type,
						CASE
							WHEN cu.company_employee_id IS NULL OR cu.company_employee_id = 1 THEN cu.username
							WHEN e.updated_by IN ( ' . \CPsProduct::SITE_TABLET . ',' . \CPsProduct::RESIDENT_PORTAL . ',' . \CPsProduct::RESIDENT_PAY_DESKTOP . ' ) THEN c.name_full
							ELSE cu.username
						END AS user_name
					FROM
						maintenance_requests mr
						LEFT JOIN events e ON ( e.data_reference_id = mr.id and e.cid = mr.cid )
						LEFT JOIN company_users cu ON ( e.updated_by = cu.id AND e.cid= cu.cid AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' ) )
						LEFT JOIN company_employees ce ON ( cu.cid = ce.cid AND cu.company_employee_id = ce.id )
						LEFT JOIN customers c ON ( c.cid = mr.cid AND c.id = mr.customer_id )
						LEFT JOIN maintenance_request_types mrt ON mrt.id = mr.maintenance_request_type_id
					WHERE
						mr.lease_id IN ( ' . implode( ',', $intLeaseIds ) . ')
						AND mr.customer_id = ' . ( int ) $intCustomerId . '
						AND e.cid = ' . ( int ) $intCid . '
						AND e.event_type_id = ' . ( int ) \CEventType::WORK_ORDER_UPDATED . '
						AND e.event_sub_type_id = ' . ( int ) \CEventSubType::WORKORDER_ENTRY_NOTE . '
						AND mr.parent_maintenance_request_id IS NULL
						AND mr.deleted_by IS NULL
						AND mr.deleted_on IS NULL
					ORDER BY
						e.updated_on DESC
					LIMIT 5 ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchCustomMaintenanceRequestByIdsByCid( $arrintIds, $intCid, $objDatabase, $boolIncludeDeletedUnits = false ) {

		$strCheckDeletedUnitsSql = ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*,
						pb.building_name,
						mst.maintenance_status_type_id,
						lc.id AS lease_customer_id,
						COALESCE ( mrp.maintenance_problem_id, 0 ) AS maintenance_category_id,
						mrp.name AS maintenance_problem_name,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
						CASE
						WHEN date_part ( \'hour\', vmr.requested_datetime ) >= 0 AND date_part ( \'hour\', vmr.requested_datetime ) <= 11 THEN
						\'Morning\'
						ELSE
						\'Afternoon\'
						END AS requested_time
					FROM
						view_maintenance_requests vmr
						LEFT JOIN property_units pu ON ( vmr.property_unit_id = pu.id AND vmr.cid = pu.cid ' . $strCheckDeletedUnitsSql . ' )
						LEFT JOIN property_buildings pb ON ( ( pu.property_building_id = pb.id AND pu.cid = pb.cid ) OR ( vmr.property_building_id = pb.id AND vmr.cid = pb.cid ) )
						JOIN maintenance_statuses mst ON ( vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid )
						LEFT JOIN maintenance_problems mrp ON ( vmr.maintenance_problem_id = mrp.id AND vmr.cid = mrp.cid  )
						LEFT JOIN maintenance_locations ml ON ( vmr.maintenance_location_id = ml.id AND vmr.cid = ml.cid  )
						LEFT JOIN lease_customers lc ON ( vmr.customer_id = lc.customer_id AND vmr.lease_id = lc.lease_id AND vmr.property_id = lc.property_id AND vmr.cid = lc.cid )
					WHERE
						vmr.cid=' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL
						AND vmr.id IN ( ' . implode( ' , ', $arrintIds ) . ' )';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMakeReadyMaintenanceRequestsByUnitSpaceIdsByCid( $arrintUnitSpaceIds, $intCid, $objDatabase, $arrintSkippedMaintenanceStatusIds = NULL ) {

		if( false == \valArr( $arrintUnitSpaceIds ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON ( vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid )
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL
						AND vmr.unit_space_id IN ( ' . implode( ',', $arrintUnitSpaceIds ) . ' )
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . '
						AND vmr.parent_maintenance_request_id IS NULL
						AND mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';

		if( true == \valArr( $arrintSkippedMaintenanceStatusIds ) ) {
			$strSql .= ' AND vmr.maintenance_status_id NOT IN ( ' . implode( ',', $arrintSkippedMaintenanceStatusIds ) . ' )';
		}

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchSubMaintenanceRequestIdsByMaintenanceRequestIdByCid( $intMaintenanceRequestId, $intCid, $objDatabase, $boolIncludeDeletedSubMaintenanceRequests = false ) {
		$strSql = ' SELECT
						mr.id
					FROM
						maintenance_requests mr
					WHERE
						mr.parent_maintenance_request_id = ' . ( int ) $intMaintenanceRequestId . '
						AND mr.cid = ' . ( int ) $intCid . ( false == $boolIncludeDeletedSubMaintenanceRequests ? '	AND mr.deleted_on IS NULL AND mr.deleted_by IS NULL' : '' ) . '
					ORDER BY
						mr.id ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchSubMaintenanceRequestIdsByMaintenanceRequestIdsByCid( $arrintParentMaintenanceRequestIds, $intCid, $objDatabase, $boolIncludeDeletedSubMaintenanceRequests = false ) {

		$arrintParentMaintenanceRequestIds = array_filter( $arrintParentMaintenanceRequestIds );
		if( false == \valArr( $arrintParentMaintenanceRequestIds ) ) {
			return [];
		}

		$strSql = ' SELECT
						mr.id, mr.parent_maintenance_request_id
					FROM
						maintenance_requests mr
					WHERE
						mr.parent_maintenance_request_id IN ( ' . \sqlIntImplode( $arrintParentMaintenanceRequestIds ) . ' ) 
						AND mr.cid = ' . ( int ) $intCid . ( false == $boolIncludeDeletedSubMaintenanceRequests ? '	AND mr.deleted_on IS NULL AND mr.deleted_by IS NULL' : '' ) . '
					ORDER BY
						mr.id ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchOpenMaintenanceRequestsCountByDashboardFilterByCid( $objDashboardFilter, $intCid, $objDatabase, $intMaintenanceRequestTypeId = NULL, $strAssignedToIsNull = NULL, $boolIsGroupByProperties = false, $intMaxExecutionTimeOut = 0, $arrstrDashboardPriorities = NULL ) {

		// second condition check array contains integer value or not if not then return false
		if( false == \valArr( $objDashboardFilter->getPropertyGroupIds() ) || false == array_product( array_map( 'is_numeric', $objDashboardFilter->getPropertyGroupIds() ) ) ) {
			return NULL;
		}

		$strPriorityWhere = ( true == \valArr( $objDashboardFilter->getTaskPriorities() ) ) ? ' AND priority IN ( ' . implode( ',', $objDashboardFilter->getTaskPriorities() ) . ' )' : '';

		$strGroupBy = '';

		if( true == $boolIsGroupByProperties ) {

			$strGroupBy = '  GROUP BY
								mr.property_id,
								property_name,
								priority';
		}

		switch( $intMaintenanceRequestTypeId ) {

			case \CMaintenanceRequestType::SERVICE_REQUEST:
				$strPriorityCondition = '.maintenance_work_orders';
				$strCountAs = 'maintenance_work_orders';
				break;

			case \CMaintenanceRequestType::RECURRING:
				$strPriorityCondition = '.maintenance_recurring_work_orders';
				$strCountAs = 'maintenance_recurring_work_orders';
				break;

			case \CMaintenanceRequestType::MAKE_READY:
				$strPriorityCondition = '.maintenance_make_readies';
				$strCountAs = 'maintenance_make_readies';
				break;

			default:
				$strPriorityCondition = '.maintenance_assign_work_orders';
				$strCountAs = 'maintenance_assign_work_orders';
				break;
		}

		$strSql = ( 0 != $intMaxExecutionTimeOut )? 'SET STATEMENT_TIMEOUT = \'' . ( int ) $intMaxExecutionTimeOut . 's\'; ' : '';

		$strSql .= 'SELECT
						COUNT(0)';

		$strSql .= ( false == $boolIsGroupByProperties ) ? ', MAX( priority ) AS priority' : ' AS ' . $strCountAs . ', property_id, property_name, priority ';

		$strSql .= '
				FROM (
					SELECT
						*
					FROM (
						SELECT
							mr.id,
							mr.cid
							' . ( true == $boolIsGroupByProperties ? ', mr.property_id, p.property_name, ' : ', ' );

		if( '.maintenance_assign_work_orders' == $strPriorityCondition ) {
			$strSql .= ' CASE
								WHEN mr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . ' THEN
									CASE
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_make_ready_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_make_ready_submitted_since\' ) ) ::int ) )THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_make_ready_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_make_ready_priority_id\' ) ::int ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_make_ready_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_make_ready_submitted_since\' ) ) ::int ) )THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_make_ready_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_make_ready_priority_id\' ) ::int ) THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_id\' ) != \'\' AND mr.maintenance_problem_id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_id\' ) ::int ) THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
											2
										ELSE
											1
									END		
								WHEN ( mr.maintenance_request_type_id = ' . \CMaintenanceRequestType::SERVICE_REQUEST . ' OR mr.maintenance_request_type_id = ' . \CMaintenanceRequestType::RECURRING . ' ) THEN
									CASE
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_submitted_since\' ) ) ::int ) )THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_priority_id\' ) ::int ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_id\' ) != \'\' AND mr.maintenance_problem_id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_id\' ) ::int ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_submitted_since\' ) ) ::int ) )THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_priority_id\' ) ::int ) THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
											2
										ELSE
											1
									END
							END AS priority ';

		} else {
			$strSql .= ' CASE
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_submitted_since\' ) ) ::int ) )THEN
									3
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_priority_id\' ) ::int ) THEN
									3
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_ids\') != \'\' AND mr.maintenance_problem_id = ANY ( ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_ids\' ) ::integer [ ] ) THEN
									3
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
									3
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_submitted_since\' ) ) ::int ) )THEN
									2
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_priority_id\' ) ::int ) THEN
									2
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_id\' ) != \'\' AND mr.maintenance_problem_id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_id\' ) ::int ) THEN
									2
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
									2
								ELSE
									1
							END AS priority ';
		}

		$strSql .= ' FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id AND mrd.completed_datetime IS NULL )
						JOIN maintenance_statuses ms ON ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id AND ms.is_hidden_on_dashboard <> 1 )
						JOIN load_properties ( ARRAY[' . ( int ) $intCid . '], array[' . implode( $objDashboardFilter->getPropertyGroupIds(), ',' ) . '] ) lp ON ( lp.property_id = mr.property_id ' . ( ( false == $objDashboardFilter->getShowDisabledData() ) ? ' AND lp.is_disabled = 0 ' : '' ) . ' )
						' . ( true == $boolIsGroupByProperties ? 'JOIN properties p ON ( p.cid = mr.cid AND p.id = mr.property_id )' : '' ) . '
						JOIN maintenance_priorities mprior ON ( mprior.cid = mr.cid AND mr.maintenance_priority_id = mprior.id AND mprior.is_published = 1 )
						LEFT JOIN maintenance_priority_types mpt ON ( mprior.maintenance_priority_type_id = mpt.id )
						LEFT JOIN dashboard_priorities dp ON ( mr.cid = dp.cid )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.parent_maintenance_request_id IS NULL
						AND mr.deleted_by IS NULL
						AND ms.is_hidden_on_dashboard <> 1
						AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';

		if( true == \valStr( $intMaintenanceRequestTypeId ) ) {

			$strSql .= ' AND mr.maintenance_request_type_id = ' . ( int ) $intMaintenanceRequestTypeId;
		}

		if( true == ( boolean ) $strAssignedToIsNull ) {
			$strSql .= ' AND mr.company_employee_id IS NULL AND mr.ap_payee_id IS NULL';
		}

		// Ignore the Maintenance Group condition to all type of Maintenance Request type other than Recurring work order type
		if( \CMaintenanceRequestType::RECURRING <> $intMaintenanceRequestTypeId ) {
			$strSql .= ' AND mr.maintenance_group_id IS NULL ';
		}

		if( false == $boolIsGroupByProperties ) {
			if( true == valArr( $arrstrDashboardPriorities ) ) {
				$strOrderBySql             = '';
				$boolIsCreatedOnSorted     = false;
				$boolIsScheduledDateSorted = false;
				// 1st Urgent priority condition added for Assign Work Orders Rules, Work Orders Rules, Recurring Work Orders Rules and Make Readies Rules
				if( true == isset( $arrstrDashboardPriorities['urgent_work_order_submitted_since'] ) && true == valId( $arrstrDashboardPriorities['urgent_work_order_submitted_since'] ) ) {
					$strOrderBySql         .= ' mr.created_on DESC,';
					$boolIsCreatedOnSorted = true;
				}
				// 2nd Urgent priority condition added for Assign Work Orders Rules, Work Orders Rules and Recurring Work Orders Rules
				// 3rd Urgent priority condition added for Make Readies Rules
				if( true == isset( $arrstrDashboardPriorities['urgent_maintenance_priority_id'] ) && true == valId( $arrstrDashboardPriorities['urgent_maintenance_priority_id'] ) ) {
					$strOrderBySql .= ' mpt.id = ' . $arrstrDashboardPriorities['urgent_maintenance_priority_id'] . ',';
				}
				// 3nd Urgent priority condition added for Assign Work Orders Rules
				if( true == isset( $arrstrDashboardPriorities['urgent_make_ready_submitted_since'] ) && true == valId( $arrstrDashboardPriorities['urgent_make_ready_submitted_since'] ) && false == $boolIsCreatedOnSorted ) {
					$strOrderBySql         .= ' mr.created_on DESC,';
					$boolIsCreatedOnSorted = true;
				}
				// 4th Urgent priority condition added for Assign Work Orders Rules
				if( true == isset( $arrstrDashboardPriorities['urgent_make_ready_priority_id'] ) && true == valId( $arrstrDashboardPriorities['urgent_make_ready_priority_id'] ) ) {
					$strOrderBySql .= ' mpt.id = ' . $arrstrDashboardPriorities['urgent_make_ready_priority_id'] . ',';
				}
				// 3rd Urgent priority condition added for Work Orders Rules and Recurring Work Orders Rules
				if( true == isset( $arrstrDashboardPriorities['urgent_maintenance_problem_ids'] ) && true == valId( $arrstrDashboardPriorities['urgent_maintenance_problem_ids'] ) ) {
					$strOrderBySql .= ' mr.maintenance_problem_id = ANY( ( ' . $arrstrDashboardPriorities['urgent_maintenance_problem_ids'] . ' )::integer[] ),';
				}
				// 5th Urgent priority condition added for Assign Work Orders Rules
				// 2rd Urgent priority condition added for Make Readies Rules
				if( true == isset( $arrstrDashboardPriorities['urgent_work_order_days_left'] ) && true == valId( $arrstrDashboardPriorities['urgent_work_order_days_left'] ) ) {
					$strOrderBySql             .= ' CASE WHEN mrd.scheduled_end_datetime IS NOT NULL AND mrd.scheduled_end_datetime > NOW() THEN mrd.scheduled_end_datetime END ASC,';
					$boolIsScheduledDateSorted = true;
				}
				// 1st Important priority condition added for Assign Work Orders Rules, Work Orders Rules, Recurring Work Orders Rules and Make Readies Rules
				if( true == isset( $arrstrDashboardPriorities['important_work_order_submitted_since'] ) && true == valId( $arrstrDashboardPriorities['important_work_order_submitted_since'] ) && false == $boolIsCreatedOnSorted ) {
					$strOrderBySql         .= ' mr.created_on DESC,';
					$boolIsCreatedOnSorted = true;
				}
				// 2nd Important priority condition added for Assign Work Orders Rules, Work Orders Rules and Recurring Work Orders Rules
				// 3rd Important priority condition added for Make Readies Rules
				if( true == isset( $arrstrDashboardPriorities['important_maintenance_priority_id'] ) && true == valId( $arrstrDashboardPriorities['important_maintenance_priority_id'] ) ) {
					$strOrderBySql .= ' mpt.id = ' . $arrstrDashboardPriorities['important_maintenance_priority_id'] . ',';
				}
				// 3nd Important priority condition added for Assign Work Orders Rules
				if( true == isset( $arrstrDashboardPriorities['important_make_ready_submitted_since'] ) && true == valId( $arrstrDashboardPriorities['important_make_ready_submitted_since'] ) && false == $boolIsCreatedOnSorted ) {
					$strOrderBySql         .= ' mr.created_on DESC,';
					$boolIsCreatedOnSorted = true;
				}
				// 4th Important priority condition added for Assign Work Orders Rules
				if( true == isset( $arrstrDashboardPriorities['important_make_ready_priority_id'] ) && true == valId( $arrstrDashboardPriorities['important_make_ready_priority_id'] ) ) {
					$strOrderBySql .= ' mpt.id = ' . $arrstrDashboardPriorities['important_make_ready_priority_id'] . ',';
				}
				// 3rd Important priority condition added for Work Orders Rules and Recurring Work Orders Rules
				if( true == isset( $arrstrDashboardPriorities['important_maintenance_problem_ids'] ) && true == valId( $arrstrDashboardPriorities['important_maintenance_problem_ids'] ) ) {
					$strOrderBySql .= ' mr.maintenance_problem_id = ANY( ( ' . $arrstrDashboardPriorities['important_maintenance_problem_ids'] . ' )::integer[] ),';
				}
				// 5th Important priority condition added for Assign Work Orders Rules
				// 2rd Important priority condition added for Make Readies Rules
				if( true == isset( $arrstrDashboardPriorities['important_work_order_days_left'] ) && true == valId( $arrstrDashboardPriorities['important_work_order_days_left'] ) && false == $boolIsScheduledDateSorted ) {
					$strOrderBySql .= ' CASE WHEN mrd.scheduled_end_datetime IS NOT NULL AND mrd.scheduled_end_datetime > NOW() THEN mrd.scheduled_end_datetime END ASC,';
				}
				if( true == valStr( $strOrderBySql ) ) {
					$strSql .= ' ORDER BY ' . rtrim( $strOrderBySql, ',' );
				}
			}
			$strSql .= ' LIMIT 100 ';
		}

		$strSql .= ' ) sub_query
	  			WHERE
					cid = ' . ( int ) $intCid . '
					' . $strPriorityWhere . '
	  			ORDER BY priority DESC
	  			' . ( false == $boolIsGroupByProperties ? 'LIMIT 100' : '' ) . '
 			) mr';

		$strSql .= $strGroupBy;

		$arrintOpenMaintenanceRequestCount = ( array ) \fetchData( $strSql, $objDatabase );

		if( true == $boolIsGroupByProperties ) {
			return $arrintOpenMaintenanceRequestCount;
		}

		return $arrintOpenMaintenanceRequestCount[0];
	}

	public function fetchPaginatedDashboardMaintenanceRequestsByDashboardFilterByCid( $objDashboardFilter, $intCid, $intOffset, $intLimit, $strSortBy, $objDatabase, $intMaintenanceRequestTypeId = NULL, $strAssignedToIsNull = NULL, $boolIncludeDeletedUnits = false, $arrintPmEnabledPropertyIds = [] ) {

		if( false == \valArr( $objDashboardFilter->getPropertyGroupIds() ) ) {
			return NULL;
		}

		$strPriorityWhere = ( true == \valArr( $objDashboardFilter->getTaskPriorities() ) ) ? ' AND priority IN ( ' . implode( ',', $objDashboardFilter->getTaskPriorities() ) . ' )' : '';

		$strCheckDeletedUnitsSql = ( false == $boolIncludeDeletedUnits ) ? ' AND us.deleted_on IS NULL' : '';

		$arrstrProductName = \CPsProduct::createService()->getProductNames();

		$strPriorityCondition = '.maintenance_assign_work_orders';

		if( false == ( boolean ) $strAssignedToIsNull ) {
			switch( $intMaintenanceRequestTypeId ) {

				case \CMaintenanceRequestType::SERVICE_REQUEST:
					$strPriorityCondition = '.maintenance_work_orders';
					break;

				case \CMaintenanceRequestType::RECURRING:
					$strPriorityCondition = '.maintenance_recurring_work_orders';
					break;

				case \CMaintenanceRequestType::MAKE_READY:
					$strPriorityCondition = '.maintenance_make_readies';
					break;

				default:
					$strPriorityCondition = '.maintenance_assign_work_orders';
					break;
			}
		}

		if( '.maintenance_assign_work_orders' == $strPriorityCondition ) {
			$strSelect = ', CASE
								WHEN mr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . ' THEN
									CASE
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_make_ready_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_make_ready_submitted_since\' ) ) ::int ) )THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_make_ready_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_make_ready_priority_id\' ) ::int ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_id\' ) != \'\' AND mr.maintenance_problem_id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_id\' ) ::int ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_make_ready_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_make_ready_submitted_since\' ) ) ::int ) )THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_make_ready_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_make_ready_priority_id\' ) ::int ) THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_id\' ) != \'\' AND mr.maintenance_problem_id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_id\' ) ::int ) THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
											2
										ELSE
											1
									END		
								WHEN ( mr.maintenance_request_type_id = ' . \CMaintenanceRequestType::SERVICE_REQUEST . ' OR mr.maintenance_request_type_id = ' . \CMaintenanceRequestType::RECURRING . ' ) THEN
									CASE
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_submitted_since\' ) ) ::int ) )THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_priority_id\' ) ::int ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_id\' ) != \'\' AND mr.maintenance_problem_id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_id\' ) ::int ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
											3
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_submitted_since\' ) ) ::int ) )THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_priority_id\' ) ::int ) THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_id\' ) != \'\' AND mr.maintenance_problem_id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_id\' ) ::int ) THEN
											2
										WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
											2
										ELSE
											1
									END
							END AS priority ';

		} else {
			$strSelect = ', CASE
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_submitted_since\' ) ) ::int ) )THEN
									3
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_priority_id\' ) ::int ) THEN
									3
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_ids\' ) <> \'\' AND mr.maintenance_problem_id = ANY( ( dp' . $strPriorityCondition . ' ->> \'urgent_maintenance_problem_ids\' ) ::integer[] ) THEN
									3
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'urgent_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
									3
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_submitted_since\' ) != \'\' AND ( NOW() >= ( mr.created_on::timestamp + INTERVAL \'1 hour\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_submitted_since\' ) ) ::int ) )THEN
									2
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_priority_id\' ) != \'\' AND mpt.id = ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_priority_id\' ) ::int ) THEN
									2
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_ids\' ) <> \'\' AND mr.maintenance_problem_id = ANY( ( dp' . $strPriorityCondition . ' ->> \'important_maintenance_problem_ids\' ) ::integer[] ) THEN
									2
								WHEN TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) != \'\' AND ( ( NOW ( )::TIMESTAMP + ( INTERVAL \'1 days\' * ( TRIM ( dp' . $strPriorityCondition . ' ->> \'important_work_order_days_left\' ) ) ::int ) ) > mrd.scheduled_end_datetime ) THEN
									2
								ELSE
									1
							END AS priority ';
		}

		$strSql = 'SELECT
						*
					FROM (
						SELECT
							mr.id,
							mr.cid,
							mr.printed_on,
							mr.property_id,
							mr.customer_id,
							mr.remote_primary_key AS mr_rpk,
							mr.created_on,
							mr.ps_product_id,
							util_get_translated( \'name\', mpt.name, mpt.details ) AS wo_prior_name,
							mrd.scheduled_start_datetime AS scheduled,
							mrd.unit_number AS unit,
							util_get_translated( \'name\', ms.name, ms.details ) AS status,
							mr.due_date,
							ap.company_name AS vendor_name,
							CASE
								WHEN
									mr.customer_id IS NULL
								THEN
									func_format_customer_name( mrd.customer_name_first, mrd.customer_name_last )
								ELSE
									c.name_full
							END AS customer_name,
							CASE
								WHEN mr.remote_primary_key IS NOT NULL AND mr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
									\'Migration\'
								WHEN mr.remote_primary_key IS NOT NULL AND mr.ps_product_id <> ' . \CPsProduct::ENTRATA . ' THEN
									\'Integration\'
								WHEN mr.ps_product_id IS NOT NULL AND mr.ps_product_id IN ( ' . \CPsProduct::RESIDENT_PORTAL . ', ' . \CPsProduct::SITE_TABLET . ', ' . \CPsProduct::FACEBOOK_INTEGRATION . ' ) AND mrd.customer_name_first IS NOT NULL THEN
									func_format_customer_name( mrd.customer_name_first, mrd.customer_name_last )
								WHEN mr.ps_product_id IS NOT NULL AND mr.ps_product_id IN ( ' . \CPsProduct::RESIDENT_PORTAL . ', ' . \CPsProduct::SITE_TABLET . ', ' . \CPsProduct::FACEBOOK_INTEGRATION . ' ) AND mrd.customer_name_first IS NULL AND c.name_full IS NOT NULL THEN
									c.name_full
								WHEN ( mr.ps_product_id IS NULL OR mr.ps_product_id NOT IN ( ' . \CPsProduct::RESIDENT_PORTAL . ', ' . \CPsProduct::SITE_TABLET . ', ' . \CPsProduct::FACEBOOK_INTEGRATION . ' ) ) AND ( ce.name_first IS NOT NULL OR ce.name_last IS NOT NULL ) THEN
									func_format_customer_name( ce.name_first, ce.name_last )
								WHEN ( mr.ps_product_id IS NULL OR mr.ps_product_id NOT IN ( ' . \CPsProduct::RESIDENT_PORTAL . ', ' . \CPsProduct::SITE_TABLET . ', ' . \CPsProduct::FACEBOOK_INTEGRATION . ' ) ) AND ( ce.name_first IS NULL OR ce.name_last IS NULL ) THEN
									cu.username
							END AS work_order_created_by,
							mrd.problem_description AS note,
							mrd.problem_description,
							mrd.actual_start_datetime,
							mrd.scheduled_start_datetime,
							mrd.scheduled_end_datetime,
							CASE
								WHEN mrd.actual_start_datetime IS NOT NULL AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' )
									THEN abs( ( ( DATE_PART( \'day\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) * 24
												+ DATE_PART( \'hour\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) ) * 60
												+ DATE_PART( \'minute\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) ) * 60
												+ DATE_PART( \'second\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) )
								WHEN mrd.actual_start_datetime IS NULL  AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' )
									THEN abs( ( ( DATE_PART( \'day\', NOW()::timestamp - mr.created_on::timestamp ) * 24
												+ DATE_PART( \'hour\', NOW()::timestamp - mr.created_on::timestamp ) ) * 60
												+ DATE_PART( \'minute\', NOW()::timestamp - mr.created_on::timestamp ) ) * 60
												+ DATE_PART( \'second\', NOW()::timestamp - mr.created_on::timestamp ) )
								WHEN mrd.actual_start_datetime IS NOT NULL AND ms.maintenance_status_type_id = ' . \CMaintenanceStatusType::COMPLETED . '
									THEN abs( ( ( DATE_PART( \'day\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) * 24
												+ DATE_PART( \'hour\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) ) * 60
												+ DATE_PART( \'minute\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) ) * 60
												+ DATE_PART( \'second\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) )
								WHEN mrd.actual_start_datetime IS NULL AND ms.maintenance_status_type_id = ' . \CMaintenanceStatusType::COMPLETED . '
									THEN abs( ( ( DATE_PART( \'day\', mrd.completed_datetime - mr.created_on ) * 24
												+ DATE_PART( \'hour\', mrd.completed_datetime - mr.created_on ) ) * 60
												+ DATE_PART( \'minute\', mrd.completed_datetime - mr.created_on ) ) * 60
												+ DATE_PART( \'second\', mrd.completed_datetime - mr.created_on ) )
				      		END AS time_open,
							CASE
								WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
									\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
									\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
									\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::PMS_INTEGRATION . ' THEN
									\'' . $arrstrProductName[\CPsProduct::PMS_INTEGRATION] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::SITE_TABLET . ' THEN
									\'' . $arrstrProductName[\CPsProduct::SITE_TABLET] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::INSPECTION_MANAGER . ' THEN
									\'' . $arrstrProductName[\CPsProduct::INSPECTION_MANAGER] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::API_SERVICES . ' THEN
									\'' . $arrstrProductName[\CPsProduct::API_SERVICES] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA_FACILITIES_APP . ' THEN
									\'' . $arrstrProductName[\CPsProduct::ENTRATA_FACILITIES_APP] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . ' THEN
									\'' . $arrstrProductName[\CPsProduct::ENTRATAMATION] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
									\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA_MOBILE_MAINTENANCE . ' THEN
									\'' . $arrstrProductName[\CPsProduct::ENTRATA_MOBILE_MAINTENANCE] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA_PAAS . ' THEN
									\'' . $arrstrProductName[\CPsProduct::ENTRATA_PAAS] . '\'
								WHEN mr.ps_product_id = ' . \CPsProduct::JOB_COSTING . ' THEN
									\'' . $arrstrProductName[\CPsProduct::JOB_COSTING] . '\'
							END AS origin,
							ms.maintenance_status_type_id,
							COALESCE( CASE WHEN us.building_name IS NOT NULL 
                                THEN us.building_name || \' - \' || us.unit_number_cache 
                                      ELSE us.unit_number_cache END ,
                                      pu.unit_number, mrd.unit_number
                            ) AS unit_number,
							p.property_name,
							p.remote_primary_key AS p_rpk,
							CASE
								WHEN mr.ps_product_id IS NOT NULL AND mr.ps_product_id <> ' . \CPsProduct::INSPECTION_MANAGER . ' THEN
									1
								ELSE
									0
							END AS inspection_manager,
							func_format_customer_name( ce.name_first , ce.name_last ) AS assigned_to,
							
						util_get_translated( \'name\', mrt.name, mrt.details ) AS maintenance_request_type_name,
						util_get_translated( \'name\', mp.name, mp.details ) AS maintenance_problem_name,
						CASE WHEN ml.is_system = 1 THEN NULL
							WHEN puml.name IS NOT NULL THEN util_get_translated( \'name\', puml.name, puml.details )
							ELSE util_get_translated( \'name\', ml.name, ml.details )
						END AS maintenance_location_name,
						tz.time_zone_name,
						mr.maintenance_request_type_id,
						cev.end_datetime AS calendar_end_datetime,
						CASE';

		if( true == \valArr( $arrintPmEnabledPropertyIds ) ) {
			$strSql .= '    WHEN mr.property_id IN ( ' . implode( ',', $arrintPmEnabledPropertyIds ) . ' ) AND mr.maintenance_request_type_id <> ' . \CMaintenanceRequestType::MAKE_READY . '
							THEN cev.end_datetime ';
		}

		$strSql .= '        WHEN mrd.scheduled_start_datetime IS NOT NULL AND mrd.scheduled_end_datetime IS NOT NULL THEN mrd.scheduled_start_datetime  
							WHEN mrd.scheduled_start_datetime IS NOT NULL AND mrd.scheduled_end_datetime IS NULL THEN mrd.scheduled_start_datetime
							WHEN mrd.scheduled_start_datetime IS NULL AND mrd.scheduled_end_datetime IS NOT NULL THEN mrd.scheduled_end_datetime
							ELSE NULL
						END as scheduled_date ' . $strSelect;
		$strSql .= ' FROM
						maintenance_requests mr
						JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id )
						JOIN load_properties( ARRAY[' . ( int ) $intCid . '], array[' . implode( $objDashboardFilter->getPropertyGroupIds(), ',' ) . '] ) lp ON lp.property_id = mr.property_id ' . ( ( false == $objDashboardFilter->getShowDisabledData() ) ? ' AND lp.is_disabled = 0 ' : '' ) . ' 
						JOIN maintenance_request_details mrd ON ( mrd.cid = mr.cid AND mrd.maintenance_request_id = mr.id AND mrd.completed_datetime IS NULL)
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id AND ms.is_hidden_on_dashboard != 1 )
						JOIN properties p ON ( p.cid = mr.cid AND p.id = mr.property_id )
						LEFT JOIN customers c ON ( c.cid = mr.cid AND c.id = mr.customer_id )
						JOIN maintenance_priorities mprior ON ( mprior.cid = mr.cid AND mr.maintenance_priority_id = mprior.id AND mprior.is_published = 1 )
						LEFT JOIN maintenance_priority_types mpt ON ( mprior.maintenance_priority_type_id = mpt.id )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
						LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mr.maintenance_problem_id = mp.id )
						LEFT JOIN dashboard_priorities dp ON ( mr.cid = dp.cid )
						LEFT JOIN company_employees ce ON ( ce.cid = mr.cid AND ce.id = mr.company_employee_id )
						LEFT JOIN company_users cu ON ( cu.cid = mr.cid AND cu.company_employee_id = ce.id AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' ) )
						LEFT JOIN ap_payees ap ON ( ap.cid = mr.cid AND ap.id = mr.ap_payee_id )
						LEFT JOIN leases l ON ( l.cid = mr.cid AND l.id=mr.lease_id )  
						LEFT JOIN unit_spaces us ON ( mr.cid = us.cid AND mr.unit_space_id = us.id ' . $strCheckDeletedUnitsSql . ' )
						JOIN calendar_event_types cet ON ( cet.cid = mr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
						LEFT JOIN calendar_events cev ON ( cev.cid = mr.cid AND cev.reference_id = mr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
						JOIN time_zones AS tz ON ( tz.id = p.time_zone_id ) 
						LEFT JOIN property_unit_maintenance_locations puml ON (mr.cid = puml.cid AND mr.property_unit_maintenance_location_id = puml.id) 
						LEFT JOIN property_units pu ON ( pu.cid = mr.cid AND pu.id = mr.property_unit_id AND pu.property_id = mr.property_id AND mr.unit_space_id IS NULL AND pu.deleted_on IS NULL) ';

		$strSql .= ' WHERE
							mr.cid = ' . ( int ) $intCid . '
							AND mr.parent_maintenance_request_id IS NULL
		  					AND mr.deleted_by IS NULL
							AND ms.is_hidden_on_dashboard <> 1
							AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';

		if( true == \valStr( $intMaintenanceRequestTypeId ) ) {

			$strSql .= ' AND mr.maintenance_request_type_id = ' . ( int ) $intMaintenanceRequestTypeId;
		}

		if( true == ( boolean ) $strAssignedToIsNull ) {
			$strSql .= ' AND mr.company_employee_id IS NULL AND mr.ap_payee_id IS NULL';
		}

		$strSql .= '
				) tmp_data
				WHERE
					cid = ' . ( int ) $intCid;

		$strSql .= ( true == \valArr( $objDashboardFilter->getTaskPriorities() ) ? ' ' . $strPriorityWhere : '' );

		$strSql	.= ' ORDER BY ' . $strSortBy;

		if( 0 < $intOffset ) {
			$strSql .= ' OFFSET ' . ( int ) $intOffset;
		}

		if( false == is_null( $intLimit ) ) {
			$strSql .= ' LIMIT ' . ( int ) $intLimit;
		}

		return \fetchData( $strSql, $objDatabase );
	}

	public function buildCompanyUserPropertiesSql( $intCid, $intCompanyUserId, $boolIsAdministrator = false, $boolShowEnabledOnly = true, $boolShowDisabledData = false ) {

		$strDisabledCondition 	= ( false == $boolShowEnabledOnly ) ? '' : ' AND p.is_disabled = 0 ';
		if( true == $boolShowDisabledData ) {
			$strDisabledCondition 	= ' AND p.is_disabled = 1 ';
		}
		$strSql = 'SELECT
						p.id,
						p.cid,
						p.property_name
					FROM
						company_users cu
						JOIN properties p ON ( p.cid = cu.cid AND cu.is_administrator = 1 )
					WHERE
						cu.cid = ' . ( int ) $intCid . '
						AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' )
						AND cu.id = ' . ( int ) $intCompanyUserId . $strDisabledCondition;

		if( true == $boolIsAdministrator ) {
			return $strSql;
		}

		$strSql = $strSql . '

					UNION

					SELECT
						p.id,
						p.cid,
						p.property_name
					FROM
						company_users cu
						JOIN company_user_property_groups cupg ON ( cupg.cid = cu.cid AND cupg.company_user_id = cu.id AND cu.is_administrator = 0 )
						JOIN property_group_associations pga ON ( cupg.cid = pga.cid AND cupg.property_group_id = pga.property_group_id )
						JOIN property_groups pg ON ( pg.cid = cu.cid AND pga.property_group_id = pg.id AND pg.deleted_by IS NULL AND pg.deleted_on IS NULL )
						JOIN properties p ON ( p.cid = cu.cid AND p.id = pga.property_id )
					WHERE
						cu.cid = ' . ( int ) $intCid . '
						AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' )
						AND cu.id = ' . ( int ) $intCompanyUserId . $strDisabledCondition;

		return $strSql;
	}

	public function fetchIncompleteMaintenanceRequestsByCustomerIdByCid( $intCustomerId, $intCid, $objDatabase, $boolIncludeDeletedUnits = false, $arrintMaintenanceRequestIds = NULL ) {

		$strCheckDeletedUnitsSql = ( false == $boolIncludeDeletedUnits ) ? ' AND pu.deleted_on IS NULL' : '';

		$arrstrProductName = \CPsProduct::createService()->getProductNames();

		if( true == \valArr( $arrintMaintenanceRequestIds ) ) {
			$strWhereSql = ' AND vmr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )';
		} else {
			$strWhereSql = ' AND vmr.customer_id = ' . ( int ) $intCustomerId;
		}
		$strSql = ' SELECT
						vmr.id,
						vmr.property_id,
						vmr.ps_product_id,
						vmr.printed_on,
						vmr.actual_start_datetime,
						vmr.created_on,
						vmr.remote_primary_key,
						vmr.customer_id,
						vmr.scheduled_start_datetime,
						vmr.scheduled_end_datetime,
						vmr.problem_description,
						vmr.customer_name_first,
						vmr.customer_name_last,
						pb.building_name,
						( ce.name_first || \' \' || ce.name_last ) AS assigned_to,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
						mprob.name AS maintenance_problem_name,
						mst.name AS maintenance_status_name,
						mst.maintenance_status_type_id,
						mrt.name AS maintenance_request_type,
						mp.maintenance_priority_type_id AS maintenance_priority_type_id,
						mp.name AS maintenance_priority_name,
						p.property_name,
						CASE
							 WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
							 WHEN vmr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
								\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
							 WHEN vmr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA_FACILITIES_APP . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_FACILITIES_APP] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATAMATION] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::JOB_COSTING . ' THEN
								\'' . $arrstrProductName[\CPsProduct::JOB_COSTING] . '\'
						END AS origin,
						COALESCE(us.unit_number_cache, pu.unit_number, cl.unit_number_cache, vmr.unit_number) AS unit_number_cache,
						vmr.maintenance_request_type_id,
						vmr.company_employee_id,
						cev.start_datetime AS calendar_start_datetime,
						cev.end_datetime AS calendar_end_datetime
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
						JOIN maintenance_statuses mst ON ( vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid )
						JOIN maintenance_priorities mp ON ( vmr.maintenance_priority_id = mp.id AND vmr.cid = mp.cid )
						JOIN maintenance_priority_types mpt ON ( mpt.id = mp.maintenance_priority_type_id )
						JOIN properties p ON ( vmr.property_id = p.id AND vmr.cid = p.cid)
						LEFT JOIN cached_leases cl ON ( cl.cid = vmr.cid AND cl.id = vmr.lease_id AND cl.property_id = vmr.property_id )
						LEFT JOIN maintenance_problems mprob ON ( mprob.cid = vmr.cid AND mprob.id = vmr.maintenance_problem_id )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
						LEFT JOIN company_employees ce ON ( vmr.cid = ce.cid AND vmr.company_employee_id = ce.id )
						LEFT JOIN property_units pu ON ( vmr.property_unit_id = pu.id AND vmr.cid = pu.cid ' . $strCheckDeletedUnitsSql . ' )
						LEFT JOIN property_buildings pb ON (  pu.cid = pb.cid AND pb.id =   
											CASE WHEN(vmr.property_building_id IS NOT NULL )
											THEN vmr.property_building_id
											ELSE pu.property_building_id
											END )
						JOIN calendar_event_types cet ON ( cet.cid = vmr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
						LEFT JOIN calendar_events cev ON ( cev.cid = vmr.cid AND cev.reference_id = vmr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
					    LEFT JOIN unit_spaces us ON ( vmr.cid = us.cid AND vmr.unit_space_id = us.id)
					WHERE
						mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' )
						AND vmr.cid::int = ' . ( int ) $intCid .
		          $strWhereSql . '
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.deleted_by IS NULL
					ORDER BY
						vmr.created_on DESC ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchIncompleteMaintenanceRequestsCountByCustomerIdByCid( $intCustomerId, $intCid, $objDatabase ) {

		$strSql = ' SELECT
						count( mr.id ) AS incomplete_work_order_count
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses mst ON ( mr.maintenance_status_id = mst.id AND mr.cid = mst.cid )
					WHERE
						mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' )
						AND mr.cid = ' . ( int ) $intCid . '
						AND mr.customer_id = ' . ( int ) $intCustomerId . '
						AND mr.parent_maintenance_request_id IS NULL
						AND mr.deleted_by IS NULL ';

		$arrintResponse = ( array ) \fetchData( $strSql, $objDatabase );

		if( true == isset( $arrintResponse[0]['incomplete_work_order_count'] ) ) {
			return $arrintResponse[0]['incomplete_work_order_count'];
		}

		return 0;
	}

	public function fetchMaintenanceRequestsByScheduledDateByCid( $strTime, $strDate, $intCid, $objDatabase ) {

		$arrstrDate = explode( '/', $strDate );

		if( false == \valArr( $arrstrDate ) ) {
			return [];
		}

		if( 'am' == $strTime ) {
			$strCondition = 'AND date_part( \'hour\', vmr.requested_datetime ) >= 0 AND date_part ( \'hour\', vmr.requested_datetime ) <= 11';
		} else {
			$strCondition = 'AND date_part( \'hour\', vmr.requested_datetime ) > 11 AND date_part ( \'hour\', vmr.requested_datetime ) <= 23';
		}

		$strSql = ' SELECT
						vmr.id,
						mpt.name AS maintenance_priority_name,
						vmr.maintenance_request_type_id
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_priorities mp ON ( vmr.maintenance_priority_id = mp.id AND vmr.cid = mp.cid )
						LEFT JOIN maintenance_priority_types mpt ON ( mp.maintenance_priority_type_id = mpt.id )
					WHERE
						vmr.parent_maintenance_request_id IS NULL
						AND date_part( \'month\', vmr.requested_datetime ) = ' . $arrstrDate[0] . '
						AND date_part( \'day\', vmr.requested_datetime ) = ' . $arrstrDate[1] . '
						AND date_part( \'year\', vmr.requested_datetime ) = ' . $arrstrDate[2] . '
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_on IS NULL
						AND vmr.deleted_by IS NULL ' . $strCondition . '
					ORDER BY
						vmr.id ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchActiveCustomMaintenanceRequestsByPropertyUnitIdByCid( $intPropertyUnitId, $intCid, $objDatabase, $boolCountOnly = false ) {

		if( false == \valId( $intPropertyUnitId ) ) {
			return NULL;
		}

		$strSql = 'SELECT ';

		if( true == $boolCountOnly ) {
			$strSql .= ' COUNT( mr.id )';
		} else {
			$strSql .= '* ';
		}

		$strSql .= ' FROM maintenance_requests mr
					JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
					WHERE mr.property_unit_id = ' . ( int ) $intPropertyUnitId . ' AND
						  mr.cid::integer = ' . ( int ) $intCid . ' AND
						  mr.deleted_by IS NULL';
		$strSql .= ' AND ms.maintenance_status_type_id = ' . ( int ) \CMaintenanceStatusType::OPEN;

		if( true == $boolCountOnly ) {
			return \fetchData( $strSql, $objDatabase );
		} else {
			return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
		}
	}

	public function fetchTotalMaintenanceRequestsCountPerPropertyByMaintenanceFilter( $objMaintenanceFilter, $intMaintenancePriorityTypeId = NULL, $intCompanyEmployeeId = NULL, $strFilterBy = NULL, $objDatabase ) {

		$strSql = '	SELECT
							COUNT(vmr.id),
							vmr.property_id,
							cp.property_name
						FROM maintenance_requests vmr ';
		if( false == is_null( $objMaintenanceFilter->getPropertyGroupIds() ) && true == \valArr( $objMaintenanceFilter->getPropertyGroupIds() ) ) {
			$strSql .= ' JOIN load_properties ( ARRAY[' . ( int ) $objMaintenanceFilter->getCid() . '], ARRAY[ ' . implode( ',', $objMaintenanceFilter->getPropertyGroupIds() ) . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id AND lp.is_disabled = 0 )';
		}

		$strSql .= ' JOIN maintenance_request_details mrd ON ( mrd.maintenance_request_id = vmr.id AND mrd.cid = vmr.cid )
							JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
							LEFT JOIN property_units pu ON (vmr.property_unit_id = pu.id AND vmr.cid = pu.cid  AND pu.deleted_on IS NULL )
							LEFT JOIN properties cp ON (vmr.property_id = cp.id AND vmr.cid = cp.cid)
							JOIN maintenance_priorities mp ON (vmr.maintenance_priority_id = mp.id AND vmr.cid = mp.cid)
							LEFT JOIN company_employees ce ON (vmr.company_employee_id = ce.id AND vmr.cid = ce.cid)
							LEFT JOIN company_employees cec ON (vmr.company_employee_id = cec.id AND vmr.cid = cec.cid AND vmr.created_by = cec.id)
							LEFT JOIN company_users cu ON (vmr.created_by = cu.id AND vmr.cid = cu.cid AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ') )
							LEFT JOIN customers cust ON (vmr.customer_id = cust.id AND vmr.cid = cust.cid)
							LEFT JOIN unit_spaces us ON ( vmr.unit_space_id = us.id AND vmr.cid = us.cid  AND us.deleted_on IS NULL )
							JOIN maintenance_statuses mst ON (vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid)
						WHERE
						    cp.is_disabled = 0
						    AND vmr.cid = ' . ( int ) $objMaintenanceFilter->getCid() . '
						    AND vmr.parent_maintenance_request_id IS NULL
						    AND vmr.deleted_by IS NULL';

		if( false == in_array( \CMaintenanceRequestType::RECURRING, $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) ) {
			$strSql .= ' AND vmr.maintenance_group_id IS NULL ';
		}

		if( true == \valId( $intMaintenancePriorityTypeId ) ) {
			if( \CMaintenancePriority::OTHER == $intMaintenancePriorityTypeId ) {
				$strSql .= ' AND mp.maintenance_priority_type_id IS NULL ';
			} else {
				$strSql .= ' AND mp.maintenance_priority_type_id=' . $intMaintenancePriorityTypeId;
			}
		} elseif( true == \valStr( $strFilterBy ) ) {

			if( 'is_assigned_to_others' == $strFilterBy && true == \valId( $intCompanyEmployeeId ) ) {
				$strSql .= ' AND vmr.company_employee_id IS NOT NULL AND vmr.company_employee_id <> ' . $intCompanyEmployeeId;
			} elseif( 'is_not_assigned' == $strFilterBy ) {
				$strSql .= ' AND vmr.company_employee_id IS NULL ';
			}
		} elseif( true == \valId( $intCompanyEmployeeId ) ) {
			$strSql .= ' AND vmr.company_employee_id = ' . $intCompanyEmployeeId;
		}

		if( true == \valArr( $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) ) {
			$strSql .= ' AND mrt.id IN ( ' . implode( ' , ', $objMaintenanceFilter->getMaintenanceRequestTypeIds() ) . ' )';
		}

		$arrstrAndSearchParameters = $this->fetchNewMaintenanceFilterSearchCriteria( $objMaintenanceFilter );
		$strSql	.= ( ( false == is_null( $arrstrAndSearchParameters ) ) ? ' AND ' . implode( ' AND ', $arrstrAndSearchParameters ) : '' );

		if( ( false == is_null( $objMaintenanceFilter->getCompletedOnFrom() ) && 'Min' != $objMaintenanceFilter->getCompletedOnFrom() ) || ( false == is_null( $objMaintenanceFilter->getCompletedOnTo() ) && 'Max' != $objMaintenanceFilter->getCompletedOnTo() ) ) {

			$strSql	.= ' AND vmr.maintenance_status_id = ( SELECT
																id
															FROM
																maintenance_statuses
															WHERE
																cid = ' . ( int ) $objMaintenanceFilter->getCid() . '
																AND maintenance_status_type_id = ' . \CMaintenanceStatusType::COMPLETED . '
															LIMIT 1
														) ';
		}

		$arrstrAndSearchParameters = $this->fetchNewMaintenanceFilterSearchCriteria( $objMaintenanceFilter, true );
		$strSql	.= ( ( false == is_null( $arrstrAndSearchParameters ) ) ? ' AND ' . implode( ' AND ', $arrstrAndSearchParameters ) : '' );

		$strSql	.= '
					GROUP BY
						vmr.property_id,
						cp.property_name
					ORDER BY
						cp.property_name';

		return $arrstrData = \fetchData( $strSql, $objDatabase );
	}

	public function fetchTotalMaintenanceRequestsCountByMaintenanceProblemIdByPropertyIdByUnitIdByCid( $intMaintenanceProblemId, $intPropertyId, $intUnitSpaceId = NULL, $intPropertyUnitId = NULL, $intDaysBackForSimilarProblem, $intCid, $objDatabase ) {

		$strSql = ' SELECT
						count( mr.id ) AS count,
						array_to_string ( array_agg ( mr.id ), \',\' ) AS maintenance_request_ids
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id AND ms.is_published = 1 )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id = ' . ( int ) $intPropertyId . '
						AND mr.maintenance_problem_id = ' . ( int ) $intMaintenanceProblemId . '
						AND mr.parent_maintenance_request_id IS NULL
						AND mr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::MAKE_READY . ' , ' . \CMaintenanceRequestType::SERVICE_REQUEST . ' )
						AND mr.deleted_by IS NULL
						AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';

		if( false == is_null( $intDaysBackForSimilarProblem ) ) {
			$strDaysInterval = ' now() - interval \'' . $intDaysBackForSimilarProblem . ' day \' ';
			$strSql .= ' AND mr.created_on BETWEEN ' . $strDaysInterval . ' AND now()';
		}

		if( false == is_null( $intUnitSpaceId ) ) {
			$strSql .= ' AND mr.unit_space_id = ' . ( int ) $intUnitSpaceId;
		}

		if( false == is_null( $intPropertyUnitId ) ) {
			$strSql .= ' AND mr.property_unit_id = ' . ( int ) $intPropertyUnitId;
		}

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchTotalMaintenanceRequestsCountByMaintenanceProblemIdByPropertyIdByCid( $intMaintenanceProblemId, $intPropertyId, $intDaysBackForSimilarProblem, $intCid, $objDatabase ) {

		$strSql = ' SELECT
						count( mr.id ) AS count,
						array_to_string ( array_agg ( mr.id ), \',\' ) AS maintenance_request_ids
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id AND ms.is_published = 1 )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id = ' . ( int ) $intPropertyId . '
						AND mr.maintenance_problem_id = ' . ( int ) $intMaintenanceProblemId . '
						AND mr.deleted_by IS NULL
						AND mr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::MAKE_READY . ' , ' . \CMaintenanceRequestType::SERVICE_REQUEST . ' )
						AND mr.parent_maintenance_request_id IS NULL
						AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';

		if( false == is_null( $intDaysBackForSimilarProblem ) ) {
			$strDaysInterval = ' now() - interval \'' . $intDaysBackForSimilarProblem . ' day \' ';
			$strSql .= ' AND mr.created_on BETWEEN ' . $strDaysInterval . ' AND now()';
		}

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchSubTaskCountByMaintenanceRequestIdsByCid( $arrintMaintenanceRequestIds, $intCid, $objDatabase, $boolIsCheckClosedSubTasks = true ) {

		if( false == \valArr( array_filter( $arrintMaintenanceRequestIds ) ) ) {
			return false;
		}

		$strCheckClosedSubTasksSql = ( true == $boolIsCheckClosedSubTasks ) ? ' AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ', ' . \CMaintenanceStatusType::CANCELLED . ' ) ' : '';

		$strSql = ' SELECT
						DISTINCT ON ( mr.parent_maintenance_request_id )
						count( mr.id ) OVER (PARTITION BY mr.parent_maintenance_request_id) AS sub_task_count, mr.parent_maintenance_request_id AS maintenance_request_id
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses ms on ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.parent_maintenance_request_id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )
						AND mr.parent_maintenance_request_id IS NOT null
						AND mr.deleted_by IS NULL 
						AND mr.deleted_on IS NULL ' . $strCheckClosedSubTasksSql . '
					ORDER BY
						mr.parent_maintenance_request_id';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestPropertyIdsByMaintenanceRequestMaterialIdsByCid( $arrintMaintenanceRequestMaterialIds, $intCid, $objClientDatabase ) {

		if( false == \valArr( $arrintMaintenanceRequestMaterialIds ) ) {
			return false;
		}

		$strSql = 'SELECT
						DISTINCT mr.property_id
					FROM
						maintenance_requests mr
						JOIN maintenance_request_materials mrm ON ( mr.cid = mrm.cid AND mr.id = mrm.maintenance_request_id )
					WHERE
						mrm.cid =  ' . ( int ) $intCid . '
						AND mrm.id IN ( ' . implode( ',', array_filter( $arrintMaintenanceRequestMaterialIds ) ) . ' )
						AND mrm.deleted_by IS NULL ';

		return \fetchData( $strSql, $objClientDatabase );
	}

	public function fetchMaintenanceRequestsByCustomerIdByStatusTypeIdBylocationIdByByCategoryIdCid( $intCustomerId, $intStatusTypeId, $intLocationId, $intCategoryId, $intCid, $objDatabase ) {
		if( false == \valId( $intLocationId ) || false == \valId( $intCustomerId ) ) {
			return false;
		}

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
				FROM
					view_maintenance_requests vmr
					JOIN maintenance_statuses ms ON ( vmr.maintenance_status_id = ms.id AND vmr.cid = ms.cid )';

		if( true == \valId( $intCategoryId ) ) {
			$strSql .= ' JOIN maintenance_problems mp ON ( vmr.maintenance_problem_id = mp.id AND vmr.cid = mp.cid )';
		}

		$strSql .= '	WHERE
							vmr.customer_id = ' . ( int ) $intCustomerId . '
							AND vmr.cid = ' . ( int ) $intCid . '
							AND vmr.maintenance_location_id = ' . ( int ) $intLocationId . '
							AND ms.maintenance_status_type_id = ' . ( int ) $intStatusTypeId;

		if( true == \valId( $intCategoryId ) ) {
			$strSql .= ' AND vmr.maintenance_problem_id = ' . ( int ) $intCategoryId;
		}

		$strSql .= ' ORDER BY vmr.id DESC';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByCustomerIdByMaintenanceRequestTypeIdByMaintenanceStatusTypeIdByCid( $intCustomerId, $intMaintenanceRequestTypeId, $intStatusTypeId, $intCid, $objDatabase, $boolIsIncludeDeletedWorkOrder = false ) {
		if( false == \valId( $intCustomerId ) || false == \valId( $intMaintenanceRequestTypeId ) || false == \valId( $intStatusTypeId ) || false == \valId( $intCid ) ) {
			return NULL;
		}

		$strCheckDeletedWorkOrdersSql = ( false == $boolIsIncludeDeletedWorkOrder ) ? ' AND vmr.deleted_on IS NULL' : NULL;

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
				FROM
					view_maintenance_requests vmr
					JOIN maintenance_statuses ms ON ( vmr.maintenance_status_id = ms.id AND vmr.cid = ms.cid )';

		$strSql .= '	WHERE
							vmr.cid = ' . ( int ) $intCid . '
							AND vmr.customer_id = ' . ( int ) $intCustomerId . '
							AND vmr.maintenance_request_type_id = ' . ( int ) $intMaintenanceRequestTypeId . '
							AND ms.maintenance_status_type_id = ' . ( int ) $intStatusTypeId . $strCheckDeletedWorkOrdersSql;

		$strSql .= ' ORDER BY vmr.id DESC';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchCustomMaintenanceRequestLocationsAndProblemsByIdsByCid( $arrintMaintenanceRequestIds, $arrintSubMaintenanceRequestIds, $intCid, $objDatabase ) {

		$strSubMaintenanceRequestIdsConditionSql = '';

		if( false == \valArr( $arrintMaintenanceRequestIds ) ) {
			return NULL;
		}

		if( true == \valArr( $arrintSubMaintenanceRequestIds ) ) {
			$strSubMaintenanceRequestIdsConditionSql = ' AND mr.id IN (' . implode( ',', $arrintSubMaintenanceRequestIds ) . '  ) ';
		}

		$strSql = 'SELECT
						mr.id,
						pmr.id AS parent_maintenance_request_id,
						mr.property_id,
						mr.ap_payee_id,
						mp.name AS maintenance_problem_name,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
						pmr.maintenance_request_type_id
					FROM
						maintenance_requests pmr
						JOIN maintenance_requests mr ON ( pmr.id = mr.parent_maintenance_request_id AND pmr.cid = mr.cid )
						LEFT JOIN maintenance_locations ml ON ( ml.id = mr.maintenance_location_id AND mr.cid = ml.cid )
						JOIN maintenance_problems mp ON ( mr.maintenance_problem_id = mp.id AND mr.cid = mp.cid  )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND pmr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' ) ' . $strSubMaintenanceRequestIdsConditionSql . '
						AND mr.deleted_by IS NULL';

		$strSql .= ' UNION
							SELECT
								mr.id,
								mr.parent_maintenance_request_id,
								mr.property_id,
								mr.ap_payee_id,
								mp.name AS maintenance_problem_name,
								CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
								mr.maintenance_request_type_id
							FROM

								maintenance_requests mr
								LEFT JOIN maintenance_locations ml ON ( ml.id = mr.maintenance_location_id AND mr.cid = ml.cid )
								LEFT JOIN maintenance_problems mp ON ( mr.maintenance_problem_id = mp.id AND mr.cid = mp.cid  )
							WHERE
								mr.cid = ' . ( int ) $intCid . '
								AND mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )
								AND mr.deleted_by IS NULL';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchSimpleMaintenanceRequestIdsByPropertyIdByCid( $intPropertyId, $intCid, $objDatabase ) {

		$strSql = '	SELECT
						mr.id
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses ms ON ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id = ' . ( int ) $intPropertyId . '
						AND ( mr.company_employee_id IS NULL)
						AND mr.deleted_by IS NULL
						AND mr.parent_maintenance_request_id IS NULL
					    AND mr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::MAKE_READY . ', ' . \CMaintenanceRequestType::RECURRING . ', ' . \CMaintenanceRequestType::SERVICE_REQUEST . ' )
					    AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchCustomMaintenanceRequestByMaintenanceFilterByPropertyIdByCid( $arrstrMaintenanceFilter, $intPropertyId, $intCid, $objDatabase, $intLimit = 100, $boolIncludeServiceRequestTypes = false ) {
		$strSql					= '';
		$strSqlWhere 			= '';
		$strSqlServiceRequest 	= '';

		if( true == $boolIncludeServiceRequestTypes ) {
			$strSqlServiceRequest 	= ' AND mr.parent_maintenance_request_id IS NULL AND 
											mr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' ';
		}

		if( true == \valArr( $arrstrMaintenanceFilter ) ) {
			foreach( $arrstrMaintenanceFilter as $strMaintenanceFilter ) {
				$strSqlWhere = $strSqlWhere . ' AND ( mrd.customer_name_first ILIKE \'%' . addslashes( $strMaintenanceFilter ) . '%\' OR
													mrd.customer_name_last ILIKE \'%' . addslashes( $strMaintenanceFilter ) . '%\' OR
													mrd.unit_number ILIKE \'%' . addslashes( $strMaintenanceFilter ) . '%\' ) ';
			}

			$strSql = 'SELECT
							mr.*,
							mrd.permission_to_enter AS permission_to_enter,
							mrd.unit_number AS unit_number,
							mrd.completed_datetime AS completed_datetime,
							mrd.problem_description AS problem_description,
							mrd.scheduled_start_datetime AS scheduled_start_datetime,
							mrd.scheduled_end_datetime AS scheduled_end_datetime,
							mrd.customer_name_first,
							mrd.customer_name_last,
							mrd.additional_info,
							mp.name AS maintenance_problem_name,
							mp1.id AS maintenance_category_id,
							mp1.name AS maintenance_category_name,
							mpr.name AS maintenance_priority_name,
							mpr.maintenance_priority_type_id,
							CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
							ms.maintenance_status_type_id,
							ms.name AS maintenance_status_name,
							mst.name AS maintenance_status_type_name,
							us.unit_space_status_type_id,
							ust.name AS unit_space_status_type_name,
							us.building_name
						FROM
							maintenance_requests mr
							JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
							LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id )
							LEFT JOIN maintenance_problems mp1 ON ( mp1.cid = mp.cid AND mp1.id = mp.maintenance_problem_id )
							JOIN maintenance_priorities mpr ON ( mpr.cid = mr.cid AND mpr.id = mr.maintenance_priority_id )
							LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
							JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
							LEFT JOIN maintenance_status_types mst ON ( ms.maintenance_status_type_id = mst.id )
							LEFT JOIN unit_spaces us ON ( mr.unit_space_id = us.id )
							LEFT JOIN unit_space_status_types ust ON ( us.unit_space_status_type_id = ust.id )
						WHERE
							mr.cid = ' . ( int ) $intCid . '
							AND mr.property_id = ' . ( int ) $intPropertyId . $strSqlWhere . $strSqlServiceRequest . '
							AND mr.deleted_by IS NULL
						ORDER BY
							mr.id DESC
						LIMIT ' . ( int ) $intLimit;
		} else {

			$strSql = 'SELECT * 
						FROM (
							SELECT
								mr.*,
								CASE 
									WHEN row_number() OVER ( PARTITION BY maintenance_status_type_id ORDER BY maintenance_status_type_id, mr.updated_on DESC ) > ' . ( int ) $intLimit . ' THEN NULL 
									ELSE row_number() OVER ( PARTITION BY maintenance_status_type_id ORDER BY maintenance_status_type_id ) 
								 END as row_no,
								mrd.permission_to_enter AS permission_to_enter,
								mrd.unit_number AS unit_number,
								mrd.completed_datetime AS completed_datetime,
								mrd.problem_description AS problem_description,
								mrd.scheduled_start_datetime AS scheduled_start_datetime,
								mrd.scheduled_end_datetime AS scheduled_end_datetime,
								mrd.customer_name_first,
								mrd.customer_name_last,
								mrd.additional_info,
								mp.name AS maintenance_problem_name,
								mp1.id AS maintenance_category_id,
								mp1.name AS maintenance_category_name,
								mpr.name AS maintenance_priority_name,
								mpr.maintenance_priority_type_id,
								CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
								ms.maintenance_status_type_id,
								ms.name AS maintenance_status_name,
								mst.name AS maintenance_status_type_name,
								us.unit_space_status_type_id,
								ust.name AS unit_space_status_type_name,
								us.building_name
							FROM
								maintenance_requests mr
								JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
								LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id )
								LEFT JOIN maintenance_problems mp1 ON ( mp1.cid = mp.cid AND mp1.id = mp.maintenance_problem_id )
								JOIN maintenance_priorities mpr ON ( mpr.cid = mr.cid AND mpr.id = mr.maintenance_priority_id )
								LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
								JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
								LEFT JOIN maintenance_status_types mst ON ( ms.maintenance_status_type_id = mst.id )
								LEFT JOIN unit_spaces us ON ( mr.unit_space_id = us.id )
								LEFT JOIN unit_space_status_types ust ON ( us.unit_space_status_type_id = ust.id )
							WHERE
								mr.cid = ' . ( int ) $intCid . '
								AND mr.property_id = ' . ( int ) $intPropertyId . $strSqlServiceRequest . '
								AND mr.deleted_by IS NULL
								) AS work_order WHERE work_order.row_no IS NOT NULL 
						ORDER BY
							work_order.id, work_order.updated_on DESC ';
		}

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsCountByMaintenanceFilterByPropertyIdByCid( $arrstrMaintenanceFilter, $arrintPropertyIds, $intCid, $objDatabase ) {
		$strSqlWhere   = '';

		if( false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}

		if( true == \valArr( $arrstrMaintenanceFilter ) ) {
			if( false != \valArr( $arrstrMaintenanceFilter['search'] ) ) {
				foreach( $arrstrMaintenanceFilter['search'] as $strMaintenanceFilter ) {
					$strSqlWhere = $strSqlWhere . ' AND ( mrd.customer_name_first ILIKE \'%' . addslashes( $strMaintenanceFilter ) . '%\' OR
												mrd.customer_name_last ILIKE \'%' . addslashes( $strMaintenanceFilter ) . '%\' OR
												mrd.unit_number ILIKE \'%' . addslashes( $strMaintenanceFilter ) . '%\' ';

					if( false != \valId( $strMaintenanceFilter ) ) {
						$strSqlWhere = $strSqlWhere . ' OR 
												mrd.maintenance_request_id = ' . addslashes( $strMaintenanceFilter ) . ' ) ';
					} else {
						$strSqlWhere = $strSqlWhere . ' ) ';
					}
				}
			}

			if( false != \valArr( $arrstrMaintenanceFilter['maintenanceStatusesIds'] ) ) {
				$strSqlWhere = $strSqlWhere . ' AND mr.maintenance_status_id in ( ' . implode( ',', $arrstrMaintenanceFilter['maintenanceStatusesIds'] ) . ' ) ';
			}

			if( false != \valArr( $arrstrMaintenanceFilter['maintenancePriorityIds'] ) ) {
				$strSqlWhere = $strSqlWhere . ' AND mr.maintenance_priority_id in ( ' . implode( ',', $arrstrMaintenanceFilter['maintenancePriorityIds'] ) . ' ) ';
			}

			if( false != \valId( $arrstrMaintenanceFilter['assignedToId'] ) ) {
				$strSqlWhere = $strSqlWhere . ' AND mr.company_employee_id = ' . $arrstrMaintenanceFilter['assignedToId'];
			}
		}

		$strSql = ' SELECT
						count( mr.id )
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
						JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id AND mrt.id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
							AND mr.property_id  IN ( ' . implode( ',', $arrintPropertyIds ) . ' ) ' . $strSqlWhere . '
						AND mr.deleted_by IS NULL
						AND mr.parent_maintenance_request_id IS NULL';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchPaginatedMaintenanceRequestsForSTByMaintenanceFilterByPropertyIdsByCid( $arrstrMaintenanceFilter, $arrintPropertyIds, $intCid, $objDatabase, $intLimit = 100, $intCustomerId = NULL, $intMaintenanceRequestId = NULL, $boolIsPropertyRequired = true, $boolIsAllowedOpenTypeStatus = true ) {

		$strSqlWhere					= '';
		$strSqlWherePropertyCondition	= '';

		if( false == \valArr( $arrintPropertyIds ) && false != $boolIsPropertyRequired ) {
			return NULL;
		} else if( false != $boolIsPropertyRequired ) {
			$strSqlWherePropertyCondition = ' AND mr.property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' )';
		}

		if( true == \valId( $intMaintenanceRequestId ) ) {
			$strSqlWhere = ' AND mr.id < ' . ( int ) $intMaintenanceRequestId;
		}

		if( true == \valArr( $arrstrMaintenanceFilter ) ) {
			if( false != \valArr( $arrstrMaintenanceFilter['search'] ) ) {
				foreach( $arrstrMaintenanceFilter['search'] as $strMaintenanceFilter ) {
					$strSqlWhere = $strSqlWhere . ' AND ( mrd.customer_name_first ILIKE \'%' . addslashes( $strMaintenanceFilter ) . '%\' OR
												mrd.customer_name_last ILIKE \'%' . addslashes( $strMaintenanceFilter ) . '%\' OR
												mrd.unit_number ILIKE \'%' . addslashes( trim( $strMaintenanceFilter ) ) . '%\' ';

					if( false != \valId( $strMaintenanceFilter ) ) {
						$strSqlWhere = $strSqlWhere . ' OR 
												mrd.maintenance_request_id = ' . addslashes( $strMaintenanceFilter ) . ' ) ';
					} else {
						$strSqlWhere = $strSqlWhere . ' ) ';
					}
				}
			}

			if( false != \valArr( $arrstrMaintenanceFilter['maintenanceStatusesIds'] ) ) {
				$strSqlWhere = $strSqlWhere . ' AND ms.id in ( ' . implode( ',', $arrstrMaintenanceFilter['maintenanceStatusesIds'] ) . ' ) ';
			}

			if( false != \valArr( $arrstrMaintenanceFilter['maintenancePriorityIds'] ) ) {
				$strSqlWhere = $strSqlWhere . ' AND mpr.id in ( ' . implode( ',', $arrstrMaintenanceFilter['maintenancePriorityIds'] ) . ' ) ';
			}

			if( false != \valId( $arrstrMaintenanceFilter['assignedToId'] ) ) {
				$strSqlWhere = $strSqlWhere . ' AND mr.company_employee_id = ' . $arrstrMaintenanceFilter['assignedToId'];
			}
		} else {
			if( true == \valId( $intCustomerId ) ) {
				$strSqlWhere = $strSqlWhere . ' AND mr.customer_id = ' . ( int ) $intCustomerId;
			}
			if( false != $boolIsAllowedOpenTypeStatus ) {
				$strSqlWhere = $strSqlWhere . ' AND ms.maintenance_status_type_id = ' . ( int ) \CMaintenanceStatusType::OPEN;
			}
		}

		$strSql = 'SELECT
						mr.*,
						mrd.permission_to_enter AS permission_to_enter,
						mrd.unit_number AS unit_number,
						mrd.completed_datetime AS completed_datetime,
						mrd.problem_description AS problem_description,
						mrd.scheduled_start_datetime AS scheduled_start_datetime,
						mrd.scheduled_end_datetime AS scheduled_end_datetime,
						mrd.customer_name_first,
						mrd.customer_name_last,
						mrd.additional_info,
						mp.name AS maintenance_problem_name,
						mp1.id AS maintenance_category_id,
						mp1.name AS maintenance_category_name,
						mpr.name AS maintenance_priority_name,
						mpr.maintenance_priority_type_id,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
						ms.maintenance_status_type_id,
						ms.name AS maintenance_status_name,
						mst.name AS maintenance_status_type_name,
						us.unit_space_status_type_id,
						ust.name AS unit_space_status_type_name,
						us.building_name,
						mpr.id as maintenance_priority_id
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
						LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id )
						LEFT JOIN maintenance_problems mp1 ON ( mp1.cid = mp.cid AND mp1.id = mp.maintenance_problem_id )
						LEFT JOIN maintenance_priorities mpr ON ( mpr.cid = mr.cid AND mpr.id = mr.maintenance_priority_id )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
						LEFT JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
						LEFT JOIN maintenance_status_types mst ON ( ms.maintenance_status_type_id = mst.id )
						LEFT JOIN unit_spaces us ON ( mr.unit_space_id = us.id )
						LEFT JOIN unit_space_status_types ust ON ( us.unit_space_status_type_id = ust.id )
						JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id AND mrt.id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						' . $strSqlWherePropertyCondition . '
						' . $strSqlWhere . '
						AND mr.deleted_by IS NULL
						AND mr.parent_maintenance_request_id IS NULL
					ORDER BY
						mr.id DESC
						LIMIT ' . ( int ) $intLimit;

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchSimpleVisibleMaintenanceRequestNotesEventIdsByCutomerIds( $arrintCustomerIds, $intCid, $objDatabase ) {
		if( true != \valArr( $arrintCustomerIds ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						e.id,
		 				mr.id AS maintenance_request_id
					FROM
		 				maintenance_requests mr
		 				LEFT JOIN events e ON ( mr.cid = e.cid AND mr.id = e.data_reference_id AND e.event_type_id = ' . \CEventType::WORK_ORDER_UPDATED . ' AND e.event_sub_type_id = ' . \CEventSubType::WORKORDER_NOTE_ADDED . ')
						JOIN maintenance_request_notes mrn ON ( mr.cid = mrn.cid AND mr.id = mrn.maintenance_request_id AND mrn.note = e.notes )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mrn.is_resident_visible = 1
						AND mr.customer_id IN (' . implode( ',', $arrintCustomerIds ) . ')';

		$arrmixData = \fetchData( $strSql, $objDatabase );

		return $arrmixData;
	}

	public function fetchMaintenanceRequestsSubtasksByMaintenanceRequestIdsByMaintenanceRequestFilterByCid( $arrintMaintenanceRequestIds, $arrmixMaintenanceFilterValues, $intCid, $objDatabase, $boolIsForVendors = false, $boolIsFetchSubTasks = true ) {

		if( false == \valArr( $arrintMaintenanceRequestIds ) ) {
			return NULL;
		}

		$strSubtaskScheduledEndCondition = '';
		$strOrderBy = '';

		if( true == \valArr( $arrmixMaintenanceFilterValues ) && true == \valArr( $arrmixMaintenanceFilterValues['subtask_date'] ) ) {
			// $arrmixMaintenanceFilterValues['subtask_date'] will be set when the request comes from make ready
			if( true == \valStr( $arrmixMaintenanceFilterValues['subtask_date']['min-date'] ) ) {
				$strSubtaskScheduledEndCondition .= ' AND date( mrd.scheduled_end_datetime ) >= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['subtask_date']['min-date'] ) ) ) . '\'';
			}

			if( true == \valStr( $arrmixMaintenanceFilterValues['subtask_date']['max-date'] ) ) {
				$strSubtaskScheduledEndCondition .= ' AND date( mrd.scheduled_end_datetime ) <= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['subtask_date']['max-date'] ) ) ) . '\'';
			}
		}

		$strSelect = 'DISTINCT(mr.id), mr.parent_maintenance_request_id AS parent_id,';
		$strSubTaskJoinCondition = ' AND pb.property_id = mr.property_id AND pb.id = mr.property_building_id ';
		$strWhereCondition = ' AND mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' ) AND mr.parent_maintenance_request_id IS NULL AND mr.maintenance_group_id IS NULL ';

		if( true == $boolIsFetchSubTasks ) {
			$strSelect = 'DISTINCT(mr.id), vmr.id AS parent_id, lp.move_out_date, 
							to_char( vmr.scheduled_end_datetime, \'mm/dd/yyyy\' )::date AS end_datetime, DATE ( vmr.scheduled_end_datetime ) - DATE ( now ( ) ) AS days_left,';

			if( true == isset( $arrmixMaintenanceFilterValues['sort_by'] ) ) {
				if( 'move_in_date' == explode( ' ', $arrmixMaintenanceFilterValues['sort_by'] )[0] ) {
					$strSelect .= '( SELECT
							to_char ( MIN( l.move_in_date ), \'MM/DD/YY\' )::TEXT
						FROM
							cached_leases l
							JOIN unit_spaces us ON ( us.cid = l.cid AND us.id = l.unit_space_id AND us.deleted_on IS NULL )
							JOIN lease_customers lc ON ( lc.cid = l.cid AND lc.lease_id = l.id )
							JOIN properties p ON ( p.cid = l.cid AND p.id = l.property_id )
							LEFT JOIN property_preferences pp ON ( pp.cid = p.cid AND pp.property_id = p.id AND  pp.key = \'ENABLE_SEMESTER_SELECTION\' )
							JOIN applications a ON ( a.cid = l.cid AND a.lease_id = l.id AND a.property_id = l.property_id )
						WHERE
							l.cid = vmr.cid
							AND l.unit_space_id = vmr.unit_space_id
							AND us.unit_space_status_type_id IN ( ' . \CUnitSpaceStatusType::NOTICE_RENTED . ' , ' . \CUnitSpaceStatusType::VACANT_RENTED_NOT_READY . ' , ' . \CUnitSpaceStatusType::VACANT_RENTED_READY . ' )
							AND lc.lease_status_type_id IN ( ' . \CLeaseStatusType::FUTURE . ' , ' . \CLeaseStatusType::APPLICANT . ' )
							AND lc.customer_type_id = ' . ( int ) \CCustomerType::PRIMARY . '
							AND CASE WHEN ' . \COccupancyType::STUDENT . ' = ANY( p.occupancy_type_ids ) AND pp.value = \'1\' 
									THEN ( a.application_stage_id, a.application_status_id ) IN ( ' . \sqlIntMultiImplode( \CApplicationStageStatus::$c_arrintLockDownApplicationStatusIds ) . ' ) 
									ELSE ( a.application_stage_id, a.application_status_id ) IN ( ' . \sqlIntMultiImplode( \CApplicationStageStatus::$c_arrintCompletedApplicationStatusIds ) . ' ) 
								END 
					) AS move_in_date,';
				}
				if( false !== \Psi\CStringService::singleton()->strpos( $arrmixMaintenanceFilterValues['sort_by'], 'scheduled_end_datetime' ) ) {
					$arrmixMaintenanceFilterValues['sort_by'] = str_replace( 'scheduled_end_datetime', 'end_datetime', $arrmixMaintenanceFilterValues['sort_by'] );
				}

				$strOrderBy .= ', ' . $arrmixMaintenanceFilterValues['sort_by'];
			}

			$strSubTaskJoin = 'LEFT JOIN view_maintenance_requests vmr ON ( mr.cid = vmr.cid AND mr.parent_maintenance_request_id = vmr.id )
								LEFT JOIN lease_processes lp ON ( lp.cid = vmr.cid AND lp.lease_id = vmr.lease_id AND lp.customer_id IS NULL )';
			$strSubTaskJoinCondition = ' AND pb.property_id = vmr.property_id AND pb.id = vmr.property_building_id ';
			$strWhereCondition = ' AND vmr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' ) AND mr.parent_maintenance_request_id IS NOT NULL AND vmr.maintenance_group_id IS NULL ';
			$strOrderBy .= ', vmr.id';
		}

		$strSql = 'SELECT
						' . $strSelect . '
						mr.maintenance_request_type_id,
						COALESCE( pb.building_name, pb1.building_name ) AS building_name,
						CASE WHEN us.id IS NOT NULL THEN us.unit_number_cache ELSE pu.unit_number END AS unit_number_cache,
						us.available_on,
						CASE WHEN ml.is_system = 1 THEN NULL WHEN puml.name IS NOT NULL THEN puml.name ELSE ml.name END AS maintenance_location_name,
						mp.name AS maintenance_problem_name,
						mrd.problem_description,
						mr.property_id,
						us.property_name,
						mrd.scheduled_end_datetime, ';

		if( true == $boolIsForVendors ) {
			$strSql .= 'mr.ap_payee_id,
						ap.company_name ';
		} else {
			$strSql .= 'mr.company_employee_id,
						ce.name_first,
						ce.name_last,
						( ce.name_last || ce.name_first ) AS full_name,
						mpt.name AS maintenance_priority_name ';
		}

		$strSql .= 'FROM maintenance_requests mr
						' . $strSubTaskJoin . '
						LEFT JOIN maintenance_request_details mrd ON ( mr.id = mrd.maintenance_request_id AND mr.cid = mrd.cid )';

		if( true == $boolIsForVendors ) {
			$strSql .= 'LEFT JOIN ap_payees ap ON ( mr.ap_payee_id = ap.id AND mr.cid = ap.cid )';
		} else {
			$strSql .= 'LEFT JOIN company_employees ce ON ( mr.company_employee_id = ce.id AND mr.cid = ce.cid )
						LEFT JOIN company_users cu ON ( cu.cid = ce.cid AND cu.company_employee_id = ce.id AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' ) )
	   					LEFT JOIN view_company_user_properties vcup ON ( vcup.cid = cu.cid AND vcup.company_user_id = cu.id AND ( vcup.property_id = mr.property_id OR cu.is_administrator = 1 ) )
						JOIN maintenance_priorities mpt ON ( mpt.cid = mr.cid AND mpt.id = mr.maintenance_priority_id )';
		}

		$strSql .= 'LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND mr.maintenance_location_id = ml.id )
						LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id )
						LEFT JOIN property_buildings pb ON ( pb.cid = mr.cid ' . $strSubTaskJoinCondition . ' )
		 				LEFT JOIN unit_spaces us ON( mr.unit_space_id = us.id AND mr.cid = us.cid )
		 				LEFT JOIN property_buildings pb1 ON( us.property_building_id = pb1.id AND us.cid = pb1.cid )
		 				LEFT JOIN property_units pu ON ( pu.cid = mr.cid AND pu.id = mr.property_unit_id )
		 				JOIN maintenance_statuses ms ON( ms.id = mr.maintenance_status_id AND ms.cid = mr.cid )
						LEFT JOIN property_unit_maintenance_locations puml ON (mr.cid = puml.cid AND mr.property_unit_maintenance_location_id = puml.id)
					WHERE
						mr.cid = ' . ( int ) $intCid . ' 
						' . $strWhereCondition . '
						AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ' . $strSubtaskScheduledEndCondition . ' 
						AND mr.deleted_by IS NULL ';

		if( true == \valArr( $arrmixMaintenanceFilterValues ) ) {
			if( true == $boolIsForVendors ) {
				$strSql .= ( true == \valArr( $arrmixMaintenanceFilterValues['ap_payees'] ) ? ' AND mr.ap_payee_id IN ( ' . implode( ',', $arrmixMaintenanceFilterValues['ap_payees'] ) . ' ) AND ' : ' AND mr.ap_payee_id IS NOT NULL AND ' ) . '
						ap.ap_payee_status_type_id = ' . \CApPayeeStatusType::ACTIVE . '
						ORDER BY company_name' . $strOrderBy;
			} else {
				$strSql .= ( true == \valArr( $arrmixMaintenanceFilterValues['company_employees'] ) ? ' AND mr.company_employee_id IN ( ' . implode( ',', $arrmixMaintenanceFilterValues['company_employees'] ) . ' ) ' : ' AND mr.company_employee_id IS NOT NULL' ) . '
						ORDER BY full_name' . $strOrderBy;
			}

			$strSql .= ',mr.id';
		} else {
			$strSql .= ' ORDER BY mr.id';
		}

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchBulkUpdateMaintenanceRequestDetailsByMaintenanceRequestIdsByCid( $arrintMaintenanceRequestIds, $intCid, $objDatabase, $boolIsFetchClosedWorkOrders = false ) {

		if( false == \valArr( array_filter( $arrintMaintenanceRequestIds ) ) ) {
			return NULL;
		}

		if( 'undefined' == $arrintMaintenanceRequestIds[0] ) {
			return NULL;
		}

		if( false == $boolIsFetchClosedWorkOrders ) {
			$strSqlCondition = ' AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) ';
		}

		$strSql = 'SELECT
						mr.id,
						mr.company_employee_id,
						mr.property_id,
						mr.due_date,
						mr.ap_payee_id,
						mr.lease_id,
						mr.customer_id,
						mr.unit_space_id,
						mp.name AS problem,
						pu.unit_number,
						p.property_name,
						mrd.requested_datetime,
						mrd.scheduled_start_datetime AS scheduled_start_date,
						mrd.scheduled_end_datetime AS scheduled_end_date,
						mrd.unit_number AS unit,
						mrd.actual_start_datetime,
						mrd.problem_description,
						mr.parent_maintenance_request_id,
						mr.maintenance_request_type_id,
						cev.start_datetime AS calendar_start_datetime,
						cev.end_datetime AS calendar_end_datetime,
						tz.time_zone_name,
						CASE
							WHEN mr.parent_maintenance_request_id IS NULL THEN
								1
							WHEN mr.parent_maintenance_request_id IS NOT NULL THEN
								0
							END AS is_parent_maintenance_request
					FROM
						maintenance_requests mr
						LEFT JOIN property_units pu ON ( mr.property_unit_id = pu.id AND mr.cid = pu.cid )
						LEFT JOIN maintenance_problems mp ON ( mr.maintenance_problem_id = mp.id AND mr.cid = mp.cid )
						JOIN maintenance_request_details mrd ON ( mrd.maintenance_request_id = mr.id AND mrd.cid = mr.cid )
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
						JOIN properties p ON ( p.cid = mr.cid AND p.id = mr.property_id)
						JOIN calendar_event_types cet ON ( cet.cid = mr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
						LEFT JOIN calendar_events cev ON ( cev.cid = mr.cid AND cev.reference_id = mr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
						JOIN time_zones tz ON ( tz.id = p.time_zone_id )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )
						' . $strSqlCondition . '
						AND mr.deleted_by IS NULL
					ORDER BY
						mr.id DESC ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByChildMaintenanceGroupIdByCid( $intMaintenanceGroupId, $intCid, $objDatabase, $intMaintenanceRequestId = NULL ) {

		if( false == \valId( $intMaintenanceGroupId ) ) {
			return [];
		}

		$strSql = ' SELECT
						mr.id,
						( ce.name_first || \' \' || ce.name_last ) AS company_employee_name,
						util_get_translated( \'name\', ms.name, ms.details ) AS maintenance_status_name,
						ms.maintenance_status_type_id,
						mrd.actual_start_datetime,
						mr.created_on,
						COALESCE( util_get_translated( \'unit_number\', pu.unit_number, pu.details ), mrd.unit_number ) AS unit_number,
						tz.time_zone_name,
						mrd.scheduled_end_datetime,
						mrd.scheduled_start_datetime,
						pb.building_name,
						mrd.completed_datetime,
						to_char( mr.due_date, \'mm/dd/yyyy HH:MI AM TZ\' ) as due_date,
						mr.maintenance_request_type_id,
						mr.property_id,
						mr.company_employee_id,
						cev.start_datetime AS calendar_start_datetime,
						cev.end_datetime AS calendar_end_datetime,
						mrt.name as maintenance_request_type
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mrd.cid = mr.cid AND mrd.maintenance_request_id = mr.id )
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
						JOIN properties p ON ( p.cid = mr.cid AND p.id = mr.property_id )
						LEFT JOIN property_buildings pb ON ( pb.cid = mr.cid AND pb.id = mr.property_building_id )
						LEFT JOIN company_employees ce ON ( ce.cid = mr.cid AND ce.id = mr.company_employee_id )
						JOIN calendar_event_types cet ON ( cet.cid = mr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
						LEFT JOIN calendar_events cev ON ( cev.cid = mr.cid AND cev.reference_id = mr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
						LEFT JOIN time_zones tz ON ( tz.id = p.time_zone_id )
						LEFT JOIN maintenance_request_types mrt ON mrt.id = mr.maintenance_request_type_id
						LEFT JOIN property_units pu ON ( pu.cid = mr.cid AND pu.id = mr.property_unit_id AND pu.property_id = mr.property_id AND pu.deleted_on IS NULL )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.maintenance_group_id = ' . ( int ) $intMaintenanceGroupId . '
						AND mr.deleted_on IS NULL';

		if( false == is_null( $intMaintenanceRequestId ) ) {
			$strSql .= ' AND mr.id = ' . ( int ) $intMaintenanceRequestId;
		}

		$strSql .= ' ORDER BY
					pb.building_name,mrd.unit_number ';
		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMobileMaintenanceRequestsByChildMaintenanceGroupIdByCid( $intMaintenanceGroupId, $intCid, $objDatabase ) {

		$strSql = '	SELECT
						mr.id,
						mst.name AS maintenance_status_type_name,
						ms.maintenance_status_type_id,
						pb.building_name,
						mrd.unit_number,
						mr.maintenance_request_type_id,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
						mprob.name AS maintenance_problem_name,
						mp.maintenance_priority_type_id,
						mpt.name AS maintenance_priority_name,
						mrd.actual_start_datetime,
						mrd.created_on,
						mrd.completed_datetime
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mrd.cid = mr.cid AND mrd.maintenance_request_id = mr.id )
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
						JOIN maintenance_status_types mst ON ( mst.id = ms.maintenance_status_type_id )
						JOIN maintenance_priorities mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_priority_id  )
						JOIN maintenance_priority_types mpt ON ( mpt.id = mp.maintenance_priority_type_id )
						LEFT JOIN property_buildings pb ON ( pb.cid = mr.cid AND pb.id = mr.property_building_id )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
						LEFT JOIN maintenance_problems mprob ON ( mprob.cid = mr.cid AND mprob.id = mr.maintenance_problem_id )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.maintenance_group_id = ' . ( int ) $intMaintenanceGroupId . '
						AND mr.deleted_on IS NULL
					ORDER BY
						pb.building_name,mrd.unit_number ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByPropertyUnitIdByPropertyIdByCid( $intPropertyUnitId, $intPropertyId, $intCid, $intMaintenanceRequestId, $objDatabase, $boolIsSortByPriority = false ) {

		if( false == \valId( $intPropertyUnitId ) ) {
			return NULL;
		}

		$arrstrProductName = \CPsProduct::createService()->getProductNames();

		$strOrderBy = ' vmr.id DESC';
		if( true == $boolIsSortByPriority ) {
			$strOrderBy = ' mp.maintenance_priority_type_id DESC NULLS LAST,
						vmr.maintenance_status_id ASC,
						vmr.scheduled_start_datetime ASC NULLS LAST,
						vmr.requested_datetime ASC NULLS LAST,
						vmr.id DESC';
		}

		$strSql = ' SELECT
						vmr.id,
						vmr.property_id,
						vmr.customer_id,
						vmr.scheduled_start_datetime,
						vmr.scheduled_end_datetime,
						vmr.printed_on AS printed_on,
						vmr.ps_product_id,
						vmr.due_date,
						vmr.created_on,
						vmr.actual_start_datetime,
						util_get_translated( \'name\', mrt.name, mrt.details ) AS maintenance_request_type_name,
						CASE WHEN ml.is_system = 1 THEN NULL WHEN puml.name IS NOT NULL THEN puml.name ELSE ml.name END AS maintenance_location_name,
						mprob.name AS maintenance_problem_name,
						mpt.name AS maintenance_priority_type_name,
						util_get_translated( \'name\', mp.name, mp.details ) AS maintenance_priority_name,
						util_get_translated( \'name\', ms.name, ms.details ) AS maintenance_status_name,
						( ce.name_first || \' \' || ce.name_last ) AS assigned_to,
						p.property_name,
						mp.maintenance_priority_type_id,
						ms.maintenance_status_type_id,
						vmr.maintenance_request_type_id,
						COALESCE(us.unit_number_cache, pu.unit_number, cl.unit_number_cache,vmr.unit_number) AS unit_number_cache,
						CASE
					         WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
					        	\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
					         WHEN vmr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
					        	\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
					         WHEN vmr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
					        	\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
					        WHEN vmr.ps_product_id = ' . \CPsProduct::INSPECTION_MANAGER . ' THEN
					        	\'' . $arrstrProductName[\CPsProduct::INSPECTION_MANAGER] . '\'
					         WHEN vmr.ps_product_id = ' . \CPsProduct::FACEBOOK_INTEGRATION . ' THEN
					        	\'' . $arrstrProductName[\CPsProduct::FACEBOOK_INTEGRATION] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA_FACILITIES_APP . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_FACILITIES_APP] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATAMATION] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::JOB_COSTING . ' THEN
								\'' . $arrstrProductName[\CPsProduct::JOB_COSTING] . '\'
						END AS origin,
						vmr.maintenance_request_type_id,
						cev.start_datetime AS calendar_start_datetime,
						cev.end_datetime AS calendar_end_datetime,
						vmr.company_employee_id
					FROM
						view_maintenance_requests AS vmr
						JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
						JOIN maintenance_statuses ms ON ( ms.cid = vmr.cid AND ms.id = vmr.maintenance_status_id )
						JOIN maintenance_priorities mp ON ( mp.cid = vmr.cid AND mp.id = vmr.maintenance_priority_id )
						JOIN maintenance_priority_types mpt ON ( mpt.id = mp.maintenance_priority_type_id )
						JOIN properties p ON ( vmr.property_id = p.id AND vmr.cid = p.cid)
						LEFT JOIN cached_leases cl ON ( cl.cid = vmr.cid AND cl.id = vmr.lease_id AND cl.property_id = vmr.property_id )
						LEFT JOIN maintenance_problems mprob ON ( mprob.cid = vmr.cid AND mprob.id = vmr.maintenance_problem_id )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
						LEFT JOIN company_employees ce ON ( vmr.cid = ce.cid AND vmr.company_employee_id = ce.id )
						JOIN calendar_event_types cet ON ( cet.cid = vmr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
						LEFT JOIN calendar_events cev ON ( cev.cid = vmr.cid AND cev.reference_id = vmr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
						LEFT JOIN property_unit_maintenance_locations puml ON (vmr.cid = puml.cid AND vmr.property_unit_maintenance_location_id = puml.id)
						LEFT JOIN unit_spaces us ON ( vmr.cid = us.cid AND vmr.unit_space_id = us.id)
						LEFT JOIN property_units pu ON ( pu.cid = vmr.cid AND pu.id = vmr.property_unit_id AND pu.property_id = vmr.property_id AND vmr.unit_space_id IS NULL AND pu.deleted_on IS NULL )
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.property_unit_id = ' . ( int ) $intPropertyUnitId . '
						AND vmr.deleted_on IS NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' )
						AND vmr.id != ' . ( int ) $intMaintenanceRequestId . '
					ORDER BY ' . $strOrderBy;

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchPaginatedApPayeeMaintenanceRequestsByMaintenanceFilter( $intPageNo, $intPageSize, $objMaintenanceFilter, $intApPayeeId, $intCid, $objDatabase, $arrintPmEnabledPropertyIds = [] ) {

		$arrintMaintenanceRequestTypeIds = [ \CMaintenanceRequestType::MAKE_READY, \CMaintenanceRequestType::SERVICE_REQUEST, \CMaintenanceRequestType::RECURRING ];
		$arrstrProductName = \CPsProduct::createService()->getProductNames();
		$strSql = '';

		if( false == is_null( $objMaintenanceFilter->getOrderByField() ) && 0 < strlen( $objMaintenanceFilter->getOrderByField() ) ) {
			$strOrderByField 		= $objMaintenanceFilter->getOrderByField();
			$strOrderBy				= NULL;

			if( 'default' == $strOrderByField ) {
				$strOrderBy .= ' ORDER BY mp.maintenance_priority_type_id DESC NULLS LAST, vmr.scheduled_start_datetime ASC NULLS LAST, vmr.requested_datetime ASC NULLS LAST, vmr.id DESC';
			} elseif( 'reference' == $strOrderByField ) {
				if( 0 == $objMaintenanceFilter->getOrderByType() ) {
					$strOrderBy .= ' ORDER BY vmr.id DESC';
				} else {
					$strOrderBy .= ' ORDER BY vmr.id ASC';
				}
			} elseif( 'type' == $strOrderByField ) {
				if( 0 == $objMaintenanceFilter->getOrderByType() ) {
					$strOrderBy .= ' ORDER BY mrt.name DESC';
				} else {
					$strOrderBy .= ' ORDER BY mrt.name ASC';
				}
			} elseif( 'request' == $strOrderByField ) {
				if( 0 == $objMaintenanceFilter->getOrderByType() ) {
					$strOrderBy .= ' ORDER BY mprob.name DESC';
				} else {
					$strOrderBy .= ' ORDER BY mprob.name ASC';
				}
			} elseif( 'origin' == $strOrderByField ) {
				if( 0 == $objMaintenanceFilter->getOrderByType() ) {
					$strOrderBy .= ' ORDER BY origin DESC';
				} else {
					$strOrderBy .= ' ORDER BY origin  ASC';
				}
			} elseif( 'assigned_to' == $strOrderByField ) {
				if( 0 == $objMaintenanceFilter->getOrderByType() ) {
					$strOrderBy .= ' ORDER BY ce.name_first DESC';
				} else {
					$strOrderBy .= ' ORDER BY ce.name_first ASC';
				}
			} elseif( 'status' == $strOrderByField ) {
				if( 0 == $objMaintenanceFilter->getOrderByType() ) {
					$strOrderBy .= ' ORDER BY ms.name DESC';
				} else {
					$strOrderBy .= ' ORDER BY ms.name ASC';
				}
			} elseif( 'priority' == $strOrderByField ) {
				if( 0 == $objMaintenanceFilter->getOrderByType() ) {
					$strOrderBy .= ' ORDER BY mp.name DESC';
				} else {
					$strOrderBy .= ' ORDER BY mp.name ASC';
				}
			} elseif( 'due_date' == $strOrderByField ) {
				if( 0 == $objMaintenanceFilter->getOrderByType() ) {
					$strOrderBy .= ' ORDER BY vmr.due_date DESC';
				} else {
					$strOrderBy .= ' ORDER BY vmr.due_date ASC';
				}
			} elseif( 'scheduled_date' == $strOrderByField ) {
				if( 0 == $objMaintenanceFilter->getOrderByType() ) {
					$strOrderBy .= ' ORDER BY scheduled_date DESC';
				} else {
					$strOrderBy .= ' ORDER BY scheduled_date ASC';
				}
			}
		}

		$intOffset	= ( 0 < $intPageNo ) ? $intPageSize * ( $intPageNo - 1 ) : 0;

		$intLimit	= $intPageSize;

		$strSql .= 'SELECT
						vmr.id,
						mpt.name AS maintenance_priority_type_name,
						vmr.property_id,
						COALESCE( CASE WHEN us.building_name IS NOT NULL 
                                THEN us.building_name || \' - \' || us.unit_number_cache 
                                      ELSE us.unit_number_cache END ,
                                      pu.unit_number, vmr.unit_number
                            ) AS unit_number_cache,
						util_get_translated( \'name\', mrt.name, mrt.details ) AS maintenance_request_type_name,
						CASE
							 WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
							 WHEN vmr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
								\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
							 WHEN vmr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
							 WHEN vmr.ps_product_id = ' . \CPsProduct::INSPECTION_MANAGER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::INSPECTION_MANAGER] . '\'
							 WHEN vmr.ps_product_id = ' . \CPsProduct::FACEBOOK_INTEGRATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::FACEBOOK_INTEGRATION] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA_FACILITIES_APP . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_FACILITIES_APP] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATAMATION] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::JOB_COSTING . ' THEN
								\'' . $arrstrProductName[\CPsProduct::JOB_COSTING] . '\'
						END AS origin,
						CASE WHEN ml.is_system = 1 THEN NULL
							WHEN puml.name IS NOT NULL THEN util_get_translated( \'name\', puml.name, puml.details )
							ELSE util_get_translated( \'name\', ml.name, ml.details )
						END AS maintenance_location_name,
						util_get_translated( \'name\', mprob.name, mprob.details ) AS maintenance_problem_name,
						( ce.name_first || \' \' || ce.name_last ) AS assigned_to,
						util_get_translated( \'name\', ms.name, ms.details ) AS maintenance_status_name,
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						vmr.scheduled_start_datetime,
						vmr.scheduled_end_datetime,
						vmr.ps_product_id,
						util_get_translated( \'name\', mp.name, mp.details ) AS maintenance_priority_name,
						CASE
						WHEN ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
						THEN abs( ( ( DATE_PART( \'day\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ) * 24
									+ DATE_PART( \'hour\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ) ) * 60
									+ DATE_PART( \'minute\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ) ) * 60
									+ DATE_PART( \'second\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ))
						WHEN ms.maintenance_status_type_id IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
						THEN abs( ( ( DATE_PART( \'day\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) * 24
									+ DATE_PART( \'hour\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) ) * 60
									+ DATE_PART( \'minute\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) ) * 60
									+ DATE_PART( \'second\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) )
						END AS time_open,
						vmr.remote_primary_key,
						i.id AS inspection_id,
						vmr.due_date,
						vmr.printed_on,
						vmr.created_on,
						vmr.completed_datetime,
						vmr.actual_start_datetime,
						vmr.parent_maintenance_request_id,
						vmr.maintenance_request_type_id,
						ms.maintenance_status_type_id,
						mp.maintenance_priority_type_id,
						vmr.maintenance_request_type_id,
						vmr.company_employee_id,
						cev.start_datetime AS calendar_start_datetime,
						cev.end_datetime AS calendar_end_datetime,
						tz.time_zone_name,
						CASE';

		if( true == \valArr( $arrintPmEnabledPropertyIds ) ) {
			$strSql .= '    WHEN vmr.property_id IN ( ' . implode( ',', $arrintPmEnabledPropertyIds ) . ' ) AND vmr.maintenance_request_type_id <> ' . \CMaintenanceRequestType::MAKE_READY . '
							THEN cev.end_datetime ';
		}

		$strSql .= '        WHEN vmr.scheduled_start_datetime IS NOT NULL AND vmr.scheduled_end_datetime IS NOT NULL THEN vmr.scheduled_start_datetime  
							WHEN vmr.scheduled_start_datetime IS NOT NULL AND vmr.scheduled_end_datetime IS NULL THEN vmr.scheduled_start_datetime
							WHEN vmr.scheduled_start_datetime IS NULL AND vmr.scheduled_end_datetime IS NOT NULL THEN vmr.scheduled_end_datetime
							ELSE NULL
						END as scheduled_date
		 			FROM
						view_maintenance_requests AS vmr
						JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
						JOIN properties cp ON (vmr.property_id = cp.id AND vmr.cid = cp.cid AND cp.is_disabled = 0)
						JOIN maintenance_statuses ms ON ( vmr.cid = ms.cid AND vmr.maintenance_status_id = ms.id )
						JOIN maintenance_priorities mp ON (vmr.cid = mp.cid AND vmr.maintenance_priority_id = mp.id )
						JOIN maintenance_priority_types mpt ON ( mpt.id = mp.maintenance_priority_type_id )
						LEFT JOIN inspections i ON ( i.cid = vmr.cid AND vmr.property_id = i.property_id AND vmr.id = i.maintenance_request_id  )
						LEFT JOIN unit_spaces us ON ( us.cid = vmr.cid AND us.id = vmr.unit_space_id AND us.property_id = vmr.property_id )
						LEFT JOIN maintenance_problems mprob ON ( vmr.cid = mprob.cid AND vmr.maintenance_problem_id = mprob.id AND mprob.maintenance_problem_type_id IN ( ' . \CMaintenanceProblemType::MAINTENANCE_PROBLEM . ' ) )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
						LEFT JOIN company_employees ce ON ( vmr.cid = ce.cid AND vmr.company_employee_id = ce.id )
						JOIN calendar_event_types cet ON ( cet.cid = vmr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
						LEFT JOIN calendar_events cev ON ( cev.cid = vmr.cid AND cev.reference_id = vmr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
						JOIN time_zones AS tz ON ( tz.id = cp.time_zone_id )
						LEFT JOIN property_unit_maintenance_locations puml ON (vmr.cid = puml.cid AND vmr.property_unit_maintenance_location_id = puml.id)
						LEFT JOIN property_units pu ON ( pu.cid = vmr.cid AND pu.id = vmr.property_unit_id AND pu.property_id = vmr.property_id AND vmr.unit_space_id IS NULL AND pu.deleted_on IS NULL)
					WHERE
						vmr.cid = ' . ( int ) $intCid;

		$strConditionalSql = '';
		$strConditionalSql .= ' AND vmr.ap_payee_id = ' . ( int ) $intApPayeeId . '
									AND vmr.deleted_by IS NULL
									AND mrt.id IN ( ' . implode( ' , ', $arrintMaintenanceRequestTypeIds ) . ' )';

		if( true == \valId( $objMaintenanceFilter->getMaintenanceRequestId() ) ) {
			$strConditionalSql .= ' AND CAST(vmr.id AS TEXT) LIKE \'%' . ( int ) $objMaintenanceFilter->getMaintenanceRequestId() . '%\'';
		}

		if( false == is_null( $objMaintenanceFilter->getOrderByField() ) ) {
			$strConditionalSql .= $strOrderBy;
		} else {
			$strConditionalSql .= ' ORDER BY vmr.id DESC';
		}

		$strConditionalSql	.= ' OFFSET ' . ( int ) $intOffset . ' LIMIT ' . ( int ) $intLimit;

		$strSql = $strSql . ' ' . $strConditionalSql;

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMakeReadiesByMakeReadyBoardSearchFilterByCid( $arrmixMakeReadyFilterValues, $objMaintenanceBoard, $intOffset = 0, $intLimit = 50, $strSortBy, $intCid, $objDatabase, $arrintPropertyIds = [], $boolIsCompletedUntilMoveIn = false, $boolShowDisabledData = false, $boolIsSelectAllMakeReadyWorkOrder = false ) {

		$strSqlJoinBoardProblem = '';
		$strSqlConditionalJoin = '';
		$strSqlWhereStatus = '';
		$boolIsSubTaskScheduledEndSet = false;
		$strSqlSelectIncompleteSubTasks = '';
		$strSqlSelectApproveTasks = '';
		$strSqlWhereOuterQuery = '';
		$strSqlSelectInnerQuery = '';
		$strSqlSelectOuterQuery = '';

		if( true == $arrmixMakeReadyFilterValues['is_single_make_ready_work_order'] ) {
			$intOffset = 0;
		}

		if( 'days_left' == explode( ' ', $strSortBy )[0] ) {
			$strSqlSelectIncompleteSubTasks = 'array_agg ( sub_tasks_counts ) AS incomplete_sub_tasks,';
			$strSqlSelectApproveTasks = ',
                       CASE
                      WHEN 1 <= ANY ( bp.incomplete_sub_tasks ) OR bp.incomplete_sub_tasks IS NULL THEN 0
                      ELSE 1
                    END AS Approve';
			$strSortBy = 'Approve DESC,' . $strSortBy;
		}

		if( true == \valId( $arrmixMakeReadyFilterValues['filtered_property_id'] ) ) {
			$arrintPropertyIds = [ $arrmixMakeReadyFilterValues['filtered_property_id'] ];
		}

		if( false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}

		if( ( true == isset( $arrmixMakeReadyFilterValues['subtask_date']['min-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['subtask_date']['min-date'] ) ) || ( true == isset( $arrmixMakeReadyFilterValues['subtask_date']['max-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['subtask_date']['max-date'] ) ) ) {
			$boolIsSubTaskScheduledEndSet = true;
		}

		if( true == \valObj( $objMaintenanceBoard, 'CMaintenanceBoard' ) ) {
			if( false == $objMaintenanceBoard->getGroupByProblems() ) {
				$strSqlJoinBoardProblem = ' LEFT JOIN maintenance_problems mp ON ( mp.cid = vmr.cid AND mp.id = vmr.maintenance_problem_id )
											LEFT JOIN maintenance_board_problems mbp ON ( mp.cid = mbp.cid AND mp.maintenance_problem_id = mbp.maintenance_problem_id AND mbp.maintenance_board_id = ' . $objMaintenanceBoard->getId() . ' )
											LEFT JOIN property_preferences pp ON ( pp.cid = vmr.cid AND pp.property_id = vmr.property_id AND pp.key = \'PROPERTY_MAINTENANCE_BOARD_ID\' AND mbp.id = ( pp.value )::INTEGER )';
			} else {
				$strSqlJoinBoardProblem = ' LEFT JOIN maintenance_board_problems mbp ON ( vmr.cid = mbp.cid AND vmr.maintenance_problem_id = mbp.maintenance_problem_id AND mbp.maintenance_board_id = ' . $objMaintenanceBoard->getId() . ' )
											LEFT JOIN property_preferences pp ON ( pp.cid = vmr.cid AND pp.property_id = vmr.property_id AND pp.key = \'PROPERTY_MAINTENANCE_BOARD_ID\' AND mbp.id = ( pp.value )::INTEGER )';
			}

			$strSqlSelectBoardProblem = ' CASE WHEN mbp.maintenance_problem_id IS NULL THEN \'0\' ELSE mbp.maintenance_problem_id END AS maintenance_problem_id,';
			$strSqlGroupByBoardProblem = ' mbp.maintenance_problem_id, ';
		} else {
			$strSqlSelectBoardProblem = ' 0 AS maintenance_problem_id,';
			$strSqlGroupByBoardProblem = ' maintenance_problem_id, ';
		}

		if( true == isset( $arrmixMakeReadyFilterValues['ap_payees'] ) && true == \valArr( $arrmixMakeReadyFilterValues['ap_payees'] ) ) {
			$strSqlSelectBoardProblem .= ' SUM ( CASE WHEN vmr.ap_payee_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['ap_payees'] ) . ' ) THEN 1 ELSE 0 END ) AS is_vendor_assign,';
		} else {
			$strSqlSelectBoardProblem .= ' 0 AS is_vendor_assign,';
		}

		if( true == $boolIsSubTaskScheduledEndSet && true == isset( $arrmixMakeReadyFilterValues['subtask_date']['min-date'] ) && true == isset( $arrmixMakeReadyFilterValues['subtask_date']['max-date'] ) ) {
			$strSqlSelectBoardProblem .= ' SUM ( CASE WHEN date( vmr.scheduled_end_datetime ) BETWEEN \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['subtask_date']['min-date'] ) ) ) . '\' AND \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['subtask_date']['max-date'] ) ) ) . '\' THEN 1 ELSE 0 END ) AS is_subtask_scheduled_end,';
		} else {
			$strSqlSelectBoardProblem .= ' 0 AS is_subtask_scheduled_end,';
		}

		if( true == isset( $arrmixMakeReadyFilterValues['company_employees'] ) && true == \valArr( $arrmixMakeReadyFilterValues['company_employees'] ) ) {
			$strSqlSelectBoardProblem .= ' SUM( CASE WHEN vmr.company_employee_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['company_employees'] ) . ' ) THEN 1 ELSE 0 END ) AS is_company_employee_assign,';
		} else {
			$strSqlSelectBoardProblem .= ' 0 AS is_company_employee_assign,';
		}

		if( true == \valArr( $arrmixMakeReadyFilterValues['maintenance_problems'] ) ) {
			$strSqlSelectBoardProblem .= ' SUM( CASE WHEN vmr.maintenance_problem_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['maintenance_problems'] ) . ' ) THEN 1 ELSE 0 END ) AS is_maintenance_problem_assign,';
			$strSqlConditionalJoin .= ' LEFT JOIN ( SELECT
										mr.id,
										mr.cid,
					 					mr1.maintenance_problem_id
									FROM
										maintenance_requests mr
										JOIN maintenance_requests mr1 ON ( mr1.cid = mr.cid AND mr1.parent_maintenance_request_id = mr.id AND mr1.deleted_by IS NULL AND mr1.deleted_on IS NULL )
									WHERE
										mr.cid = ' . ( int ) $intCid . '
										AND mr.deleted_by IS NULL
                                        AND mr.deleted_on IS NULL
										AND mr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::MAKE_READY . '
									) mr_problems ON ( mr_problems.cid = vmr.cid AND mr_problems.id = vmr.id )';
		} else {
			$strSqlSelectBoardProblem .= ' 0 AS is_maintenance_problem_assign,';
		}

		if( ( true == isset( $arrmixMakeReadyFilterValues['ap_payees'] ) && true == \valArr( $arrmixMakeReadyFilterValues['ap_payees'] ) ) || true == $boolIsSubTaskScheduledEndSet ) {
			$strSqlConditionalJoin .= ' LEFT JOIN view_maintenance_requests mr ON ( mr.cid = vmr.cid AND mr.parent_maintenance_request_id = vmr.id AND mr.deleted_by IS NULL AND mr.deleted_on IS NULL )';
		}

		if( true == isset( $arrmixMakeReadyFilterValues['search_keyword'] ) && true == \valStr( $arrmixMakeReadyFilterValues['search_keyword'] ) ) {
			$strSqlConditionalJoin .= ' LEFT JOIN customers c ON (vmr.cid = c.cid AND vmr.customer_id = c.id )';
		}
		if( true == $boolIsCompletedUntilMoveIn ) {

			if( true == \valArr( $arrmixMakeReadyFilterValues['maintenance_statuses'] ) ) {
				$strSqlWhereStatus      = ' AND ( vmr.maintenance_status_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['maintenance_statuses'] ) . ' )  OR (  ms.maintenance_status_type_id = ' . ( int ) \CMaintenanceStatusType::COMPLETED . ' AND  us.unit_space_status_type_id IN ( ' . \sqlIntImplode( \CUnitSpaceStatusType::$c_arrintMakeReadyUnitSpaceStatusTypes ) . ' ) ) )';
				$strSqlWhereOuterQuery  = '  ) subquery WHERE make_ready_rank = 1 ';
				$strSqlSelectInnerQuery = ' rank() OVER( PARTITION BY vmr.unit_space_id ORDER BY vmr.actual_start_datetime DESC NULLS LAST ) as make_ready_rank, ms.maintenance_status_type_id, ';
				$strSqlSelectOuterQuery = ' SELECT subquery.* FROM ( ';
			}

		} elseif( true == \valArr( $arrmixMakeReadyFilterValues['maintenance_statuses'] ) ) {
			$strSqlWhereStatus = ' AND vmr.maintenance_status_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['maintenance_statuses'] ) . ' ) ';
		}

		$strSqlMoveInDate = '					
					( SELECT
							to_char ( MIN( l.move_in_date ), \'MM/DD/YY\' )::TEXT
						FROM
							cached_leases l
							JOIN unit_spaces us ON ( us.cid = l.cid AND us.id = l.unit_space_id AND us.deleted_on IS NULL )
							JOIN lease_customers lc ON ( lc.cid = l.cid AND lc.lease_id = l.id )
							JOIN properties p ON ( p.cid = l.cid AND p.id = l.property_id )
							LEFT JOIN property_preferences pp ON ( pp.cid = p.cid AND pp.property_id = p.id AND  pp.key = \'CHANGE_UNIT_STATUS_TO_RENTED\' )
							JOIN applications a ON ( a.cid = l.cid AND a.lease_id = l.id AND a.property_id = l.property_id )
						WHERE
							l.cid = vmr.cid
							AND l.unit_space_id = vmr.unit_space_id
							AND us.unit_space_status_type_id IN ( ' . \CUnitSpaceStatusType::NOTICE_RENTED . ' , ' . \CUnitSpaceStatusType::VACANT_RENTED_NOT_READY . ' , ' . \CUnitSpaceStatusType::VACANT_RENTED_READY . ' )
							AND lc.lease_status_type_id IN ( ' . \CLeaseStatusType::FUTURE . ' , ' . \CLeaseStatusType::APPLICANT . ' )
							AND lc.customer_type_id = ' . ( int ) \CCustomerType::PRIMARY . '
							AND CASE 
								WHEN pp.value = \'' . \CApplicationStageStatus::PROSPECT_STAGE3_PARTIALLY_COMPLETED . '\' THEN ( a.application_stage_id, a.application_status_id ) IN ( ' . \sqlIntMultiImplode( \CApplicationStageStatus::$c_arrintResidentApplicantStatusIds ) . ' )
	                            WHEN pp.value = \'' . \CApplicationStageStatus::PROSPECT_STAGE3_COMPLETED . '\' THEN ( a.application_stage_id, a.application_status_id ) IN ( ' . \sqlIntMultiImplode( \CApplicationStageStatus::$c_arrintCompletedApplicationStatusIds ) . ' )
	                            WHEN pp.value = \'' . \CApplicationStageStatus::PROSPECT_STAGE3_APPROVED . '\' THEN ( a.application_stage_id, a.application_status_id ) IN ( ' . \sqlIntMultiImplode( \CApplicationStageStatus::$c_arrintLockDownApplicationStatusIds ) . ' )
	                            WHEN pp.value = \'' . \CApplicationStageStatus::PROSPECT_STAGE4_APPROVED . '\' THEN ( a.application_stage_id, a.application_status_id ) IN ( ' . \sqlIntMultiImplode( [ \CApplicationStage::LEASE => [ \CApplicationStatus::APPROVED ] ] ) . ' )
                            ELSE true
                            END
					)';

		$strSql = '
				DROP TABLE IF EXISTS load_properties_temp;
				CREATE TEMP TABLE load_properties_temp AS (
					SELECT
						property_id
					FROM
						load_properties ( ARRAY[' . ( int ) $intCid . '], ARRAY[ ' . implode( ',', $arrintPropertyIds ) . ' ] ) lp
					WHERE
						is_disabled = ' . ( ( false == $boolShowDisabledData ) ? 0 : 1 ) . '
				);
				ANALYZE load_properties_temp;
				
				DROP TABLE IF EXISTS temp_maintenance_requests;
				CREATE TEMP TABLE temp_maintenance_requests AS (
					' . $strSqlSelectOuterQuery . '
					SELECT 
					' . $strSqlSelectInnerQuery . '
					CASE
					WHEN NOT EXISTS(
						SELECT mr.id
						FROM maintenance_requests mr
						JOIN load_properties_temp lp ON lp.property_id = mr.property_id
						JOIN maintenance_statuses ms ON ms.cid = mr.cid AND mr.maintenance_status_id = ms.id
						WHERE 
						mr.cid = ' . ( int ) $intCid . '
						AND mr.deleted_by IS NULL
						AND mr.parent_maintenance_request_id = vmr.id
						AND mr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::MAKE_READY . '
					) THEN 0
					WHEN EXISTS( 
						SELECT mr.id
						FROM maintenance_requests mr
						JOIN load_properties_temp lp ON lp.property_id = mr.property_id
						JOIN maintenance_statuses ms ON ms.cid = mr.cid AND mr.maintenance_status_id = ms.id
						WHERE 
						mr.cid = ' . ( int ) $intCid . '
						AND mr.deleted_by IS NULL
						AND mr.parent_maintenance_request_id = vmr.id
						AND mr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::MAKE_READY . '
						AND ms.maintenance_status_type_id NOT IN( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' )) THEN 0
					ELSE 1
					END AS approve,
					DATE(vmr.scheduled_end_datetime) - DATE(now()) AS days_left,
					us.property_name,
					COALESCE ( us.unit_number_cache, util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ), pu.unit_number ) AS unit_number_cache,
					us.unit_space_status_type_id,
					pb.building_name,
					lps.move_out_date,
					' . $strSqlMoveInDate . ' AS move_in_date,
					vmr.*
					FROM view_maintenance_requests vmr
					JOIN load_properties_temp lp ON lp.property_id = vmr.property_id
					JOIN maintenance_statuses ms ON ( ms.cid = vmr.cid AND vmr.maintenance_status_id = ms.id )
					LEFT JOIN unit_spaces us ON ( vmr.cid = us.cid AND vmr.unit_space_id = us.id AND us.deleted_on IS NULL )
					LEFT JOIN property_units pu ON ( pu.cid = vmr.cid AND pu.id = vmr.property_unit_id AND pu.property_id = vmr.property_id AND pu.deleted_on IS NULL )
					LEFT JOIN lease_processes lps ON ( lps.cid = vmr.cid AND lps.lease_id = vmr.lease_id AND lps.customer_id IS NULL )
					LEFT JOIN company_employees ce ON ( ce.cid = vmr.cid AND ce.id = vmr.company_employee_id )
					LEFT JOIN property_buildings pb ON ( pu.cid = pb.cid AND pu.property_building_id = pb.id AND pu.property_id = pb.property_id )
					' . $strSqlConditionalJoin;

		$strSql .= '
					WHERE
					vmr.cid = ' . ( int ) $intCid . '
					AND vmr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::MAKE_READY . '
					AND vmr.unit_space_id IS NOT NULL
					AND vmr.deleted_by IS NULL
					AND vmr.parent_maintenance_request_id IS NULL
					' . ( ( true == isset( $arrmixMakeReadyFilterValues['maintenance_request_id'] ) && true == \valId( $arrmixMakeReadyFilterValues['maintenance_request_id'] ) ) ? 'AND vmr.id = ' . $arrmixMakeReadyFilterValues['maintenance_request_id'] : '' );

		if( false == isset( $arrmixMakeReadyFilterValues['maintenance_request_id'] ) || false == \valId( $arrmixMakeReadyFilterValues['maintenance_request_id'] ) ) {

			if( true == isset( $arrmixMakeReadyFilterValues['search_keyword'] ) && true == \valStr( $arrmixMakeReadyFilterValues['search_keyword'] ) ) {

				$arrmixSearchKeywords = ( true == \valArr( preg_split( '/[\s,-]+/', trim( $arrmixMakeReadyFilterValues['search_keyword'] ) ) ) ) ? preg_split( '/[\s,-]+/', trim( $arrmixMakeReadyFilterValues['search_keyword'] ) ) : [];

				$strSql .= ' AND ( ';

				if( 1 == count( $arrmixSearchKeywords ) ) {
					$strSql .= ' vmr.id = ' . ( int ) $arrmixMakeReadyFilterValues['search_keyword'] . '
								 OR ( (
										us.unit_number ILIKE E\'%' . addslashes( $arrmixMakeReadyFilterValues['search_keyword'] ) . '%\'
										OR vmr.customer_name_first ILIKE E\'%' . addslashes( $arrmixMakeReadyFilterValues['search_keyword'] ) . '%\'
										OR vmr.customer_name_last ILIKE E\'%' . addslashes( $arrmixMakeReadyFilterValues['search_keyword'] ) . '%\'
										OR c.name_first ILIKE E\'%' . addslashes( $arrmixMakeReadyFilterValues['search_keyword'] ) . '%\'
										OR c.name_last ILIKE E\'%' . addslashes( $arrmixMakeReadyFilterValues['search_keyword'] ) . '%\'
									  ) ';
				} elseif( 1 < count( $arrmixSearchKeywords ) ) {
					$strSql .= ' ( (
									us.unit_number_cache ILIKE E\'%' . addslashes( implode( '-', $arrmixSearchKeywords ) ) . '%\'
									OR ( vmr.customer_name_first ILIKE E\'%' . addslashes( $arrmixSearchKeywords[0] ) . '%\' OR vmr.customer_name_last ILIKE E\'%' . addslashes( $arrmixSearchKeywords[1] ) . '%\' )
									OR ( vmr.customer_name_first ILIKE E\'%' . addslashes( $arrmixSearchKeywords[1] ) . '%\' OR vmr.customer_name_last ILIKE E\'%' . addslashes( $arrmixSearchKeywords[0] ) . '%\' )
									OR ( c.name_first ILIKE E\'%' . addslashes( $arrmixSearchKeywords[1] ) . '%\' OR c.name_last ILIKE E\'%' . addslashes( $arrmixSearchKeywords[0] ) . '%\' )
									OR ( c.name_first ILIKE E\'%' . addslashes( $arrmixSearchKeywords[0] ) . '%\' OR c.name_last ILIKE E\'%' . addslashes( $arrmixSearchKeywords[1] ) . '%\' )
									) ';
				}
			}

			$strSql .= $strSqlWhereStatus;

			if( true == isset( $arrmixMakeReadyFilterValues['maintenance_priorities'] ) && true == \valArr( $arrmixMakeReadyFilterValues['maintenance_priorities'] ) ) {
				$strSql .= ' AND vmr.maintenance_priority_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['maintenance_priorities'] ) . ' ) ';
			}

			if( true == isset( $arrmixMakeReadyFilterValues['templates'] ) && true == \valArr( $arrmixMakeReadyFilterValues['templates'] ) ) {
				$strSql .= ' AND vmr.maintenance_template_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['templates'] ) . ' ) ';
			}
			if( true == isset( $arrmixMakeReadyFilterValues['company_employees'] ) && true == \valArr( $arrmixMakeReadyFilterValues['company_employees'] ) ) {
				// 1 == No user assigned to make ready.

				if( 1 == count( $arrmixMakeReadyFilterValues['company_employees'] ) && true == in_array( '0', $arrmixMakeReadyFilterValues['company_employees'] ) ) {
					$strSql .= ' 
						AND vmr.company_employee_id IS NULL 
						OR EXISTS ( 
							SELECT mr.id
							FROM maintenance_requests mr
							WHERE
							mr.cid = vmr.cid
							AND vmr.id = mr.parent_maintenance_request_id
							AND mr.company_employee_id IS NULL 
						) 
					';
				} elseif( 1 < count( $arrmixMakeReadyFilterValues['company_employees'] ) && true == in_array( '0', $arrmixMakeReadyFilterValues['company_employees'] ) ) {
					$strSql .= '
						AND ( vmr.company_employee_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['company_employees'] ) . ' ) 
								OR vmr.company_employee_id IS NULL
								OR EXISTS ( 
									SELECT mr.id
									FROM maintenance_requests mr
									WHERE
									mr.cid = vmr.cid
									AND mr.parent_maintenance_request_id = vmr.id
									AND ( mr.company_employee_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['company_employees'] ) . ' ) OR mr.company_employee_id IS NULL )
								)
							)
					';
				} else {
					$strSql .= ' 
						AND ( vmr.company_employee_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['company_employees'] ) . ' )
								OR EXISTS (
									SELECT mr.id
									FROM maintenance_requests mr
									WHERE
									mr.cid = vmr.cid
									AND mr.parent_maintenance_request_id = vmr.id
									AND mr.company_employee_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['company_employees'] ) . ' ) 
								)
							)
					';
				}
			}

			if( true == isset( $arrmixMakeReadyFilterValues['ap_payees'] ) && true == \valArr( $arrmixMakeReadyFilterValues['ap_payees'] ) ) {
				$strSql .= ' AND ( vmr.ap_payee_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['ap_payees'] ) . ' )
									OR mr.ap_payee_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['ap_payees'] ) . ' )
								 ) ';
			}

			if( true == isset( $arrmixMakeReadyFilterValues['unit_statuses'] ) && true == \valArr( $arrmixMakeReadyFilterValues['unit_statuses'] ) ) {
				$strSql .= ' AND us.unit_space_status_type_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['unit_statuses'] ) . ' ) ';
			}

			if( true == isset( $arrmixMakeReadyFilterValues['property_buildings'] ) && true == \valArr( $arrmixMakeReadyFilterValues['property_buildings'] ) ) {
				$strSql .= ' AND pb.id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['property_buildings'] ) . ' ) ';
			}

			if( true == isset( $arrmixMakeReadyFilterValues['property_unit_types'] ) && true == \valArr( $arrmixMakeReadyFilterValues['property_unit_types'] ) ) {
				$strSql .= ' AND us.unit_type_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['property_unit_types'] ) . ' ) ';
			}

			if( true == isset( $arrmixMakeReadyFilterValues['move_out_date'] ) && true == \valArr( $arrmixMakeReadyFilterValues['move_out_date'] ) ) {

				if( true == isset( $arrmixMakeReadyFilterValues['move_out_date']['min-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['move_out_date']['min-date'] ) ) {
					$strSql .= ' AND date( lps.move_out_date ) >= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['move_out_date']['min-date'] ) ) ) . '\'';
				}

				if( true == isset( $arrmixMakeReadyFilterValues['move_out_date']['max-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['move_out_date']['max-date'] ) ) {
					$strSql .= ' AND date( lps.move_out_date ) <= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['move_out_date']['max-date'] ) ) ) . '\'';
				}
			}

			if( true == isset( $arrmixMakeReadyFilterValues['end_date'] ) && true == \valArr( $arrmixMakeReadyFilterValues['end_date'] ) ) {

				if( true == isset( $arrmixMakeReadyFilterValues['end_date']['min-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['end_date']['min-date'] ) ) {
					$strSql .= ' AND date( vmr.scheduled_end_datetime ) >= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['end_date']['min-date'] ) ) ) . '\'';
				}

				if( true == isset( $arrmixMakeReadyFilterValues['end_date']['max-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['end_date']['max-date'] ) ) {
					$strSql .= ' AND date( vmr.scheduled_end_datetime ) <= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['end_date']['max-date'] ) ) ) . '\'';
				}
			}

			// search for the scheduled end date
			if( true == isset( $arrmixMakeReadyFilterValues['subtask_date'] ) && true == \valArr( $arrmixMakeReadyFilterValues['subtask_date'] ) ) {

				if( true == isset( $arrmixMakeReadyFilterValues['subtask_date']['min-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['subtask_date']['min-date'] ) ) {
					$strSql .= ' AND date( mr.scheduled_end_datetime ) >= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['subtask_date']['min-date'] ) ) ) . '\'';
				}

				if( true == isset( $arrmixMakeReadyFilterValues['subtask_date']['max-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['subtask_date']['max-date'] ) ) {
					$strSql .= ' AND date( mr.scheduled_end_datetime ) <= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['subtask_date']['max-date'] ) ) ) . '\'';
				}
			}

			// search for move in dates
			if( ( true == isset( $arrmixMakeReadyFilterValues['move_in_date']['min-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['move_in_date']['min-date'] ) ) || ( true == isset( $arrmixMakeReadyFilterValues['move_in_date']['max-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['move_in_date']['max-date'] ) ) ) {

				if( true == isset( $arrmixMakeReadyFilterValues['move_in_date']['min-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['move_in_date']['min-date'] ) ) {
					$strSql .= ' AND ' . $strSqlMoveInDate . '::DATE >= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['move_in_date']['min-date'] ) ) ) . '\'::DATE';
				}

				if( true == isset( $arrmixMakeReadyFilterValues['move_in_date']['max-date'] ) && true == \valStr( $arrmixMakeReadyFilterValues['move_in_date']['max-date'] ) ) {
					$strSql .= ' AND ' . $strSqlMoveInDate . '::DATE <= \'' . trim( date( 'Y-m-d', strtotime( $arrmixMakeReadyFilterValues['move_in_date']['max-date'] ) ) ) . '\'::DATE';
				}
				$strSortBy .= ', move_in_date DESC NULLS LAST';
			}

			if( true == isset( $arrmixMakeReadyFilterValues['maintenance_problems'] ) && true == \valArr( $arrmixMakeReadyFilterValues['maintenance_problems'] ) ) {
				$strSql .= ' AND mr_problems.maintenance_problem_id IN ( ' . implode( ',', $arrmixMakeReadyFilterValues['maintenance_problems'] ) . ' ) ';
			}

			if( true == isset( $arrmixMakeReadyFilterValues['search_keyword'] ) && true == \valStr( $arrmixMakeReadyFilterValues['search_keyword'] ) ) {
				$strSql .= ' ) )';
			}

		} else {
			if( false == isset( $arrmixMakeReadyFilterValues['search_keyword'] ) || false == \valStr( $arrmixMakeReadyFilterValues['search_keyword'] ) ) {
				$strSql .= $strSqlWhereStatus;
			}
		}

		$strSql .= ' ORDER BY ' . $strSortBy;
		if( true == $boolIsSelectAllMakeReadyWorkOrder ) {
			$strSql .= $strSqlWhereOuterQuery;
		} else {
			$strSql .= $strSqlWhereOuterQuery . ' LIMIT ' . ( int ) $intLimit . ' OFFSET ' . ( int ) $intOffset;
		}

		if( 'unit_number_cache' == explode( ' ', $strSortBy )[0] ) {
			$strOrderDirection = explode( ' ', $strSortBy )[1];
			$strOrderDirection = ( \Psi\CStringService::singleton()->strpos( $strOrderDirection, ',' ) ) ? str_replace( ',', '', $strOrderDirection ) : $strOrderDirection;
			if( 'ASC' == $strOrderDirection ) {
				$strSortBy = 'building_name ' . $strOrderDirection . ' NULLS FIRST, ';
			} else {
				$strSortBy = 'building_name ' . $strOrderDirection . ' NULLS LAST, ';
			}
			$strSortBy .= 'natural_sort( vmr.unit_number_cache ) ' . $strOrderDirection;
		}

		$strSql .= '
				);
				ANALYZE temp_maintenance_requests;
				
				DROP TABLE IF EXISTS board_problems;
				CREATE TEMP TABLE board_problems AS (
					SELECT
						parent_maintenance_request_id,
						cid,
						' . $strSqlSelectIncompleteSubTasks . '
						array_to_string ( array_agg ( maintenance_problem_id ), \',\' ) AS maintenance_board_problem_id,
						array_to_string ( array_agg ( sub_tasks_counts ), \',\' ) AS maintenance_board_problem_count,
						array_to_string ( array_agg ( sub_task_ids ), \',\' ) AS make_ready_sub_task_ids,
						array_to_string ( array_agg ( CASE WHEN max_scheduled_end_datetime IS NULL THEN \'1969-01-01\' ELSE max_scheduled_end_datetime END ), \',\' ) AS sub_task_end_datetime,
						array_to_string ( array_agg ( is_vendor_assign ), \',\' ) AS is_vendor_assign,
						array_to_string ( array_agg ( is_company_employee_assign ), \',\' ) AS is_company_employee_assign,
						array_to_string ( array_agg ( is_maintenance_problem_assign ), \',\' ) AS is_maintenance_problem_assign,
						array_to_string ( array_agg ( is_subtask_scheduled_end ), \',\' ) AS is_subtask_scheduled_end,
						array_to_string ( array_agg ( CASE
								WHEN min_scheduled_end_datetime IS NULL OR max_scheduled_end_datetime IS NULL THEN \'-\'
								WHEN  min_scheduled_end_datetime <>  max_scheduled_end_datetime THEN ( to_char ( min_scheduled_end_datetime , \'MM/DD\' ) || \' - \' || to_char ( max_scheduled_end_datetime, \'MM/DD\' ) )::TEXT
								ELSE to_char ( min_scheduled_end_datetime, \'MM/DD\' )::TEXT
						END ), \',\' ) AS sub_task_scheduled_end_datetime,
						array_to_string( array_agg( vendor_names ), \'~\' ) AS vendor_names,
						array_to_string( array_agg( employee_names ), \'~\' ) AS employee_names
					FROM
						(
							SELECT
								vmr.parent_maintenance_request_id,
								vmr.cid,
								' . $strSqlSelectBoardProblem . '
								COUNT ( CASE WHEN ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) THEN vmr.id ELSE NULL END ) AS sub_tasks_counts,
								array_to_string ( array_agg ( vmr.id ), \':\' ) AS sub_task_ids,
								array_to_string( array_agg( coalesce( concat_ws( \' \', ce.name_first,ce.name_last), \'\' ) ), \':\' ) AS employee_names,
                                array_to_string( array_agg( coalesce( ap.company_name,\'\' ) ), \':\') AS vendor_names,
								MAX( CASE WHEN vmr.scheduled_end_datetime IS NULL THEN NULL ELSE vmr.scheduled_end_datetime END ) AS max_scheduled_end_datetime,
								MIN( CASE WHEN vmr.scheduled_end_datetime IS NULL THEN NULL ELSE vmr.scheduled_end_datetime END ) AS min_scheduled_end_datetime
							FROM
								view_maintenance_requests vmr
								JOIN load_properties_temp lp ON ( lp.property_id = vmr.property_id )
								JOIN maintenance_statuses ms ON ( ms.cid = vmr.cid AND ms.id = vmr.maintenance_status_id )
								LEFT JOIN company_employees ce ON ( ce.cid = vmr.cid AND ce.id = vmr.company_employee_id )
                                LEFT JOIN ap_payees ap ON ( ap.cid = vmr.cid AND ap.id = vmr.ap_payee_id ) 
								' . $strSqlJoinBoardProblem . '
							WHERE
								vmr.cid = ' . ( int ) $intCid . '
								AND vmr.parent_maintenance_request_id IN (
									SELECT id
									FROM temp_maintenance_requests
								)
								AND vmr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::MAKE_READY . '
								AND vmr.deleted_by IS NULL
								' . ( ( true == isset( $arrmixMakeReadyFilterValues['maintenance_request_id'] ) && true == \valId( $arrmixMakeReadyFilterValues['maintenance_request_id'] ) ) ? ' AND vmr.parent_maintenance_request_id = ' . $arrmixMakeReadyFilterValues['maintenance_request_id'] : '' ) . '
							GROUP BY
								' . $strSqlGroupByBoardProblem . '
								vmr.parent_maintenance_request_id,
								vmr.cid
						) sub
					WHERE sub.cid = ' . ( int ) $intCid . '
					GROUP BY
						parent_maintenance_request_id,
						cid
				);
				ANALYZE board_problems;
				
				DROP TABLE IF EXISTS make_ready_inspection;
				CREATE TEMP TABLE make_ready_inspection AS (
					SELECT
						i.property_unit_id,
						i.cid,
						vmr.id AS maintenance_request_id,
						array_to_string ( array_agg ( i.id ), \',\' ) AS inspection_ids,
						array_to_string ( array_agg (
							CASE
								WHEN i.inspected_on IS NULL AND i.reviewed_on IS NULL AND ( i.inspection_due_date IS NULL OR DATE ( i.inspection_due_date ) >= CURRENT_DATE ) AND i.updated_on = i.created_on THEN ' . \CInspection::NOT_STARTED . '
								WHEN i.inspected_on IS NULL AND i.reviewed_on IS NULL AND ( i.inspection_due_date IS NULL OR DATE ( i.inspection_due_date ) >= CURRENT_DATE ) AND i.updated_on <> i.created_on THEN ' . \CInspection::IN_PROGRESS . '
								WHEN i.inspected_on IS NOT NULL AND i.reviewed_on IS NULL THEN ' . \CInspection::UNDER_REVIEW . '
								WHEN i.inspected_on IS NULL AND i.reviewed_on IS NULL AND i.inspection_due_date IS NOT NULL AND DATE ( i.inspection_due_date ) < CURRENT_DATE THEN ' . \CInspection::PAST_DUE . '
								WHEN i.reviewed_on IS NOT NULL THEN ' . \CInspection::COMPLETE . '
							 END
						), \',\' ) AS inspection_status_type_ids
					FROM
						inspections i
						JOIN load_properties_temp lp ON ( lp.property_id = i.property_id )
						JOIN temp_maintenance_requests vmr ON ( i.cid = vmr.cid AND i.property_id = vmr.property_id AND i.property_unit_id = vmr.property_unit_id AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . ' AND vmr.parent_maintenance_request_id IS NULL AND vmr.deleted_by IS NULL AND vmr.unit_space_id IS NOT NULL AND i.lease_id = vmr.lease_id AND i.customer_id = vmr.customer_id )
					WHERE
						i.cid = ' . ( int ) $intCid . '
						AND i.inspection_type_id = ' . ( int ) \CInspectionType::MOVE_OUT . '
						AND i.is_staff_inspection = 1
						AND i.deleted_on IS NULL
					GROUP BY
						i.property_unit_id,
						vmr.id, i.cid
				);
				ANALYZE make_ready_inspection;
				
				SELECT
					vmr.scheduled_end_datetime,
					vmr.id AS id,
					vmr.property_unit_id,
					vmr.lease_id,
					vmr.property_id,
					vmr.unit_number_cache,
					vmr.property_name,
					vmr.customer_id,
					vmr.unit_number AS unit,
					ms.id AS maintenance_status_id,
					ms.maintenance_status_type_id,
					vmr.unit_space_status_type_id,
					util_get_translated( \'name\', usst.name, usst.details ) AS unit_space_status_type_name,
					mri.inspection_ids,
					mri.inspection_status_type_ids,
					DATE ( vmr.scheduled_end_datetime ) - DATE ( now ( ) ) AS days_left,
					lps.move_out_date,
					us.available_on,
					CASE
						WHEN
							( SELECT count ( id ) FROM unit_spaces WHERE cid = vmr.cid AND property_unit_id = vmr.property_unit_id AND deleted_on IS NULL ) > 1
						THEN space_number
						ELSE \'\'
					END AS space_number,
					vmr.move_in_date,
					(
						SELECT
							note
						FROM
							maintenance_request_notes mrn
						WHERE
							mrn.cid = vmr.cid
							AND mrn.maintenance_request_id = vmr.id
						ORDER BY id DESC LIMIT 1
					) AS maintenance_request_note,
					pf.floorplan_name AS property_floorplan_name,
					vmr.building_name,
					ce.name_first,
					ce.name_last,
					ap.company_name AS vendor_name,
					bp.make_ready_sub_task_ids,
					bp.maintenance_board_problem_count,
					bp.sub_task_end_datetime,
					sub_task_scheduled_end_datetime,
					bp.is_maintenance_problem_assign,
					bp.is_vendor_assign,
					bp.is_company_employee_assign AS is_sub_task_company_employee,
					bp.is_subtask_scheduled_end,
					maintenance_board_problem_id,
					bp.vendor_names,
                    bp.employee_names,
                    util_get_translated( \'name\', mrt.name, mrt.details ) AS maintenance_request_type_name
                    ' . $strSqlSelectApproveTasks . '
				FROM
					temp_maintenance_requests vmr
					JOIN maintenance_statuses ms ON ( ms.cid = vmr.cid AND vmr.maintenance_status_id = ms.id )
					JOIN maintenance_status_types mst ON ( ms.maintenance_status_type_id = mst.id )
					JOIN property_preferences pp ON ( pp.cid = vmr.cid AND pp.property_id = vmr.property_id AND pp.key = \'PROPERTY_MAINTENANCE_BOARD_ID\' )
					LEFT JOIN unit_spaces us ON ( vmr.cid = us.cid AND vmr.unit_space_id = us.id AND us.deleted_on IS NULL )
					LEFT JOIN property_units pu ON ( pu.cid = vmr.cid AND pu.id = vmr.property_unit_id AND pu.property_id = vmr.property_id AND pu.deleted_on IS NULL )
					JOIN unit_space_status_types usst ON ( usst.id = us.unit_space_status_type_id )
					LEFT JOIN lease_processes lps ON ( lps.cid = vmr.cid AND lps.lease_id = vmr.lease_id AND lps.customer_id IS NULL )
					LEFT JOIN property_floorplans pf ON ( pf.cid = pu.cid AND pf.id = pu.property_floorplan_id AND pf.property_id = pu.property_id AND pf.deleted_on IS NULL )
					LEFT JOIN company_employees ce ON ( ce.cid = vmr.cid AND ce.id = vmr.company_employee_id )
					LEFT JOIN ap_payees ap ON ( ap.cid = vmr.cid AND ap.id = vmr.ap_payee_id )
					LEFT JOIN board_problems bp ON ( bp.cid = vmr.cid AND bp.parent_maintenance_request_id = vmr.id )
					LEFT JOIN make_ready_inspection mri ON ( mri.cid = vmr.cid AND mri.maintenance_request_id = vmr.id )
					LEFT JOIN maintenance_request_types mrt ON mrt.id = vmr.maintenance_request_type_id
					' . $strSqlConditionalJoin;

		$strSql .= ' ORDER BY ' . $strSortBy;

		$arrmixMakeReadyRequests = \fetchData( $strSql, $objDatabase );

		return \rekeyArray( 'id', $arrmixMakeReadyRequests );
	}

	public function fetchMaintenanceRequestDownloadDetailsByIdsByCid( $arrintMaintenanceRequestIds, $intCid, $objDatabase, $boolIsOrderByParentMaintenanceRequestId ) {

		$arrstrProductName = \CPsProduct::createService()->getProductNames();

		if( true == $boolIsOrderByParentMaintenanceRequestId ) {
			$strOrderBy = ' vmr.parent_maintenance_request_id NULLS FIRST, vmr.id DESC ';
		} else {
			$strOrderBy = ' vmr.id DESC';
		}

		$strSql = ' SELECT
						vmr.id as reference,
						vmr.parent_maintenance_request_id,
		                vmr.property_id,
						vmr.lease_id,
						vmr.remote_primary_key,
						vmr.ps_product_id,
						vmr.customer_name_first,
						vmr.customer_name_last,
						vmr.company_employee_id,
						vmr.scheduled_start_datetime,
						vmr.completed_datetime,
						vmr.problem_description,
						vmr.created_on AS request_created_on,
						vmr.created_by,
						vmr.maintenance_request_type_id,
						cp.property_name,
						ms.name AS maintenance_status_name,
						ms.maintenance_status_type_id,
						mprob.name AS maintenance_problem_name,
						mp.name AS maintenance_priority_name,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
						ml.maintenance_location_type_id,
						ce.name_first AS employee_first_name,
						ce.name_last AS employee_last_name,
						pu.unit_number,
						pb.building_name,
						mrn.note,
						CASE
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
								\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::PMS_INTEGRATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::PMS_INTEGRATION] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::SITE_TABLET . ' THEN
								\'' . $arrstrProductName[\CPsProduct::SITE_TABLET] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::INSPECTION_MANAGER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::INSPECTION_MANAGER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::API_SERVICES . ' THEN
								\'' . $arrstrProductName[\CPsProduct::API_SERVICES] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATA_FACILITIES_APP . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_FACILITIES_APP] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATAMATION] . '\'
							WHEN vmr.ps_product_id = ' . \CPsProduct::JOB_COSTING . ' THEN
								\'' . $arrstrProductName[\CPsProduct::JOB_COSTING] . '\'
						END AS origin
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses ms ON ( vmr.cid = ms.cid AND vmr.maintenance_status_id = ms.id )
						JOIN maintenance_priorities mp ON (vmr.cid = mp.cid AND vmr.maintenance_priority_id = mp.id )
						JOIN properties cp ON ( vmr.cid = cp.cid AND vmr.property_id = cp.id )
						LEFT JOIN maintenance_problems mprob ON ( vmr.cid = mprob.cid AND vmr.maintenance_problem_id = mprob.id )
						LEFT JOIN leases l ON ( vmr.cid = l.cid AND vmr.property_id = l.property_id AND vmr.lease_id = l.id )
						LEFT JOIN property_units pu ON ( vmr.cid = pu.cid AND pu.property_id = vmr.property_id AND ( ( l.property_unit_id = pu.id AND vmr.lease_id IS NOT NULL ) OR ( vmr.property_unit_id = pu.id AND vmr.lease_id IS NULL ) ) AND pu.deleted_on IS NULL )
						LEFT JOIN maintenance_locations ml ON ( vmr.cid = ml.cid AND vmr.maintenance_location_id = ml.id )
						LEFT JOIN company_employees ce ON ( vmr.cid = ce.cid AND vmr.company_employee_id = ce.id )
						LEFT JOIN property_buildings pb ON ( pb.cid = pu.cid AND pb.property_id = pu.property_id AND pb.id = pu.property_building_id )
						LEFT JOIN maintenance_request_notes mrn ON ( vmr.cid = mrn.cid AND vmr.id = mrn.maintenance_request_id AND mrn.is_closing_note = true )
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )
						AND vmr.deleted_by IS NULL
					ORDER BY
						 ' . $strOrderBy;

		return \rekeyArray( 'reference', \fetchData( $strSql, $objDatabase ) );
	}

	public function fetchMaintenanceRequestStatusTypesByIds( $arrintMaintenanceRequestIds, $intCid, $objDatabase ) {

		if( false == \valArr( $arrintMaintenanceRequestIds ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						mr.id,
						ms.maintenance_status_type_id
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses ms ON ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' ) ';

		return \fetchData( $strSql, $objDatabase );

	}

	public function fetchMaintenanceRequestCountByMaintenanceStatusIdByCid( $intMaintenanceStatusId, $intCid, $objDatabase, $arrintMaintenanceRequestTypeIds = [] ) {
		if( false == \valId( $intMaintenanceStatusId ) || false == \valId( $intCid ) ) {
			return NULL;
		}

		$strSql = '	SELECT
						count(mr.*)
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses ms ON ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.maintenance_status_id = ' . ( int ) $intMaintenanceStatusId . '
						AND mr.deleted_by IS NULL
						AND mr.parent_maintenance_request_id IS NULL ' . ( ( true == \valArr( $arrintMaintenanceRequestTypeIds ) ) ? 'AND mr.maintenance_request_type_id IN ( ' . implode( ',', $arrintMaintenanceRequestTypeIds ) . ' ) ' : '' );

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestCountByMaintenanceStatusTypeIdByCid( $intMaintenanceStatusTypeId, $arrintPropertyIds, $intCid, $objDatabase, $boolIsDateAllowed = false ) {
		if( false == \valId( $intMaintenanceStatusTypeId ) || false == \valId( $intCid ) || false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}
		$strDateCondition = '';

		if( false != $boolIsDateAllowed ) {
			$strDateCondition = 'AND mr.created_on >= date_trunc( \'day\', CURRENT_TIMESTAMP - \'34 days\'::interval )::date';
		}

		$strSql = '	SELECT
						count(mr.id)
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses ms ON ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id )
						JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id AND mrt.id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' ) 
						AND ms.maintenance_status_type_id = ' . ( int ) $intMaintenanceStatusTypeId . '
						AND mr.deleted_by IS NULL
						AND mr.parent_maintenance_request_id IS NULL ' . $strDateCondition;

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchPreviousFiveWeekMaintenanceRequestsByMaintenanceStatusIdsByPropertyIdByCid( $arrintMaintenanceStatusIds, $intPropertyId, $intCid, $objDatabase ) {
		if( false == \valArr( $arrintMaintenanceStatusIds ) ) {
			return NULL;
		}

		$strSql = ' WITH week_date_range AS (
						SELECT
							row_number() OVER(),
							week_start::date,
							( week_start + INTERVAL \'6 days\' )::date AS week_end_date
						FROM
							generate_series( date_trunc( \'day\', CURRENT_TIMESTAMP - \'34 days\'::interval )::date, date_trunc( \'day\', CURRENT_TIMESTAMP )::date, \'1 week\'::interval ) week_start
						WHERE
							week_start <= date_trunc( \'week\', CURRENT_TIMESTAMP )::date
						ORDER BY
							week_start DESC )

					SELECT wdr.week_end_date,
						count( CASE WHEN mr.created_on::date BETWEEN wdr.week_start::date AND wdr.week_end_date::date THEN wdr.week_end_date ELSE NULL END )
					FROM
						week_date_range wdr
						LEFT JOIN maintenance_requests mr ON ( ( mr.created_on::date BETWEEN wdr.week_start::date AND wdr.week_end_date::date  OR mr.created_on::date NOT BETWEEN wdr.week_start::date AND wdr.week_end_date::date)
						AND mr.cid = ' . ( int ) $intCid . ' AND mr.property_id = ' . ( int ) $intPropertyId . ' )
						JOIN maintenance_statuses ms on ( mr.maintenance_status_id = ms.id AND mr.cid = ms.cid )
						JOIN maintenance_status_types mst on ( ms.maintenance_status_type_id = mst.id AND mst.id IN ( ' . implode( ',', $arrintMaintenanceStatusIds ) . ' ) )
						JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id AND mrt.id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' )
					GROUP BY wdr.week_end_date
					ORDER BY wdr.week_end_date DESC';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsCountsForCurrentDaylastSeventDaysByPropertyIdByCid( $intPropertyId, $intCid, $objDatabase ) {

		$strSql = ' SELECT
						count( CASE WHEN mr.created_on::Date = CURRENT_TIMESTAMP::Date THEN 1 ELSE NULL END ) as created_today,
						count( CASE WHEN mr.created_on::Date = date_trunc(\'day\', CURRENT_TIMESTAMP - \'1 days\'::interval )::Date
								THEN 1 ELSE NULL END ) as created_yesterday,
						count( CASE WHEN mrd.completed_datetime::Date = CURRENT_TIMESTAMP::Date AND mst.id = ' . ( int ) \CMaintenanceStatusType::COMPLETED . ' THEN 1 ELSE NULL END ) as completed_today,
						count( CASE WHEN mrd.completed_datetime::Date = date_trunc(\'day\', CURRENT_TIMESTAMP - \'1 days\'::interval )::Date
								AND mst.id = ' . ( int ) \CMaintenanceStatusType::COMPLETED . ' THEN 1 ELSE NULL END ) as completed_yesterday,
						count( CASE WHEN ( mr.created_on::Date > date_trunc( \'day\', CURRENT_TIMESTAMP - \'7 days\'::interval )::Date )
								THEN 1 ELSE NULL END ) as created_seven_days,
						count( CASE WHEN ( mr.created_on::Date > date_trunc( \'day\', CURRENT_TIMESTAMP - \'14 days\'::interval )::date AND mr.created_on::Date < date_trunc ( \'day\', CURRENT_TIMESTAMP - \'7 days\'::interval )::date )
								THEN 1 ELSE NULL END ) as created_seven_days_previous,
						count( CASE WHEN ( mrd.completed_datetime::Date > date_trunc( \'day\', CURRENT_TIMESTAMP - \'7 days\'::interval )::Date )
								AND mst.id = ' . ( int ) \CMaintenanceStatusType::COMPLETED . ' THEN 1 ELSE NULL END ) as completed_seven_days,
						count( CASE WHEN ( mrd.completed_datetime::Date > date_trunc( \'day\', CURRENT_TIMESTAMP - \'14 days\'::interval )::date AND mrd.completed_datetime::Date < date_trunc ( \'day\', CURRENT_TIMESTAMP - \'7 days\'::interval )::date )
								AND mst.id = ' . ( int ) \CMaintenanceStatusType::COMPLETED . ' THEN 1 ELSE NULL END ) as completed_seven_days_previous
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mrd.maintenance_request_id = mr.id AND mrd.cid = mr.cid )
						JOIN maintenance_statuses ms ON ( mr.maintenance_status_id = ms.id AND mr.cid = ms.cid )
						JOIN maintenance_status_types mst ON ( ms.maintenance_status_type_id = mst.id )
						JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id AND mrt.id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id = ' . ( int ) $intPropertyId . '
					GROUP BY
						mr.cid,
						mr.property_id';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchSimpleMaintenanceRequestByIdByMaintenanceRequestTypeIdByCid( $intMaintenanceRequestId, $arrintMaintenanceRequestTypeIds = [], $intCid, $objDatabase ) {
		if( false == \valId( $intMaintenanceRequestId ) || false == \valId( $intCid ) ) {
			return NULL;
		}

		$strSql = '	SELECT
						vmr.id,
						vmr.property_id,
						vmr.parent_maintenance_request_id,
						vmr.scheduled_end_datetime,
						vmr.completed_datetime
					FROM
						view_maintenance_requests vmr
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.id = ' . ( int ) $intMaintenanceRequestId . '
						AND vmr.deleted_by IS NULL ' . ( ( true == \valArr( $arrintMaintenanceRequestTypeIds ) ) ? 'AND vmr.maintenance_request_type_id IN ( ' . implode( ',', $arrintMaintenanceRequestTypeIds ) . ' ) ' : '' );

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchSimplePaginatedMaintenanceRequestsByMaintenanceFilterByCid( $intPageNo, $intPageSize, $strOrderBy, $strOrderDirection, $arrmixMaintenanceFilterValues, $intTotalMaintenanceGroupsCount = NULL, $intMaintenanceGroupsOnPage = NULL, $intCid, $objDatabase, $boolIsFromExport = false, $boolIsSelectAll = false, $boolIsPaginationNotRequired = false, $boolShowDisabledData = false ) {

		$arrstrProductName = \CPsProduct::createService()->getProductNames();
		$strExportConditionalSelect = 'mrn.note,';
		$strExportConditionalJoin = ' LEFT JOIN maintenance_request_notes mrn ON ( mr.id = mrn.maintenance_request_id AND mrn.is_closing_note = true) ';

		if( 1 === preg_match( '(property_name|building_name)', $strOrderBy ) ) {
			if( true === \Psi\CStringService::singleton()->strpos( 'property_name', $strOrderBy ) && true == \valStr( $strOrderBy ) ) {
				$strOrderBy .= ' , building_name ' . $strOrderDirection;
			}
			$strOrderBy .= ' , unit_nos ' . $strOrderDirection;
		}

		if( 1 !== preg_match( '(reference)', $strOrderBy ) && true == \valStr( $strOrderBy ) ) {
			$strOrderBy .= ' , actual_start_datetime ASC';
		}

		$strSql = '';

		if( 1 == $intPageNo ) {
			$intOffset = $intPageSize;
		} elseif( 1 < $intPageNo ) {
			$intOffset = $intPageSize * ( $intPageNo );
		} else {
			$intOffset = 0;
		}

		if( false == $boolIsPaginationNotRequired ) {
			$intLimit = $intPageSize;
		}

		if( 0 < $intMaintenanceGroupsOnPage ) {
			$intOffset	= $intOffset - ( $intTotalMaintenanceGroupsCount - $intMaintenanceGroupsOnPage );
			$intLimit	= $intLimit - $intMaintenanceGroupsOnPage;
		} else {
			$intOffset	= $intOffset - $intTotalMaintenanceGroupsCount;
		}

		$strConditionalWhereSql = 'WHERE
					mr.cid = ' . ( int ) $intCid . '
					AND mr.parent_maintenance_request_id IS NULL
					AND mr.deleted_by IS NULL
					';

		if( true == \valId( $arrmixMaintenanceFilterValues['maintenance_request_id'] ) ) {
			$strConditionalWhereSql .= ' AND mr.id != ' . ( int ) $arrmixMaintenanceFilterValues['maintenance_request_id'];
		}

		if( true === isset( $arrmixMaintenanceFilterValues['maintenance_status_type_id'] ) && true === \valId( $arrmixMaintenanceFilterValues['maintenance_status_type_id'] ) ) {
			$strConditionalWhereSql .= ' AND maintenance_status_type_id = ' . $arrmixMaintenanceFilterValues['maintenance_status_type_id'];
		}

		if( false == $arrmixMaintenanceFilterValues['is_applied_filter'] ) {
			$strConditionalWhereSql .= ' AND mr.maintenance_group_id IS NULL ';
		}

		// prepares the where conditions to be used in the SQL
		$strConditionalWhereSql .= $this->preparePaginatedMaintenanceRequestsWhereCondition( $arrmixMaintenanceFilterValues );

		$strConditionalWhereSql .= ' ORDER BY ' . $strOrderBy;
		if( true == $boolIsSelectAll && 0 < $intLimit ) {
			$strConditionalWhereSql .= ' OFFSET ' . ( int ) $intOffset;
		} elseif( 0 < $intLimit ) {
			$strConditionalWhereSql .= ' OFFSET ' . ( int ) $intOffset . ' LIMIT ' . ( int ) $intLimit;
		} else {
			$strConditionalWhereSql .= ' OFFSET ' . ( int ) $intOffset;
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['filtered_property_ids'] ) ) {
			$strSql = ' 
						DROP TABLE IF EXISTS temp_load_properties;
						CREATE TEMP TABLE temp_load_properties AS(
											SELECT
												lp.property_id,
												p.property_name
											FROM
												load_properties ( ARRAY[' . ( int ) $intCid . '], ARRAY[ ' . implode( ',', $arrmixMaintenanceFilterValues['filtered_property_ids'] ) . ' ] ) lp
											JOIN properties p ON p.cid = ' . ( int ) $intCid . ' AND p.id = lp.property_id
											WHERE
												lp.is_disabled = ' . ( ( false == $boolShowDisabledData ) ? 0 : 1 ) . ' );
						ANALYZE temp_load_properties; ';
		}

		$strSql .= 'DROP TABLE IF EXISTS temp_work_orders;
					CREATE TEMP TABLE temp_work_orders AS(
						SELECT
							mr.id,
							mr.id AS reference,';
		if( true == $boolIsFromExport ) {
			$strSql .= $strExportConditionalSelect;
		}
		$strSql .= 'mr.lease_id,
					mr.created_on AS request_created_on,
					CASE
						WHEN mr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::MAKE_READY . ', ' . \CMaintenanceRequestType::RENOVATION . ' ) AND mr.due_date IS NOT NULL THEN mr.due_date
						WHEN mr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::MAKE_READY . ', ' . \CMaintenanceRequestType::RENOVATION . ' ) AND mrd.scheduled_end_datetime IS NOT NULL THEN CAST(mrd.scheduled_end_datetime AS DATE)
						ELSE mr.due_date
					END AS due_date,
					mr.customer_id,
					mr.company_employee_id,
					mr.ap_payee_id,
					mr.maintenance_request_type_id,
					mr.cid,
					mr.ps_product_id,
					mr.maintenance_priority_id,
					mr.maintenance_status_id,
					mr.property_id,
					mr.printed_on,
					mr.remote_primary_key,
					mr.property_unit_id,
					mr.maintenance_problem_id,
					mr.created_by,
					util_get_translated( \'name\', mst.name, mst.details ) AS maintenance_status_name,
					mst.maintenance_status_type_id,
					CASE
					WHEN mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
					THEN abs( ( ( DATE_PART( \'day\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) * 24
								+ DATE_PART( \'hour\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) ) * 60
								+ DATE_PART( \'minute\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) ) * 60
								+ DATE_PART( \'second\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ))
					WHEN mst.maintenance_status_type_id IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
					THEN abs( ( ( DATE_PART( \'day\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) * 24
								+ DATE_PART( \'hour\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) ) * 60
								+ DATE_PART( \'minute\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) ) * 60
								+ DATE_PART( \'second\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) )
					END AS time_open,
					mp.maintenance_priority_type_id AS maintenance_priority_type,
					mp.name AS maintenance_priority_name,
					CASE
						WHEN ml.is_system = 1 THEN NULL
						WHEN puml.name IS NOT NULL THEN util_get_translated( \'name\', puml.name, puml.details )
						ELSE util_get_translated( \'name\', ml.name, ml.details )
					END AS maintenance_location_name,
					ml.maintenance_location_type_id,
					util_get_translated( \'name\', mrt.name, mrt.details ) AS maintenance_request_type,
					util_get_translated( \'name\', mprob.name, mprob.details ) AS maintenance_problem_name,
					pb.building_name,
					ce.name_first AS employee_first_name,
					ce.name_last AS employee_last_name,
					ap.company_name AS vendor_name,
					lp.property_name,
					mrd.unit_number,
					mrd.problem_description,
					mrd.scheduled_start_datetime,
					mrd.scheduled_end_datetime,
					mrd.actual_start_datetime,
					mrd.requested_datetime AS requested_datetime,
					COALESCE(us.unit_number_cache, pu.unit_number) AS unit_number_cache,
					mrd.completed_datetime,
					cev.start_datetime AS calendar_start_datetime,
					cev.end_datetime AS calendar_end_datetime,
					mr.property_unit_maintenance_location_id,
					mrd.required_response_datetime,
					mrd.response_duration,
					CASE ';
		if( true == \valArr( $arrmixMaintenanceFilterValues['pm_enabled_property_ids'] ) ) {
			$strSql .= 'WHEN mr.property_id IN ( ' . implode( ',', $arrmixMaintenanceFilterValues['pm_enabled_property_ids'] ) . ' ) AND mr.maintenance_request_type_id NOT IN ( ' . \CMaintenanceRequestType::MAKE_READY . ', ' . \CMaintenanceRequestType::RENOVATION . ' ) THEN cev.end_datetime';
		}

		$strSql .= '        WHEN mrd.scheduled_start_datetime IS NOT NULL AND mrd.scheduled_end_datetime IS NOT NULL THEN mrd.scheduled_start_datetime
						WHEN mrd.scheduled_start_datetime IS NOT NULL AND mrd.scheduled_end_datetime IS NULL THEN mrd.scheduled_start_datetime
						WHEN mrd.scheduled_start_datetime IS NULL AND mrd.scheduled_end_datetime IS NOT NULL THEN mrd.scheduled_end_datetime
						ELSE NULL
					END as scheduled_date,
					CASE
						WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
							\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
							\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
							\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::PMS_INTEGRATION . ' THEN
							\'' . $arrstrProductName[\CPsProduct::PMS_INTEGRATION] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::SITE_TABLET . ' THEN
							\'' . $arrstrProductName[\CPsProduct::SITE_TABLET] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::INSPECTION_MANAGER . ' THEN
							\'' . $arrstrProductName[\CPsProduct::INSPECTION_MANAGER] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::API_SERVICES . ' THEN
							\'' . $arrstrProductName[\CPsProduct::API_SERVICES] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA_FACILITIES_APP . ' THEN
							\'' . $arrstrProductName[\CPsProduct::ENTRATA_FACILITIES_APP] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . ' THEN
							\'' . $arrstrProductName[\CPsProduct::ENTRATAMATION] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
							\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA_MOBILE_MAINTENANCE . ' THEN
							\'' . $arrstrProductName[\CPsProduct::ENTRATA_MOBILE_MAINTENANCE] . '\'
						WHEN mr.ps_product_id = ' . \CPsProduct::JOB_COSTING . ' THEN
							\'' . $arrstrProductName[\CPsProduct::JOB_COSTING] . '\'
					END AS origin,
					substring( mrd.unit_number, \'^[0-9]+\')::numeric AS unit_nos
				FROM maintenance_requests mr ';

		if( true == \valArr( $arrmixMaintenanceFilterValues['filtered_property_ids'] ) ) {
			$strSql .= ' JOIN temp_load_properties lp ON ( lp.property_id = mr.property_id ) ';
		}

		$strSql .= 'JOIN maintenance_request_details mrd ON ( mr.id = mrd.maintenance_request_id AND mr.cid = mrd.cid )
					JOIN maintenance_statuses mst ON ( mr.cid = mst.cid AND mr.maintenance_status_id = mst.id )
					JOIN maintenance_priorities mp ON ( mr.cid = mp.cid AND mr.maintenance_priority_id = mp.id )
					LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
					JOIN maintenance_request_types mrt ON ( mrt.id = mr.maintenance_request_type_id )
					LEFT JOIN maintenance_problems mprob ON ( mr.cid = mprob.cid AND mr.maintenance_problem_id = mprob.id AND mprob.maintenance_problem_type_id IN ( ' . \CMaintenanceProblemType::MAINTENANCE_PROBLEM . ' ) )
					LEFT JOIN leases l ON ( l.cid = mr.cid AND l.id = mr.lease_id AND l.property_id = mr.property_id )
					LEFT JOIN property_units pu ON ( mr.cid = pu.cid AND mr.property_id = pu.property_id AND ( ( l.property_unit_id = pu.id AND mr.lease_id IS NOT NULL ) OR ( mr.property_unit_id = pu.id AND mr.lease_id IS NULL ) ) )
					LEFT JOIN property_buildings pb ON ( pu.property_building_id = pb.id AND pu.cid = pb.cid )
					LEFT JOIN company_employees ce ON ( mr.cid = ce.cid AND mr.company_employee_id = ce.id )
					LEFT JOIN ap_payees ap ON ( ap.cid = mr.cid AND ap.id = mr.ap_payee_id )
					LEFT JOIN unit_spaces us ON ( mr.cid = us.cid AND us.id = mr.unit_space_id )
					JOIN calendar_event_types cet ON ( cet.cid = mr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
					LEFT JOIN calendar_events cev ON ( cev.cid = mr.cid AND cev.reference_id = mr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
					LEFT JOIN property_unit_maintenance_locations puml ON (mr.cid = puml.cid AND mr.property_unit_maintenance_location_id = puml.id)
					';

		if( true == $boolIsFromExport ) {
			$strSql .= $strExportConditionalJoin;
		}

		$strSql .= $strConditionalWhereSql .
		           ');
			
			ANALYZE temp_work_orders;
			
			SELECT
				two.*,
				cust.name_full AS customer_full_name,
				tz.time_zone_name,
				( SELECT
					COUNT( mar.* )
					FROM maintenance_requests mar
					WHERE mar.cid = two.cid
					AND mar.parent_maintenance_request_id = two.id
					AND mar.deleted_by IS NULL
					AND mar.deleted_on IS NULL ) as sub_task_cnt
			FROM
				temp_work_orders two
				JOIN properties p ON ( two.property_id = p.id AND two.cid = p.cid )
				JOIN time_zones AS tz ON ( tz.id = p.time_zone_id )
				LEFT JOIN customers cust ON ( two.cid = cust.cid AND two.customer_id = cust.id )
				ORDER BY ' . $strOrderBy . ';
		';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchTotalMaintenanceRequestsCountByMaintenanceFilterByCidOnMaintenanceDashboard( $arrmixMaintenanceFilterValues, $intCid, $objDatabase, $boolShowDisabledData = false ) {
		$strSql = '';
		if( true == \valArr( $arrmixMaintenanceFilterValues['filtered_property_ids'] ) ) {
			$strSql .= ' 
						DROP TABLE IF EXISTS temp_count_load_properties;
						CREATE TEMP TABLE temp_count_load_properties AS(
							SELECT
								lp.property_id
							FROM
								load_properties ( ARRAY[' . ( int ) $intCid . '], ARRAY[ ' . implode( ',', $arrmixMaintenanceFilterValues['filtered_property_ids'] ) . ' ] ) lp
							WHERE
							lp.is_disabled = ' . ( ( false == $boolShowDisabledData ) ? 0 : 1 ) . ' );
						ANALYZE temp_count_load_properties; ';
		}
		$strSql .= 'SELECT
						COUNT(mr.id)
					FROM maintenance_requests mr
					JOIN maintenance_request_details mrd ON ( mrd.cid = mr.cid AND mrd.maintenance_request_id = mr.id )';
		if( true == \valArr( $arrmixMaintenanceFilterValues['filtered_property_ids'] ) ) {
			$strSql .= ' JOIN temp_count_load_properties lp ON ( lp.property_id = mr.property_id ) ';
		}

		$arrmixSearchKeywords = ( true == \valArr( preg_split( '/[\s,-]+/', trim( $arrmixMaintenanceFilterValues['search_keyword'] ) ) ) ) ? preg_split( '/[\s,-]+/', trim( $arrmixMaintenanceFilterValues['search_keyword'] ) ) : [];

		if( ( true == \valArr( $arrmixSearchKeywords ) && true == \valStr( $arrmixSearchKeywords[0] ) ) || true == \valArr( $arrmixMaintenanceFilterValues['property_buildings'] ) || true == \valArr( $arrmixMaintenanceFilterValues['unit_status_types'] ) ) {
			$strSql .= ' LEFT JOIN property_units pu ON (mr.property_unit_id = pu.id AND mr.cid = pu.cid )
						LEFT JOIN unit_spaces us ON ( mr.unit_space_id = us.id AND mr.cid = us.cid )';
		}
		$strSql .= '
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.deleted_by IS NULL ';

		if( false == \valStr( $arrmixMaintenanceFilterValues['search_keyword'] ) && false == $arrmixMaintenanceFilterValues['is_applied_filter'] ) {
			$strSql .= 'AND mr.maintenance_group_id IS NULL ';
		}

		if( true == \valStr( $arrmixMaintenanceFilterValues['search_keyword'] ) && \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_REFERENCE == $arrmixMaintenanceFilterValues['search_type'] ) {
			$strSql .= ' AND mr.id = ' . ( int ) $arrmixMaintenanceFilterValues['search_keyword'];
		} else {
			$strSql .= ' AND mr.parent_maintenance_request_id IS NULL ' . $this->preparePaginatedMaintenanceRequestsWhereCondition( $arrmixMaintenanceFilterValues );
		}

		$arrstrData = ( array ) \fetchData( $strSql, $objDatabase );

		if( true == \valArr( $arrstrData ) ) {
			return $arrstrData[0]['count'];
		}
		return 0;
	}

	private function preparePaginatedMaintenanceRequestsWhereCondition( $arrmixMaintenanceFilterValues ) {
		$strConditionalSql = '';

		if( true == \valStr( $arrmixMaintenanceFilterValues['search_keyword'] ) ) {

			$arrmixSearchKeywords = ( true == \valArr( preg_split( '/[\s,-]+/', trim( $arrmixMaintenanceFilterValues['search_keyword'] ) ) ) ) ? preg_split( '/[\s,-]+/', trim( $arrmixMaintenanceFilterValues['search_keyword'] ) ) : [];

			if( 1 == count( $arrmixSearchKeywords ) ) {
				if( \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_UNIT == $arrmixMaintenanceFilterValues['search_type'] ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= '( mrd.unit_number ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\'
											OR pu.unit_number ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\'
											OR us.unit_number_cache ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\')';
				} elseif( \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_RESIDENT == $arrmixMaintenanceFilterValues['search_type'] ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= '( mrd.customer_name_first ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\'
										OR mrd.customer_name_last ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\')';
				}
			} elseif( 1 < count( $arrmixSearchKeywords ) ) {
				if( \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_UNIT == $arrmixMaintenanceFilterValues['search_type'] ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= '( us.unit_number_cache ILIKE E\'%' . addslashes( implode( '-', $arrmixSearchKeywords ) ) . '%\'
											OR us.unit_number_cache ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\' )';
				} elseif( \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_RESIDENT == $arrmixMaintenanceFilterValues['search_type'] ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= '( mrd.customer_name_first ILIKE E\'%' . addslashes( $arrmixSearchKeywords[0] ) . '%\' 
											OR mrd.customer_name_last ILIKE E\'%' . addslashes( $arrmixSearchKeywords[1] ) . '%\'
											OR mrd.customer_name_first ILIKE E\'%' . addslashes( $arrmixSearchKeywords[1] ) . '%\'
											OR mrd.customer_name_last ILIKE E\'%' . addslashes( $arrmixSearchKeywords[0] ) . ' %\')';
				}
			}
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_statuses'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= 'mr.maintenance_status_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_statuses'] ) . ')';
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_priorities'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= 'mr.maintenance_priority_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_priorities'] ) . ')';
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_request_types'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= 'mr.maintenance_request_type_id IN ( ' . implode( ' , ', $arrmixMaintenanceFilterValues['maintenance_request_types'] ) . ' )';
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['unit_status_types'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= 'us.unit_space_status_type_id IN ( ' . implode( ',', $arrmixMaintenanceFilterValues['unit_status_types'] ) . ' ) ';
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_locations'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= 'mr.maintenance_location_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_locations'] ) . ')';
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['ps_products'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= 'mr.ps_product_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['ps_products'] ) . ')';
		}

		// property buildings
		if( true == \valArr( $arrmixMaintenanceFilterValues['property_buildings'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= '( mr.property_building_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['property_buildings'] ) . ') 
									OR pu.property_building_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['property_buildings'] ) . ') )';
		}

		$strConditionalSql = $this->loadCommonFilterConditions( $arrmixMaintenanceFilterValues, $strConditionalSql );

		if( true == \valId( $arrmixMaintenanceFilterValues['property_unit_id'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= 'mr.property_unit_id = ' . $arrmixMaintenanceFilterValues['property_unit_id'];
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_request_ids'] ) ) {
			if( 1 == count( $arrmixSearchKeywords ) && \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_REFERENCE == $arrmixMaintenanceFilterValues['search_type'] ) {
				$strConditionalSql = ' AND mr.id IN ( ' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_request_ids'] ) . ' )';
			} elseif( true == \valStr( $strConditionalSql ) ) {
				$strConditionalSql = ' AND ( ( ' . $strConditionalSql . ' ) OR mr.id IN ( ' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_request_ids'] ) . ' ) )';
			} else {
				$strConditionalSql = ' AND mr.id IN ( ' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_request_ids'] ) . ' )';
			}
		} elseif( true == \valStr( $strConditionalSql ) ) {
			$strConditionalSql = ' AND ' . $strConditionalSql;
		}

		return $strConditionalSql;
	}

	public function fetchSimpleSubMaintenanceRequestsByMaintenanceFilter( $arrmixMaintenanceFilterValues, $intCid, $objDatabase ) {

		$strConditionalSql = '';
		$strSql = '';
		$strConditionalSql = $this->loadCommonFilterConditions( $arrmixMaintenanceFilterValues, $strConditionalSql, true );

		if( false == \valStr( $strConditionalSql ) && false == \valArr( $arrmixMaintenanceFilterValues['maintenance_request_ids'] ) ) {
			return NULL;
		}

		// override filter in case of reference no. search
		if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_request_ids'] ) && 1 == count( $arrmixMaintenanceFilterValues['maintenance_request_ids'] ) && \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_REFERENCE == $arrmixMaintenanceFilterValues['search_type'] ) {
			$strConditionalSql = ' AND mr.id IN ( ' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_request_ids'] ) . ' )';
		} elseif( true == \valStr( $strConditionalSql ) ) {
			// append entire filter if any of ( problem, assigned employee, assigned vendor or date filter exists )
			$strConditionalSql = ' AND ' . $strConditionalSql;
			if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_request_types'] ) ) {
				$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
				$strConditionalSql .= 'mr.maintenance_request_type_id IN ( ' . implode( ' , ', $arrmixMaintenanceFilterValues['maintenance_request_types'] ) . ' )';
			}

			if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_statuses'] ) ) {
				$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
				$strConditionalSql .= 'mr.maintenance_status_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_statuses'] ) . ')';
			}

			if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_priorities'] ) ) {
				$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
				$strConditionalSql .= 'mr.maintenance_priority_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_priorities'] ) . ')';
			}

			if( true == \valArr( $arrmixMaintenanceFilterValues['unit_status_types'] ) ) {
				$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
				$strConditionalSql .= 'us.unit_space_status_type_id IN ( ' . implode( ',', $arrmixMaintenanceFilterValues['unit_status_types'] ) . ' ) ';
			}

			if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_locations'] ) ) {
				$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
				$strConditionalSql .= 'mr.maintenance_location_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_locations'] ) . ')';
			}

			if( true == \valArr( $arrmixMaintenanceFilterValues['ps_products'] ) ) {
				$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
				$strConditionalSql .= 'mr.ps_product_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['ps_products'] ) . ')';
			}

			if( true == \valArr( $arrmixMaintenanceFilterValues['property_buildings'] ) ) {
				$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
				$strConditionalSql .= '( mr.property_building_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['property_buildings'] ) . ') 
									OR pu.property_building_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['property_buildings'] ) . ') )';
			}

			if( true == \valStr( $arrmixMaintenanceFilterValues['search_keyword'] ) ) {

				$arrmixSearchKeywords = ( true == \valArr( preg_split( '/[\s,-]+/', trim( $arrmixMaintenanceFilterValues['search_keyword'] ) ) ) ) ? preg_split( '/[\s,-]+/', trim( $arrmixMaintenanceFilterValues['search_keyword'] ) ) : [];

				if( 1 == count( $arrmixSearchKeywords ) ) {
					if( \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_UNIT == $arrmixMaintenanceFilterValues['search_type'] ) {
						$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
						$strConditionalSql .= '( mrd.unit_number ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\'
											OR pu.unit_number ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\'
											OR us.unit_number_cache ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\')';
					} elseif( \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_RESIDENT == $arrmixMaintenanceFilterValues['search_type'] ) {
						$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
						$strConditionalSql .= '( mrd.customer_name_first ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\'
										OR mrd.customer_name_last ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\')';
					}
				} elseif( 1 < count( $arrmixSearchKeywords ) ) {
					if( \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_UNIT == $arrmixMaintenanceFilterValues['search_type'] ) {
						$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
						$strConditionalSql .= '( us.unit_number_cache ILIKE E\'%' . addslashes( implode( '-', $arrmixSearchKeywords ) ) . '%\'
											OR us.unit_number_cache ILIKE E\'%' . addslashes( $arrmixMaintenanceFilterValues['search_keyword'] ) . '%\' )';
					} elseif( \CMaintenanceRequest::MAINTENANCE_FILTER_SEARCH_TYPE_RESIDENT == $arrmixMaintenanceFilterValues['search_type'] ) {
						$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
						$strConditionalSql .= '( mrd.customer_name_first ILIKE E\'%' . addslashes( $arrmixSearchKeywords[0] ) . '%\' 
											OR mrd.customer_name_last ILIKE E\'%' . addslashes( $arrmixSearchKeywords[1] ) . '%\'
											OR mrd.customer_name_first ILIKE E\'%' . addslashes( $arrmixSearchKeywords[1] ) . '%\'
											OR mrd.customer_name_last ILIKE E\'%' . addslashes( $arrmixSearchKeywords[0] ) . ' %\')';
					}
				}
			}

		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['filtered_property_ids'] ) ) {
			$strSql = ' 
						DROP TABLE IF EXISTS temp_load_properties;
						CREATE TEMP TABLE temp_load_properties AS(
											SELECT
												lp.property_id
											FROM
												load_properties ( ARRAY[' . ( int ) $intCid . '], ARRAY[ ' . implode( ',', $arrmixMaintenanceFilterValues['filtered_property_ids'] ) . ' ] ) lp
											WHERE
												lp.is_disabled = 0);
						ANALYZE temp_load_properties; ';
		}

		$strSql .= ' DROP TABLE IF EXISTS temp_maintenance_request_ids;
					CREATE TEMP TABLE temp_maintenance_request_ids AS (
						SELECT 
						   mr.id AS sub_task_id,	
					       mr.parent_maintenance_request_id,
					       mr.cid
						FROM
							maintenance_requests mr 
							JOIN maintenance_request_details mrd ON ( mr.id = mrd.maintenance_request_id AND mr.cid = mrd.cid )';

		if( true == \valArr( $arrmixMaintenanceFilterValues['filtered_property_ids'] ) ) {
			$strSql .= ' JOIN temp_load_properties lp ON ( lp.property_id = mr.property_id ) ';
		}

		$strSql .= ' LEFT JOIN unit_spaces us ON ( mr.cid = us.cid AND us.id = mr.unit_space_id )
					 LEFT JOIN property_units pu ON ( mr.cid = pu.cid AND mr.property_id = pu.property_id AND mr.property_unit_id = pu.id )
						WHERE
							mr.deleted_by IS NULL
							AND mr.cid = ' . ( int ) $intCid . '
							AND mr.parent_maintenance_request_id IS NOT NULL
							' . $strConditionalSql . '
					       																				) ; 
					ANALYZE temp_maintenance_request_ids;
					SELECT
						DISTINCT vmr.id AS reference,
						vmr.lease_id,
						vmr.actual_start_datetime AS request_created_on,
						CASE
							WHEN mst.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
								THEN abs( ( ( DATE_PART( \'day\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ) * 24
											+ DATE_PART( \'hour\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ) ) * 60
											+ DATE_PART( \'minute\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ) ) * 60
											+ DATE_PART( \'second\', NOW()::timestamp - vmr.actual_start_datetime::timestamp ))
							WHEN mst.maintenance_status_type_id IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
								THEN abs( ( ( DATE_PART( \'day\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) * 24
											+ DATE_PART( \'hour\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) ) * 60
											+ DATE_PART( \'minute\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) ) * 60
											+ DATE_PART( \'second\', vmr.completed_datetime - vmr.actual_start_datetime::timestamp ) )
							END AS time_open,
						CASE
							WHEN vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . ' AND vmr.due_date IS NOT NULL THEN vmr.due_date
							WHEN vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . ' AND vmr.scheduled_end_datetime IS NOT NULL THEN CAST(vmr.scheduled_end_datetime AS DATE)
						ELSE vmr.due_date
						END AS due_date,
						vmr.customer_id,
						vmr.company_employee_id,
						vmr.maintenance_request_type_id,
						vmr.cid,
						vmr.ps_product_id,
						vmr.maintenance_priority_id,
						vmr.maintenance_status_id,
						vmr.property_id,
						vmr.printed_on,
						vmr.remote_primary_key,
						vmr.property_unit_id,
						ce.name_first AS employee_first_name,
						ce.name_last AS employee_last_name,
						cust.name_first AS customer_name_first,
						cust.name_last AS customer_name_last,
						mp.name AS maintenance_priority_name,
						mprob.name,
						vmr.problem_description,
						vmr.scheduled_start_datetime AS scheduled_start_datetime,
						vmr.scheduled_end_datetime,
						vmr.actual_start_datetime,
						vmr.requested_datetime AS requested_datetime,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						mst.maintenance_status_type_id,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE util_get_translated( \'name\', ml.name, ml.details ) END AS maintenance_location_name,
						util_get_translated( \'name\', mprob.name, mprob.details ) AS maintenance_problem_name,
						mst.name AS maintenance_status_name,
						mrt.name AS maintenance_request_type,
						mp.maintenance_priority_type_id AS maintenance_priority_type,
						vmr.remote_primary_key,
						ap.company_name AS vendor_name,
						vmr.parent_maintenance_request_id,
						vmr.maintenance_problem_id AS maintenance_problem_id,
						vmr.ap_payee_id AS vendor_id,
						CASE
                           WHEN EXISTS ( SELECT 
                                            temp_maintenance_request_ids.sub_task_id 
                                         FROM   
                                            temp_maintenance_request_ids
                                         WHERE  
                                            temp_maintenance_request_ids.sub_task_id = vmr.id
                                        ) THEN \'1\'
                           ELSE \'0\'
                         END AS has_class
					FROM
						view_maintenance_requests vmr';
		$strSql .= '    JOIN temp_maintenance_request_ids tmri ON (vmr.cid = tmri.cid AND vmr.parent_maintenance_request_id = tmri.parent_maintenance_request_id )
						JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
						LEFT JOIN property_units pu ON ( vmr.cid = pu.cid AND vmr.property_unit_id = pu.id AND pu.deleted_on IS NULL )
						JOIN maintenance_statuses mst ON ( vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id )
						JOIN maintenance_priorities mp ON ( vmr.cid = mp.cid AND vmr.maintenance_priority_id = mp.id )
						LEFT JOIN maintenance_problems mprob ON ( vmr.cid = mprob.cid AND vmr.maintenance_problem_id = mprob.id )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
						LEFT JOIN company_employees ce ON ( vmr.cid = ce.cid AND vmr.company_employee_id = ce.id )
						LEFT JOIN company_employees cec ON ( vmr.cid = cec.cid  AND vmr.company_employee_id = cec.id AND vmr.created_by = cec.id )
						LEFT JOIN company_users cu ON ( vmr.cid = cu.cid AND vmr.created_by = cu.id AND cu.company_user_type_id IN ( ' . implode( ', ', \CCompanyUserType::$c_arrintEntrataAndPsiUserTypeIds ) . ' ) )
						LEFT JOIN customers cust ON ( vmr.cid = cust.cid AND vmr.customer_id = cust.id )
						LEFT JOIN ap_payees ap ON ( ap.cid = vmr.cid AND ap.id = vmr.ap_payee_id )
					WHERE
						vmr.cid = ' . ( int ) $intCid;

		$strSql .= '    AND vmr.parent_maintenance_request_id IS NOT NULL 
					ORDER BY reference DESC';
		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchSubMaintenanceRequestsForWebServiceByMaintenanceRequestIdsByPropertyIdByCid( $arrintParentMaintenanceRequestIds, $intPropertyId, $intCid, $objDatabase, $arrmixFilterSubMaintenaceRequests = [] ) {

		if( false == \valArr( $arrintParentMaintenanceRequestIds ) ) {
			return [];
		}

		$strSql = 'SELECT
							mr.*,
							mrd.permission_to_enter as permission_to_enter,
							mrd.unit_number as unit_number,
							mrd.completed_datetime as completed_datetime,
							mrd.problem_description as problem_description,
							mrd.scheduled_start_datetime as scheduled_start_datetime,
							mrd.scheduled_end_datetime as scheduled_end_datetime,
							mrd.customer_name_first,
							mrd.customer_name_last,
							mrd.additional_info,
							mp.name AS maintenance_problem_name,
							mp1.id AS maintenance_category_id,
							mp1.name AS maintenance_category_name,
							mpr.name AS maintenance_priority_name,
							CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
							ms.name AS maintenance_status_name,
							pb.building_name,
							ap.company_name AS ap_payee_company_name
						FROM
							maintenance_requests mr
							JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
							LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id )
							LEFT JOIN maintenance_problems mp1 ON ( mp1.cid = mp.cid AND mp1.id = mp.maintenance_problem_id )
							JOIN maintenance_priorities mpr ON ( mpr.cid = mr.cid AND mpr.id = mr.maintenance_priority_id )
							LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
							JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
							LEFT JOIN ap_payees ap ON ( ap.cid = mr.cid AND ap.id = mr.ap_payee_id )';

		if( false != isset( $arrmixFilterSubMaintenaceRequests['join_clause'] ) && false != $arrmixFilterSubMaintenaceRequests['join_clause'] ) {
			$strSql .= $arrmixFilterSubMaintenaceRequests['join_clause'];
		}
		$strSql .= ' 
							WHERE
							mr.cid = ' . ( int ) $intCid . '
							AND mr.property_id = ' . ( int ) $intPropertyId . '
							AND mr.parent_maintenance_request_id IN (' . implode( ',', $arrintParentMaintenanceRequestIds ) . ')';
		if( false != isset( $arrmixFilterSubMaintenaceRequests['where_clause'] ) && false != $arrmixFilterSubMaintenaceRequests['where_clause'] ) {
			$strSql .= $arrmixFilterSubMaintenaceRequests['where_clause'];
		}
		$strSql .= ' ORDER BY mr.id ';
		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchOpenScheduledChargesAndSubTaskCountByMaintenanceRequestIdByPropertyIdByCid( $intMaintenanceRequestId, $intPropertyId, $intCid, $objDatabase ) {
		$strSql = ' SELECT
						COUNT ( DISTINCT CASE
											WHEN ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) THEN smr.id
										END ) AS sub_task_count,
						COUNT ( DISTINCT ( sc.id ) ) AS open_charges_count
					FROM
						maintenance_requests mr
						LEFT JOIN maintenance_requests smr ON ( smr.cid = mr.cid AND smr.property_id = mr.property_id AND smr.parent_maintenance_request_id = mr.id AND smr.deleted_on IS NULL )
						LEFT JOIN maintenance_statuses ms on ( smr.cid = ms.cid and smr.maintenance_status_id = ms.id )
						LEFT JOIN scheduled_charges sc ON ( sc.cid = mr.cid AND sc.property_id = mr.property_id AND sc.ar_trigger_id = ' . \CArTrigger::WORK_ORDER_FEES . ' AND ( sc.ar_origin_object_id = mr.id OR sc.ar_origin_object_id = smr.id ) AND sc.last_posted_on IS NULL AND sc.deleted_on IS NULL )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id = ' . ( int ) $intPropertyId . '
						AND mr.id = ' . ( int ) $intMaintenanceRequestId;

		$arrstrData = ( array ) \fetchData( $strSql, $objDatabase );
		return $arrstrData[0];
	}

	public function fetchMaintenanceRequestsByMaintenanceStatusIdsByCid( $arrintMaintenanceStatusIds, $intCid, $objDatabase, $boolIsOpenStatusChangetoClose = false ) {
		if( false == \valArr( $arrintMaintenanceStatusIds ) ) {
			return NULL;
		}

		$strSubSql = ' SELECT
							smr.id
						FROM
							maintenance_requests smr
						WHERE
							smr.maintenance_status_id IN ( ' . implode( ',', $arrintMaintenanceStatusIds ) . ' )
							AND smr.parent_maintenance_request_id IS NULL';

		$strSql = ' SELECT
						mr.*,
						mrd.completed_datetime,
						ms.maintenance_status_type_id
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mrd.cid = mr.cid and mrd.maintenance_request_id = mr.id )
						JOIN maintenance_statuses ms ON ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND ( ( mr.maintenance_status_id IN ( ' . implode( ',', $arrintMaintenanceStatusIds ) . ' ) AND mr.parent_maintenance_request_id IS NULL )
						OR ( mr.parent_maintenance_request_id IS NOT NULL AND mr.parent_maintenance_request_id IN ( ' . $strSubSql . ' ) ) )';

		$strSql .= 'AND mr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::RECURRING . ', ' . \CMaintenanceRequestType::SERVICE_REQUEST . ' )';

		if( false == $boolIsOpenStatusChangetoClose ) {
			$strSql .= 'AND mrd.completed_datetime IS NOT NULL';
		}

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestTypesByMaintenanceRequestIdsByCid( $arrintMaintenanceRequestIds, $intCid, $objDatabase ) {
		if( false == \valArr( $arrintMaintenanceRequestIds ) ) {
			return NULL;
		}

		$strSql = ' SELECT
                        mr.id,
                        mr.maintenance_request_type_id
					FROM
						maintenance_requests mr
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.id IN( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByPropertyIdsByCid( $arrintPropertyIds, $intCid, $objClientDatabase ) {
		if( false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}

		$arrintPropertyIds = implode( ',', $arrintPropertyIds );
		$strSql = 'SELECT
						DISTINCT vmr.property_id,
						(CASE WHEN vmr.id IS NOT NULL THEN 1 ELSE 0 END ) AS value
					FROM
						view_maintenance_requests AS vmr
						JOIN load_properties ( ARRAY[ ' . ( int ) $intCid . ' ] , ARRAY[ ' . $arrintPropertyIds . ' ] ) lp ON ( vmr.cid = lp.cid AND vmr.property_id = lp.property_id AND lp.is_disabled = 0 )
						JOIN maintenance_request_types mrt ON ( mrt.id = vmr.maintenance_request_type_id )
						JOIN properties p ON (vmr.property_id = p.id AND vmr.cid = p.cid)
						JOIN maintenance_statuses mst ON ( vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id )
						JOIN maintenance_priorities mp ON (vmr.cid = mp.cid AND vmr.maintenance_priority_id = mp.id )
						JOIN property_products pp ON ( pp.cid = vmr.cid AND pp.property_id = vmr.property_id )
				WHERE
					p.is_disabled = 0
					AND vmr.cid = ' . ( int ) $intCid . '
					AND vmr.parent_maintenance_request_id IS NULL
					AND vmr.deleted_by IS NULL
					AND mst.maintenance_status_type_id IN ( ' . \CMaintenanceStatusType::OPEN . ', ' . \CMaintenanceStatusType::SUSPENDED . ' )
					AND vmr.actual_start_datetime >= ( NOW() - INTERVAL \'7 Days\' )
					AND vmr.actual_start_datetime <= NOW()
					AND ( pp.ps_product_id IN ( ' . \CPsProduct::ENTRATA . ', ' . \CPsProduct::RESIDENT_PORTAL . ' ) )
					AND vmr.property_id IN (' . $arrintPropertyIds . ')';

		return \fetchData( $strSql, $objClientDatabase );
	}

	public function fetchNonCalendarEventMaintenanceRequestsByMaintenanceRequestIdsByCid( $arrintMaintenanceRequestIds, $intCid, $objDatabase ) {
		if( false == \valArr( $arrintMaintenanceRequestIds ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						mr.id,
						mprior.maintenance_priority_type_id,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
						mp.name AS maintenance_problem_name,
						mr.due_date,
						mrd.problem_description,
						pb.building_name,
						cu.id AS company_user_id,
						mr.maintenance_request_type_id,
						COALESCE(us.unit_number_cache, pu.unit_number) AS unit_number_cache
					FROM maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
						LEFT JOIN maintenance_locations ml ON ( mr.cid = ml.cid AND mr.maintenance_location_id = ml.id )
						LEFT JOIN maintenance_problems mp ON ( mr.cid = mp.cid AND mp.id = mr.maintenance_problem_id )
						JOIN maintenance_priorities mprior ON ( mr.cid = mprior.cid AND mr.maintenance_priority_id = mprior.id )
						LEFT JOIN leases l ON ( mr.cid = l.cid AND mr.property_id = l.property_id AND mr.lease_id = l.id )
						LEFT JOIN property_units pu ON ( mr.cid = pu.cid AND mr.property_id = pu.property_id AND ( ( l.property_unit_id = pu.id AND mr.lease_id IS NOT NULL ) OR ( mr.property_unit_id = pu.id AND mr.lease_id IS NULL ) ) )
						LEFT JOIN property_buildings pb ON ( pb.cid = pu.cid AND pb.property_id = pu.property_id AND pb.id = pu.property_building_id )
						LEFT JOIN inspections i ON ( i.cid = mr.cid AND mr.property_id = i.property_id AND i.maintenance_request_id = mr.id )
						LEFT JOIN unit_spaces us ON ( us.cid = mr.cid AND us.property_id = mr.property_id AND ( ( l.unit_space_id = us.id AND mr.lease_id IS NOT NULL ) OR ( mr.unit_space_id = us.id AND mr.lease_id IS NULL ) OR ( i.unit_space_id = us.id AND mr.lease_id IS NULL AND mr.unit_space_id IS NULL ) ) )
						LEFT JOIN company_users cu ON ( cu.cid = mr.cid AND cu.company_employee_id = mr.company_employee_id AND default_company_user_id IS NULL )
						JOIN calendar_event_types cet ON ( cet.cid = mr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
						LEFT JOIN calendar_events cev ON ( cev.cid = mr.cid AND cev.reference_id = mr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
					WHERE 
						mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' ) AND
						mr.cid = ' . ( int ) $intCid . ' AND
						mr.parent_maintenance_request_id IS NULL AND
						mr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::SERVICE_REQUEST . ', ' . \CMaintenanceRequestType::RECURRING . ' ) AND
						mr.deleted_on IS NULL AND
						mr.deleted_by IS NULL AND
						cev.id IS NULL
					ORDER BY mprior.maintenance_priority_type_id DESC';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByCustomerIdByLeaseIdByCid( $intCustomerId, $intLeaseId, $intCid, $objDatabase ) {
		if( false == \valId( $intCustomerId ) || false == \valId( $intLeaseId ) ) {
			return NULL;
		}

		$strSql = 'SELECT
							mr.*,
							mrd.permission_to_enter AS permission_to_enter,
							mrd.unit_number AS unit_number,
							mrd.completed_datetime AS completed_datetime,
							mrd.problem_description AS problem_description,
							mrd.scheduled_start_datetime AS scheduled_start_datetime,
							mrd.scheduled_end_datetime AS scheduled_end_datetime,
							mrd.additional_info,
							util_get_translated( \'name\', mp.name, mp.details ) AS maintenance_problem_name,
							mp1.id AS maintenance_category_id,
							util_get_translated( \'name\', mp1.name, mp1.details ) AS maintenance_category_name,
							util_get_translated( \'name\', mpr.name, mpr.details ) AS maintenance_priority_name,
							mpr.maintenance_priority_type_id,
							CASE WHEN ml.is_system = 1 THEN NULL
							ELSE util_get_translated( \'name\', ml.name, ml.details ) END AS maintenance_location_name,
							ms.maintenance_status_type_id,
							ms.name AS maintenance_status_name,
							mst.name AS maintenance_status_type_name
						FROM
							maintenance_requests mr
							JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
							LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id )
							LEFT JOIN maintenance_problems mp1 ON ( mp1.cid = mp.cid AND mp1.id = mp.maintenance_problem_id )
							LEFT JOIN maintenance_priorities mpr ON ( mpr.cid = mr.cid AND mpr.id = mr.maintenance_priority_id )
							LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
							LEFT JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
							LEFT JOIN maintenance_status_types mst ON ( ms.maintenance_status_type_id = mst.id )
						WHERE
							mr.cid = ' . ( int ) $intCid . '
							AND mr.customer_id = ' . ( int ) $intCustomerId . '
							AND mr.lease_id = ' . ( int ) $intLeaseId . '
							AND mr.deleted_by IS NULL
						ORDER BY
							mr.created_on DESC';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestStatusTimeByMaintenanceRequestIdsByMaintenanceStatusTypeByCid( $arrintMaintenanceRequestIds, $intMaintenanceStatusTypeId, $intCid, $objDatabase ) {

		if( false == \valArr( $arrintMaintenanceRequestIds ) || false == \valId( $intMaintenanceStatusTypeId ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						time_diff.maintenance_request_id,
						EXTRACT( DAY FROM time_diff.total_time ) ||  \' ' . __( 'days:' ) . ' \' || EXTRACT( HOUR FROM time_diff.total_time ) || \' ' . __( 'hrs:' ) . ' \' || EXTRACT( MINUTE  FROM time_diff.total_time ) || \' ' . __( 'mins:' ) . ' \'  || EXTRACT( SECOND FROM time_diff.total_time ) || \' ' . __( 'secs' ) . ' \' AS status_time
					FROM (
							WITH diffs AS (
								SELECT
									mrl.maintenance_status_type_id,
									CASE
										WHEN LEAD ( mrl.log_datetime ) OVER ( PARTITION BY mrl.maintenance_request_id ORDER BY mrl.log_datetime )::TIMESTAMP IS NULL THEN ( NOW ( )::TIMESTAMP - mrl.log_datetime::TIMESTAMP )
										ELSE ( LEAD ( mrl.log_datetime ) OVER ( PARTITION BY mrl.maintenance_request_id ORDER BY mrl.log_datetime )::TIMESTAMP - mrl.log_datetime::TIMESTAMP )
									END AS difference,
									mrl.cid AS cid,
									mrl.maintenance_request_id AS maintenance_request_id
								FROM maintenance_request_logs mrl
								JOIN
									(
										SELECT
											mrl1.id,
											mrl1.cid,
											mrl1.maintenance_request_id,
											mrl1.maintenance_status_type_id,
											ROW_NUMBER() OVER ( PARTITION BY mrl1.maintenance_request_id ORDER BY mrl1.id DESC ) AS rownumber
										FROM
											maintenance_request_logs mrl1
										WHERE
											mrl1.cid = ' . ( int ) $intCid . '
											AND mrl1.maintenance_request_id IN( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )
										ORDER BY
											mrl1.maintenance_request_id
									) sub ON ( sub.cid = mrl.cid AND sub.maintenance_request_id = mrl.maintenance_request_id AND sub.rownumber = 1 AND sub.maintenance_status_type_id = ' . ( int ) $intMaintenanceStatusTypeId . ' )
								WHERE
									mrl.cid = ' . ( int ) $intCid . '
									AND ( mrl.old_maintenance_status_id <> mrl.maintenance_status_id OR mrl.old_maintenance_status_id IS NULL )
							)
							SELECT
								diffs.maintenance_request_id AS maintenance_request_id,
								SUM ( CASE WHEN diffs.maintenance_status_type_id = ' . ( int ) $intMaintenanceStatusTypeId . ' THEN diffs.difference END ) AS total_time,
								diffs.cid AS cid
							FROM diffs
							GROUP BY
								diffs.cid,
								diffs.maintenance_request_id
						) time_diff
					GROUP BY
						time_diff.maintenance_request_id,
						time_diff.total_time';

		$arrmixResult = \fetchData( $strSql, $objDatabase );

		if( true == \valArr( $arrmixResult ) ) {
			return \rekeyArray( 'maintenance_request_id', $arrmixResult );
		}
	}

	public function fetchSimpleMaintenanceRequestsByMaintenanceRequestIdsByCid( $arrintMaintenanceRequestIds, $intCid, $objDatabase, $boolIsForVendors ) {

		if( false == \valArr( $arrintMaintenanceRequestIds ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						mr.id,
						mr.maintenance_location_id,
						mr.parent_maintenance_request_id AS parent_id,
						mr.maintenance_request_type_id,
						COALESCE( pb.building_name, pb1.building_name ) AS building_name,
						CASE WHEN us.id IS NOT NULL THEN us.unit_number_cache ELSE pu.unit_number END AS unit_number_cache,
						CASE WHEN ml.is_system = 1 THEN NULL WHEN puml.name IS NOT NULL THEN puml.name ELSE ml.name END AS maintenance_location_name,
						mp.name AS maintenance_problem_name,
						mrd.problem_description,
						mr.property_id,
						mrd.scheduled_end_datetime,';

		if( true == $boolIsForVendors ) {
			$strSql .= 'mr.ap_payee_id,
						ap.company_name ';
		} else {
			$strSql .= 'mr.company_employee_id,
						ce.name_first,
						ce.name_last,
						mpt.name AS maintenance_priority_name ';
		}

		$strSql .= 'FROM maintenance_requests mr
					JOIN maintenance_request_details mrd ON ( mr.id = mrd.maintenance_request_id AND mr.cid = mrd.cid )';

		if( true == $boolIsForVendors ) {
			$strSql .= 'JOIN ap_payees ap ON ( mr.ap_payee_id = ap.id AND mr.cid = ap.cid )';
		} else {
			$strSql .= 'JOIN company_employees ce ON ( mr.company_employee_id = ce.id AND mr.cid = ce.cid )
						JOIN maintenance_priorities mpt ON ( mpt.cid = mr.cid AND mpt.id = mr.maintenance_priority_id )';
		}

		$strSql .= 'LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND mr.maintenance_location_id = ml.id )
						LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id )
						LEFT JOIN property_buildings pb ON ( pb.cid = mr.cid AND pb.property_id = mr.property_id AND pb.id = mr.property_building_id )
		 				LEFT JOIN unit_spaces us ON( mr.unit_space_id = us.id AND mr.cid = us.cid )
		 				LEFT JOIN property_buildings pb1 ON( us.property_building_id = pb1.id AND us.cid = pb1.cid )
		 				LEFT JOIN property_units pu ON ( pu.cid = mr.cid AND pu.id = mr.property_unit_id )
		 				JOIN maintenance_statuses ms ON( ms.id = mr.maintenance_status_id AND ms.cid = mr.cid )
		 				LEFT JOIN property_unit_maintenance_locations puml ON (mr.cid = puml.cid AND mr.property_unit_maintenance_location_id = puml.id)
					WHERE
						mr.cid = ' . ( int ) $intCid . ' 
						AND mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )
						AND ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' )
						AND mr.deleted_by IS NULL ';
		if( true == $boolIsForVendors ) {
			$strSql .= ' ORDER BY mr.ap_payee_id ';
		} else {
			$strSql .= ' ORDER BY mr.company_employee_id ';
		}

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchPaginatedMaintenanceRequestsHistoryByMaintenanceFilter( $intPageNo, $intPageSize, $objDatabase, $objMaintenanceFilter, $boolIsCountOnly = false ) {
		$intOffset				= ( 0 < $intPageNo ) ? $intPageSize * ( $intPageNo - 1 ) : 0;
		$intLimit				= $intPageSize;
		$strCustomerJoin		= ( true == \valId( $objMaintenanceFilter->getCustomerId() ) ) ? ' LEFT JOIN customers cust ON (vmr.cid = cust.cid AND vmr.customer_id = cust.id) ' : NULL;

		if( true == $boolIsCountOnly ) {
			$strSql = 'SELECT
							COUNT(vmr.id) AS maintenance_request_count';

		} else {
			$strSql = 'SELECT 
							vmr.id,
							vmr.customer_id,
							vmr.lease_id,
							vmr.customer_name_first,
							vmr.customer_name_last,
							vmr.created_on,
							vmr.maintenance_priority_id,
							vmr.maintenance_location_id,
							vmr.maintenance_problem_id,
							vmr.problem_description,
							vmr.scheduled_start_datetime,
							CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
							ml.maintenance_location_type_id AS maintenance_location_type,
							mp.name AS maintenance_priority_name,
							mst.name AS maintenance_status_name,
							ce.name_first,
							ce.name_last,
							mrd.requested_datetime';
		}

		$strSql .= ' FROM view_maintenance_requests AS vmr
							JOIN load_properties(ARRAY [ ' . ( int ) $objMaintenanceFilter->getCid() . ' ], ARRAY [ ' . implode( ',', $objMaintenanceFilter->getPropertyGroupIds() ) . ' ]) lp ON (vmr.cid = lp.cid AND vmr.property_id = lp.property_id AND lp.is_disabled = 0)
							JOIN maintenance_request_types mrt ON (mrt.id = vmr.maintenance_request_type_id)
							JOIN maintenance_request_details mrd ON (mrd.maintenance_request_id = vmr.id)
							JOIN maintenance_statuses mst ON (vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id)
							JOIN maintenance_priorities mp ON (vmr.cid = mp.cid AND vmr.maintenance_priority_id = mp.id)
							LEFT JOIN maintenance_problems mprob ON (vmr.cid = mprob.cid AND vmr.maintenance_problem_id = mprob.id AND mprob.maintenance_problem_type_id IN ( ' . \CMaintenanceProblemType::MAINTENANCE_PROBLEM . ' ))
							LEFT JOIN maintenance_locations ml ON (ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
							LEFT JOIN company_employees ce ON (vmr.cid = ce.cid AND vmr.company_employee_id = ce.id)
							' . $strCustomerJoin . '
						WHERE vmr.cid = ' . ( int ) $objMaintenanceFilter->getCid() . ' 
							AND vmr.parent_maintenance_request_id IS NULL 
							AND vmr.deleted_by IS NULL
							AND vmr.maintenance_request_type_id <> ' . \CMaintenanceRequestType::MAKE_READY;

		if( true == \valId( $objMaintenanceFilter->getCustomerId() ) ) {
			$strSql .= ' AND vmr.customer_id = ' . $objMaintenanceFilter->getCustomerId();
		}

		if( true == \valArr( $objMaintenanceFilter->getMaintenanceStatusTypeIds() ) ) {
			$strSql .= ' AND mst.maintenance_status_type_id IN ( ' . implode( ' , ', $objMaintenanceFilter->getMaintenanceStatusTypeIds() ) . ' )';
		}

		if( true == \valStr( $objMaintenanceFilter->getCreatedOnFrom() ) ) {
			$strSql .= ' AND vmr.actual_start_datetime >= \'' . date( 'Y-m-d', strtotime( $objMaintenanceFilter->getCreatedOnFrom() ) ) . ' 00:00:00\'';
		}

		if( true == \valStr( $objMaintenanceFilter->getCreatedOnTo() ) ) {
			$strSql .= ' AND vmr.actual_start_datetime <= \'' . date( 'Y-m-d', strtotime( $objMaintenanceFilter->getCreatedOnTo() ) ) . ' 23:59:59\'';
		}

		if( false == $boolIsCountOnly ) {
			$strSql .= '	ORDER BY
								vmr.updated_on DESC,
								vmr.actual_start_datetime DESC
							OFFSET ' . ( int ) $intOffset . ' LIMIT ' . ( int ) $intLimit;
		}

		if( true == $boolIsCountOnly ) {
			$arrintMaintenanceRequests = ( array ) \fetchData( $strSql, $objDatabase );
			return ( true == isset( $arrintMaintenanceRequests[0]['maintenance_request_count'] ) ) ? $arrintMaintenanceRequests[0]['maintenance_request_count'] : 0;
		} else {
			return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
		}
	}

	public function fetchMaintenanceRequestsByLeaseStatusTypeIdsByCids( $arrintLeaseStatusTypeIds, $arrintCids, $objDatabase, $boolIsReturnKeyedArray = true ) {

		if( false == \valArr( $arrintLeaseStatusTypeIds ) || false == \valArr( $arrintCids ) ) {
			return NULL;
		}

		$strSql = 'SELECT util_set_locale(\'' . \CLocaleContainer::createService()->getLocaleCode() . '\', \'' . \CLocaleContainer::createService()->getDefaultLocaleCode() . '\');';
		$strSql .= 'with vmr_temp as ( SELECT 
													util_get_translated( \'problem_description\', problem_description, details ) AS problem_description,
													util_get_translated( \'additional_info\', additional_info, details ) AS additional_info,
													util_get_translated( \'location_specifics\', location_specifics, details ) AS location_specifics,
													util_get_translated( \'ignore_response_reason\', ignore_response_reason, details ) AS ignore_response_reason,
													util_get_translated( \'customer_name_first\', customer_name_first, details ) AS customer_name_first,
													util_get_translated( \'customer_name_last\', customer_name_last, details ) AS customer_name_last,
													util_get_translated( \'unit_number\', unit_number, details ) AS unit_number,
													*
												FROM
													view_maintenance_requests vmr
												WHERE
													vmr.completed_datetime > date_trunc( \'day\', ( now() - interval \'36 hours\' ) )
													AND vmr.maintenance_request_type_id <> ' . \CMaintenanceRequestType::MAKE_READY . '
													AND vmr.parent_maintenance_request_id IS NULL
													AND vmr.sms_confirmed_on IS NULL )
						SELECT * FROM (
								SELECT
									DISTINCT ON ( vmr.id )
										vmr.*,
										l.unit_number_cache as unit_number,
										l.property_id,
										ms.maintenance_status_type_id,
				    					NULL as message_operator_id ,
										CASE
											WHEN ( vmr.main_phone_number_type_id = ' . \CPhoneNumberType::MOBILE . ' AND vmr.main_phone_number IS NOT NULL AND 10 <= char_length( vmr.main_phone_number ) )
											THEN vmr.main_phone_number
											WHEN ( vmr.alt_phone_number_type_id = ' . \CPhoneNumberType::MOBILE . ' AND vmr.alt_phone_number IS NOT NULL AND 10 <= char_length( vmr.alt_phone_number ) )
											THEN vmr.alt_phone_number
											WHEN ( c.mobile_number IS NOT NULL AND 10 <= char_length( c.mobile_number ) )
											THEN c.mobile_number
											ELSE NULL
										END AS mobile_phone_number
									FROM
										customers c
										JOIN lease_customers lc ON ( lc.cid = c.cid AND c.id = lc.customer_id )
										JOIN cached_leases l ON ( l.cid =lc.cid AND lc.lease_id = l.id )
										JOIN sms_enrollments se ON ( se.cid = c.cid AND se.customer_id = c.id )
										JOIN properties p ON ( p.cid =l.cid AND l.property_id = p.id )
										JOIN time_zones tz ON ( p.time_zone_id = tz.id )
										JOIN vmr_temp vmr ON (vmr.cid = lc.cid AND l.id = vmr.lease_id AND c.id = vmr.customer_id)
										JOIN maintenance_statuses ms ON ( ms.cid = vmr.cid AND ms.id = vmr.maintenance_status_id )
										LEFT JOIN property_gl_settings pgs ON ( pgs.cid = p.cid and pgs.property_id = p.id ) 
									WHERE
										vmr.cid = l.cid
										AND lc.lease_status_type_id IN ( ' . implode( ',', $arrintLeaseStatusTypeIds ) . ' )
										AND c.cid IN ( ' . implode( ',', $arrintCids ) . ' )
										AND date_part( \'hour\', ( NOW() AT TIME ZONE tz.time_zone_name )) >= \'9\'
										AND date_part( \'hour\', ( NOW() AT TIME ZONE tz.time_zone_name )) <= \'20\'
										AND se.message_type_id = ' . \CMessageType::MAINTENANCE_NOTIFICATION . '
										AND se.disabled_on IS NULL
										AND pgs.is_ar_migration_mode = false
										AND pgs.is_ap_migration_mode = false
								) AS sub_query
							WHERE
								mobile_phone_number IS NOT NULL';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase, $boolIsReturnKeyedArray );
	}

	public function fetchMaintenanceRequestsCountForWebServicesByPropertyIdsByCid( $arrintPropertyIds, $intCid, $objDatabase, $intPropertyUnitId = NULL, $intExcludeMaintenanceRequestId = NULL ) {

		if( false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}

		$strWhereCondition = ' ';

		// Total Dashboard Unassigned Work Order Count
		$strSelectFields = 'COALESCE(mr_counts.total_unassigned_count, 0) AS total_unassigned_count';
		$strSelectSubSQLFields = 'count( CASE WHEN mr.company_employee_id IS NULL THEN 1 END ) AS total_unassigned_count';
		$arrintIncludeStatusIds = [ \CMaintenanceStatusType::OPEN, \CMaintenanceStatusType::SUSPENDED ];
		if( true == \valId( $intPropertyUnitId ) ) {
			$strWhereCondition = ' AND mr.property_unit_id = ' . $intPropertyUnitId;
			$strSelectSubSQLFields = 'count( CASE WHEN ms.maintenance_status_type_id IN ( ' . \sqlIntImplode( $arrintIncludeStatusIds ) . ' ) THEN 1 END ) AS total_open_work_orders,
										count( CASE WHEN ms.maintenance_status_type_id IN ( ' . \CMaintenanceStatusType::COMPLETED . ' ) THEN 1 END ) AS total_closed_work_orders';

			// Unit info - Total open and closed Work order count
			$strSelectFields = 'COALESCE(mr_counts.total_open_work_orders, 0) AS total_open_work_orders,
								COALESCE(mr_counts.total_closed_work_orders, 0) AS total_closed_work_orders';

			$arrintIncludeStatusIds = array_merge( $arrintIncludeStatusIds, [ \CMaintenanceStatusType::COMPLETED ] );

			if( true == \valId( $intExcludeMaintenanceRequestId ) ) {
				$strWhereCondition .= ' AND mr.id <> ' . $intExcludeMaintenanceRequestId;
			}
		}

		$strSql = ' SELECT p.id AS property_id,
							COALESCE(mr_counts.total_count, 0) AS total_cnt,
							' . $strSelectFields . '
					FROM properties p
					LEFT JOIN ( SELECT
									mr.property_id,
									count( mr.id ) AS total_count,
									' . $strSelectSubSQLFields . '
								FROM
									maintenance_requests mr
									JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
								WHERE
									mr.cid = ' . ( int ) $intCid . '
									AND mr.property_id IN ( ' . \sqlIntImplode( $arrintPropertyIds ) . ' )
									AND mr.deleted_by IS NULL
									AND mr.parent_maintenance_request_id IS NULL
									AND ms.maintenance_status_type_id IN ( ' . \sqlIntImplode( $arrintIncludeStatusIds ) . ' )
									AND ms.is_published = 1
									AND mr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::SERVICE_REQUEST . ', ' . \CMaintenanceRequestType::RECURRING . ' )
									' . $strWhereCondition . '
								GROUP BY
									mr.property_id
								) mr_counts ON p.cid = ' . ( int ) $intCid . ' AND p.id = mr_counts.property_id
					WHERE
						p.cid = ' . ( int ) $intCid . '
						AND p.id IN ( ' . \sqlIntImplode( $arrintPropertyIds ) . ' )';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchDashboardPropertyMaintenanceRequestsForWebServicesByPropertyIdsByCid( $arrintPropertyIds, $intCid, $objDatabase, $intCustomerId = NULL, $intParentMaintenanceRequestId = NULL, $intPropertyUnitId = NULL, $intUnitSpaceId = NULL, $intExcludeMaintenanceRequestId = NULL, $boolIsLoadClosedWO = false ) {

		if( false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}

		$strWhereCondition              = ' AND vmr.parent_maintenance_request_id IS NULL ';
		$strWhereStatusType             = \CMaintenanceStatusType::OPEN . ', ' . \CMaintenanceStatusType::SUSPENDED;
		$strMaintenanceStatusTypeClosed = '';

		if( true == \valId( $intParentMaintenanceRequestId ) ) {
			$strWhereCondition = ' AND vmr.parent_maintenance_request_id = ' . $intParentMaintenanceRequestId;
			$strMaintenanceStatusTypeClosed = ', ' . \CMaintenanceStatusType::COMPLETED;
		}

		if( true == \valId( $intCustomerId ) ) {
			$strWhereCondition .= ' AND vmr.customer_id = ' . $intCustomerId;
		}

		if( true == \valId( $intPropertyUnitId ) ) {
			$strWhereCondition .= ' AND vmr.property_unit_id = ' . $intPropertyUnitId;

			if( true == \valId( $intUnitSpaceId ) ) {
				$strWhereCondition .= ' AND vmr.unit_space_id = ' . $intUnitSpaceId;
			}

			if( true == \valId( $intExcludeMaintenanceRequestId ) ) {
				$strWhereCondition .= ' AND vmr.id <> ' . $intExcludeMaintenanceRequestId;
				if( true == $boolIsLoadClosedWO ) {
					$strMaintenanceStatusTypeClosed = \CMaintenanceStatusType::COMPLETED;
					$strWhereStatusType             = '';
				}
			}
		}

		$strSql = ' SELECT
						vmr.id,
						vmr.property_id,
						vmr.maintenance_location_id,
						vmr.maintenance_problem_id,
						vmr.maintenance_request_type_id,
						vmr.company_employee_id,
						us.building_name,
						COALESCE ( us.unit_number_cache, pu.unit_number ) AS unit_number_cache,
						ms.maintenance_status_type_id,
						vmr.remote_primary_key,
						vmr.actual_start_datetime,
						mp.maintenance_priority_type_id,
						ms.maintenance_status_type_id,
						vmr.completed_datetime,
						vmr.created_on
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses ms ON ( ms.cid = vmr.cid AND ms.id = vmr.maintenance_status_id )
						JOIN maintenance_priorities mp ON ( mp.cid = vmr.cid and mp.id = vmr.maintenance_priority_id )
						LEFT JOIN property_units pu ON ( pu.cid = vmr.cid AND pu.id = vmr.property_unit_id )
						LEFT JOIN unit_spaces us ON ( us.cid = vmr.cid AND us.id = vmr.unit_space_id )
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.property_id IN ( ' . \sqlIntImplode( $arrintPropertyIds ) . ' )
						' . $strWhereCondition . '
						AND vmr.deleted_by IS NULL
						AND ms.maintenance_status_type_id IN ( ' . $strWhereStatusType . $strMaintenanceStatusTypeClosed . ' )
						AND ms.is_published = 1
						AND vmr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::SERVICE_REQUEST . ', ' . \CMaintenanceRequestType::RECURRING . ' ) ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByPropertyIdsByMaintenanceRequestsByCid( $arrintPropertyIds, $arrintMaintenanceRequestIds, $intCid, $objDatabase, $arrintMaintenanceLocationProblemIds = NULL, $intCompanyEmployeeId = NULL, $boolIsFetchClosedWO = false, $intLastSyncOn = NULL, $boolIsFetchMakeReadies = false ) {

		if( false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}

		$boolIsAddPartition   = \CInspectionApiLibrary::USE_PARTITION_WITH_LIMIT;
		$strWherePartitionSql = '';
		if( true == $boolIsAddPartition ) {
			$strWherePartitionSql = ', row_number() OVER( PARTITION BY mr.property_id, mr.maintenance_request_type_id ORDER BY mr.updated_on DESC ) AS property_rownum ';
		}
		$arrintMaintenanceStatuses     = [ \CMaintenanceStatusType::OPEN, \CMaintenanceStatusType::SUSPENDED ];
		$arrintMaintenanceRequestTypes = [ \CMaintenanceRequestType::SERVICE_REQUEST, \CMaintenanceRequestType::RECURRING ];
		if( true == $boolIsFetchMakeReadies ) {
			$arrintMaintenanceRequestTypes[] = \CMaintenanceRequestType::MAKE_READY;
		}
		if( true == $boolIsFetchClosedWO || true == \valId( $intLastSyncOn ) ) {
			$arrintMaintenanceStatuses = array_merge( $arrintMaintenanceStatuses, [ \CMaintenanceStatusType::CANCELLED, \CMaintenanceStatusType::COMPLETED ] );
		}
		$strWhereSql = ' AND ( ms.maintenance_status_type_id IN ( ' . \sqlIntImplode( $arrintMaintenanceStatuses ) . ' ) OR mr.parent_maintenance_request_id IS NOT NULL ) ';

		if( true == \valArr( $arrintMaintenanceLocationProblemIds ) ) {
			$arrintMaintenanceStatuses = [ \CMaintenanceStatusType::COMPLETED ];
			$strWhereSql               = ' AND ( ms.maintenance_status_type_id IN ( ' . \sqlIntImplode( $arrintMaintenanceStatuses ) . ' )  OR mr.parent_maintenance_request_id IS NOT NULL ) AND mr.created_on > \'' . date( 'Y-m-d', strtotime( '-1 Year' ) ) . '\' AND ( ( ( mr.maintenance_location_id, mr.maintenance_problem_id ) IN ( ' . \sqlIntMultiImplode( $arrintMaintenanceLocationProblemIds ) . ' ) AND mr.parent_maintenance_request_id IS NULL ) OR mr.parent_maintenance_request_id IS NOT NULL ) ';
		}

		if( true == \valId( $intCompanyEmployeeId ) ) {
			$strWhereSql .= ' AND ( mr.company_employee_id = ' . $intCompanyEmployeeId . ' AND mr.parent_maintenance_request_id IS NULL ) ';
		}

		$strWhereIdsSql = '';
		if( true == \valArr( $arrintMaintenanceRequestIds ) ) {
			$strWhereIdsSql = ' AND mr.id IN ( ' . \sqlIntImplode( $arrintMaintenanceRequestIds ) . ') ';
		}
		$strSqlIgnoreDeleted = ' AND mr.deleted_by IS NULL ';
		$strOptionalJoins    = '';
		if( true == \valId( $intLastSyncOn ) ) {
			if( true == \valStr( $strWhereIdsSql ) ) {
				$strWhereIdsSql = '';
				$strWhereSql   .= ' AND ( mr.id IN ( ' . \sqlIntImplode( $arrintMaintenanceRequestIds ) . ' ) OR ( mr.parent_maintenance_request_id IN ( ' . \sqlIntImplode( $arrintMaintenanceRequestIds ) . ' ) AND ( mr.updated_on > \'' . date( 'Y-m-d H:i:s', $intLastSyncOn ) . '\' OR mrn.updated_on > \'' . date( 'Y-m-d H:i:s', $intLastSyncOn ) . '\' OR fa.updated_on > \'' . date( 'Y-m-d H:i:s', $intLastSyncOn ) . '\' OR fn.updated_on > \'' . date( 'Y-m-d H:i:s', $intLastSyncOn ) . '\' ) ) ) ';
			} else {
				$strWhereSql .= ' AND ( mr.updated_on > \'' . date( 'Y-m-d H:i:s', $intLastSyncOn ) . '\' OR mrn.updated_on > \'' . date( 'Y-m-d H:i:s', $intLastSyncOn ) . '\' OR fa.updated_on > \'' . date( 'Y-m-d H:i:s', $intLastSyncOn ) . '\' OR fn.updated_on > \'' . date( 'Y-m-d H:i:s', $intLastSyncOn ) . '\' ) ';
			}
			$strSqlIgnoreDeleted = ' ';
			$strOptionalJoins    = ' LEFT JOIN maintenance_request_notes mrn ON ( mrn.cid = mr.cid AND mrn.maintenance_request_id = mr.id ) 
								LEFT JOIN file_associations fa ON ( fa.cid = mr.cid AND fa.maintenance_request_id = mr.id ) 
								LEFT JOIN files f on ( f.cid = fa.cid AND f.id = fa.file_id ) 
								LEFT JOIN file_notes fn on ( fa.cid = fn.cid AND f.id = fn.file_id ) ';
		}

		$strSql = ' SELECT
						DISTINCT ON (mr.id) 
						mr.id,
						mr.property_id,
						mr.maintenance_request_type_id,
						mr.maintenance_status_id,
						mr.maintenance_location_id,
						mr.maintenance_problem_id,
						mr.sub_maintenance_problem_id AS maintenance_action_id,
						mr.maintenance_priority_id,
						mr.company_employee_id,
						mr.due_date,
						mr.remote_primary_key,
						mr.parent_maintenance_request_id,
						mr.updated_on,
						mr.created_on,
						mr.maintenance_group_id,
						mr.ps_product_id AS origin_id,
						mrd.actual_start_datetime,
						mrd.completed_datetime,
						util_get_translated( \'problem_description\', mrd.problem_description, mrd.details, \'' . \CLocaleContainer::createService()->getTargetLocaleCode() . '\'  ) AS problem_description,
						mrd.scheduled_start_datetime,
						mrd.scheduled_end_datetime,
						mrd.requested_datetime,
						CASE
							WHEN date_part ( \'hour\', mrd.requested_datetime ) >= 0 AND date_part ( \'hour\', mrd.requested_datetime ) <= 11 THEN
								\'Morning\'
							ELSE
								\'Afternoon\'
						END AS requested_time,
						mrd.permission_to_enter,
						mrd.is_pet,
						ms.maintenance_status_type_id,
						mp.maintenance_priority_type_id,
						ld.alarm_key AS alarm_code,
						pu.id AS property_unit_id,
						us.id AS unit_space_id,
						COALESCE ( us.unit_number_cache, pu.unit_number ) AS unit_number_cache,
						l.id AS lease_id,
						c.id AS customer_id,
						ap.company_name AS vendor_name,
						mrd.required_response_datetime,
						mr.deleted_on' . $strWherePartitionSql . '
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
						JOIN maintenance_priorities mp ON ( mp.cid = mr.cid and mp.id = mr.maintenance_priority_id )
						LEFT JOIN leases l ON ( l.cid = mr.cid AND l.property_id = mr.property_id AND l.id = mr.lease_id AND l.unit_space_id IS NOT NULL )
						LEFT JOIN lease_details ld ON ( ld.cid = l.cid AND ld.lease_id = l.id )
						LEFT JOIN property_units pu ON (pu.cid = mr.cid AND pu.property_id = mr.property_id AND ( pu.id = mr.property_unit_id OR pu.id = l.property_unit_id ) ) 
						LEFT JOIN unit_spaces us ON ( us.cid = pu.cid AND us.property_id = pu.property_id AND us.property_unit_id = pu.id AND ( us.id = mr.unit_space_id OR us.id = l.unit_space_id ) )
						LEFT JOIN customers c ON ( mr.cid = c.cid AND mr.customer_id = c.id AND l.id IS NOT NULL )
						LEFT JOIN ap_payees ap ON ( ap.cid = mrd.cid AND ap.id = mr.ap_payee_id ) ' . $strOptionalJoins . '
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id IN ( ' . \sqlIntImplode( $arrintPropertyIds ) . ' )
						' . $strSqlIgnoreDeleted . $strWhereSql . ' 
						AND ms.is_published = 1
						' . $strWhereIdsSql . '
						AND mr.maintenance_request_type_id IN ( ' . \sqlIntImplode( $arrintMaintenanceRequestTypes ) . ' ) 
						AND pu.deleted_on IS NULL 
						AND pu.deleted_by IS NULL
						AND us.deleted_on IS NULL 
						AND us.deleted_by IS NULL
					ORDER BY 
						mr.id, 
						mr.updated_on DESC';

		// Adding partitioning to improve the SQL performance
		if( true == $boolIsAddPartition ) {
			$strSql = ' SELECT * FROM ( ' . $strSql . ' ) AS tmp WHERE property_rownum <= ' . \CInspectionApiLibrary::MAX_NUMBER_OF_RECORDS_PER_WORK_ORDER_TYPE_PER_PROPERTY;
		}

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestDetailsForWebServicesByIdByPropertyIdByCid( $intMaintenanceRequestId, $intPropertyId, $intCid, $objDatabase ) {

		$strSql = ' SELECT
						mr.id,
						mr.property_id,
						mr.maintenance_status_id,
						mr.maintenance_priority_id,
						mr.maintenance_location_id,
						mr.maintenance_problem_id,
						mr.maintenance_request_type_id,
						mr.sub_maintenance_problem_id AS maintenance_action_id,
						mrd.problem_description,
						mr.due_date,
						mrd.scheduled_start_datetime,
						mrd.scheduled_end_datetime,
						mrd.requested_datetime,
						CASE
							WHEN date_part ( \'hour\', mrd.requested_datetime ) >= 0 AND date_part ( \'hour\', mrd.requested_datetime ) <= 11 THEN
								\'Morning\'
							ELSE
								\'Afternoon\'
						END AS requested_time,
						mr.company_employee_id,
						mrd.is_pet,
						ld.alarm_key AS alarm_code,
						pb.building_name,
						pu.id AS property_unit_id,
						us.id AS unit_space_id,
						COALESCE ( us.unit_number_cache, pu.unit_number ) AS unit_number_cache,
						l.id AS lease_id,
						CASE 
							WHEN l.id IS NOT NULL THEN 
								COALESCE ( mrd.customer_name_first, c.name_first ) 
							ELSE 
								NULL 
						END AS customer_name_first,
						CASE 
							WHEN l.id IS NOT NULL THEN 
								COALESCE ( mrd.customer_name_last, c.name_last ) 
							ELSE 
								NULL 
						END AS customer_name_last,
						CASE 
							WHEN l.id IS NOT NULL THEN 
								mrd.email_address 
							ELSE 
								NULL 
						END AS email_address,
						CASE 
							WHEN l.id IS NOT NULL THEN 
								mrd.main_phone_number 
							ELSE 
								NULL 
						END AS main_phone_number,
						mrn.note AS entry_note,
						c.id AS customer_id,
						ap.company_name AS vendor_name,
						mr.created_on,
						mr.remote_primary_key,
						mrd.actual_start_datetime,
						ms.maintenance_status_type_id,
						mp.maintenance_priority_type_id,
						mr.parent_maintenance_request_id,
						mrd.permission_to_enter,
						pu.number_of_bedrooms,
						pu.number_of_bathrooms,
						pu.square_feet,
						pf.floorplan_name,
						pfl.floor_number,
						c.name_full AS customer_full_name
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
						JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
						JOIN maintenance_priorities mp ON ( mp.cid = mr.cid and mp.id = mr.maintenance_priority_id )
						LEFT JOIN leases l ON ( l.cid = mr.cid AND l.property_id = mr.property_id AND l.id = mr.lease_id )
						LEFT JOIN lease_details ld ON ( ld.cid = l.cid AND ld.lease_id = l.id )
						LEFT JOIN property_units pu ON (pu.cid = mr.cid AND pu.property_id = mr.property_id AND pu.id = mr.property_unit_id )
						LEFT JOIN property_buildings pb ON ( pb.cid = pu.cid AND pb.property_id = pu.property_id AND pb.id = pu.property_building_id )
						LEFT JOIN property_floorplans pf ON (pf.cid = pu.cid AND pf.property_id = pu.property_id AND pf.id = pu.property_floorplan_id ) 
						LEFT JOIN property_floors pfl ON (pfl.cid = pu.cid AND pfl.property_id = pu.property_id AND pfl.id = pu.property_floor_id ) 
						LEFT JOIN unit_spaces us ON ( us.cid = mr.cid AND us.property_id = mr.property_id AND us.property_unit_id = mr.property_unit_id AND us.id = mr.unit_space_id )
						LEFT JOIN customers c ON ( mr.cid = c.cid AND mr.customer_id = c.id AND l.id IS NOT NULL )
						LEFT JOIN maintenance_request_notes mrn ON ( mrn.maintenance_request_id = mr.id AND mrn.cid = mr.cid AND mrn.is_entry_note = true )
						LEFT JOIN ap_payees ap ON ( ap.cid = mrd.cid AND ap.id = mr.ap_payee_id )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id = ' . ( int ) $intPropertyId . '
						AND mr.id = ' . ( int ) $intMaintenanceRequestId . '
						AND mr.deleted_by IS NULL ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestTabsCountByMaintenanceRequestIdsByCid( $arrintMaintenanceRequestIds, $intCid, $objDatabase ) {
		if( false == \valArr( $arrintMaintenanceRequestIds ) ) {
			return NULL;
		}

		$strSql = '	SELECT
						mr.id,
						COUNT( DISTINCT ( smr.id ) ) AS sub_task_count,
						COUNT( DISTINCT ( mrl.id ) ) AS labor_count,
						COUNT( DISTINCT ( f.id ) ) AS attachment_count
					FROM
						maintenance_requests mr
						LEFT JOIN maintenance_requests smr ON ( smr.cid = mr.cid AND smr.property_id = mr.property_id AND smr.parent_maintenance_request_id = mr.id AND smr.deleted_on IS NULL )
						LEFT JOIN maintenance_request_labors mrl ON ( mrl.cid = mr.cid AND mrl.maintenance_request_id = mr.id AND mrl.deleted_on IS NULL )
						LEFT JOIN file_associations fa ON ( fa.cid = mr.cid AND fa.maintenance_request_id = mr.id AND fa.deleted_on IS NULL )
						LEFT JOIN files f ON ( f.cid = fa.cid AND f.id = fa.file_id AND f.file_extension_id IN ( ' . \sqlIntImplode( \CFileExtension::$c_arrintImageExtensionIds ) . ' ) )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.id IN ( ' . implode( ',', $arrintMaintenanceRequestIds ) . ' )
						AND mr.deleted_by IS NULL
					GROUP BY
						mr.id ';

		return \rekeyArray( 'id', \fetchData( $strSql, $objDatabase ) );
	}

	public function fetchMaintenanceRequestByApPayeeIdByCid( $intApPayeeId, $intCid, $objDatabase ) {

		if( false == \valId( $intApPayeeId ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						mr.*
					FROM
						maintenance_requests mr
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.ap_payee_id = ' . ( int ) $intApPayeeId . '
						LIMIT 1';

		return $this->fetchMaintenanceRequest( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestCountByIdByCustomerIdByCid( $intId, $intCustomerId, $intCid, $objDatabase, $intPropertyUnitId = NULL ) {

		if( true == \valId( $intPropertyUnitId ) ) {
			$strSelectSql = ' property_unit_id = ' . ( int ) $intPropertyUnitId;
		} else {
			$strSelectSql = ' customer_id = ' . ( int ) $intCustomerId;
		}

		$strWhere = ' WHERE id = ' . ( int ) $intId . ' 
							AND' . $strSelectSql . '
							AND cid = ' . ( int ) $intCid;

		return $this->fetchMaintenanceRequestCount( $strWhere, $objDatabase );
	}

	public function fetchMaintenanceRequestsByPropertyIdByCidByPropertyUnitIdOrMaintenanceLocationId( $intOffset, $intLimit, $intPropertyId, $intCid, $objDatabase, $intPropertyUnitId = NULL, $intMaintenanceLocationId = NULL, $boolIsCountOnly = false ) {

		if( ( false == \valId( $intPropertyUnitId ) && false == \valId( $intMaintenanceLocationId ) ) || false == \valId( $intPropertyId ) ) {
			return false;
		}

		if( true == $boolIsCountOnly ) {
			$strSqlSelect   = ' count(vmr.*) as count';
		} else {
			$strSqlSelect   = ' 	util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
										util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
										util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
										util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
										util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
										util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
										util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
										vmr.*,
								mp.name AS maintenance_problem_name,
								CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
								cmp.maintenance_priority_type_id';
		}

		$strSql = 'SELECT
						' . $strSqlSelect . '
					FROM
						view_maintenance_requests AS vmr
						LEFT JOIN maintenance_problems mp ON ( vmr.cid = mp.cid AND vmr.maintenance_problem_id = mp.id AND mp.maintenance_problem_type_id IN ( ' . \CMaintenanceProblemType::MAINTENANCE_PROBLEM . ' ) )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = vmr.cid AND ml.id = vmr.maintenance_location_id )
						JOIN maintenance_priorities cmp ON (vmr.cid=cmp.cid AND vmr.maintenance_priority_id = cmp.id)
						JOIN maintenance_statuses ms ON ( vmr.cid = ms.cid AND vmr.maintenance_status_id = ms.id )
					WHERE
						vmr.property_id = ' . ( int ) $intPropertyId;

		if( true == \valId( $intPropertyUnitId ) ) {
			$strSql .= '	AND vmr.property_unit_id = ' . ( int ) $intPropertyUnitId;
		} elseif( true == \valId( $intMaintenanceLocationId ) ) {
			$strSql .= '	AND vmr.maintenance_location_id = ' . ( int ) $intMaintenanceLocationId;
		}

		$strSql .= '	AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.maintenance_group_id IS NULL
						AND ms.maintenance_status_type_id = ' . \CMaintenanceStatusType::COMPLETED;
		if( false == $boolIsCountOnly ) {
			$strSql .= '	ORDER BY 
								vmr.id DESC,
								vmr.actual_start_datetime DESC
							OFFSET ' . ( int ) $intOffset . ' LIMIT ' . ( int ) $intLimit;
			return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
		} else {
			return \fetchData( $strSql, $objDatabase );
		}
	}

	public function fetchPaginatedMaintenanceRequestsByAssetIdByCid( $intAssetId, $intCid, $intPageNo, $intPageSize, $strOrderBy, $strOrderDirection, $objDatabase, $boolIsCount = false, $objCompanyPreference = NULL, $intMaintenanceRequestid = NULL ) {

		if( false == \valId( $intAssetId ) || false == \valId( $intCid ) ) {
			return false;
		}

		$strSearchByMaintenanceId = '';
		if( true != is_null( $intMaintenanceRequestid ) ) {
			$strSearchByMaintenanceId .= ' AND CAST(mr.id AS TEXT) LIKE \'%' . ( int ) $intMaintenanceRequestid . '%\'';
		}

		if( false == \valStr( $strOrderBy ) ) {

			if( false != \valObj( $objCompanyPreference, 'CCompanyPreference' ) && 0 == $objCompanyPreference->getValue() ) {
				$strOrderBy = 'maintenance_priority_type DESC NULLS LAST, maintenance_status_id ASC, scheduled_start_datetime ASC NULLS LAST, requested_datetime ASC NULLS LAST, reference DESC ';
			} else {

				$strOrderBy = 'reference DESC NULLS LAST';
			}

		}

		if( true == $boolIsCount ) {
			$strSql = ' SELECT 
							count( mr.* ) ';
		} else {

			$arrstrProductName = \CPsProduct::createService()->getProductNames();

			if( 1 !== preg_match( '(reference)', $strOrderBy ) && true == \valStr( $strOrderBy ) ) {
				$strOrderBy .= ' , reference ' . $strOrderDirection;
			}

			if( 1 == $intPageNo ) {
				$intOffset = $intPageSize;
			} elseif( 1 < $intPageNo ) {
				$intOffset = $intPageSize * ( $intPageNo );
			} else {
				$intOffset = 0;
			}

			$intLimit	= $intPageSize;

			$strSql = 'SELECT
						mr.id AS reference,
						mr.created_on AS request_created_on,
						CASE
							WHEN ms.maintenance_status_type_id NOT IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' )
							THEN abs( ( ( DATE_PART( \'day\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) * 24
										+ DATE_PART( \'hour\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) ) * 60
										+ DATE_PART( \'minute\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ) ) * 60
										+ DATE_PART( \'second\', NOW()::timestamp - mrd.actual_start_datetime::timestamp ))
							WHEN ms.maintenance_status_type_id IN ( ' . \CMaintenanceStatusType::COMPLETED . ' , ' . \CMaintenanceStatusType::CANCELLED . ' ) 
							THEN abs( ( ( DATE_PART( \'day\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) * 24
										+ DATE_PART( \'hour\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) ) * 60
										+ DATE_PART( \'minute\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) ) * 60
										+ DATE_PART( \'second\', mrd.completed_datetime - mrd.actual_start_datetime::timestamp ) )
						END AS time_open,
						mr.due_date,
						mr.remote_primary_key,
						mr.company_employee_id,
						mr.ap_payee_id,
						mr.maintenance_request_type_id,
						mr.cid,
						mr.ps_product_id,
						mr.maintenance_priority_id,
						mr.maintenance_status_id,
						mr.property_id,
						mr.printed_on,
						mr.property_unit_id,
						p.property_name AS property_name,
						mp.name AS maintenance_priority_name,
						mr.maintenance_problem_id,
						mr.maintenance_location_id,
						mrt.name AS maintenance_request_type,
						CASE WHEN ml.is_system = 1 THEN NULL ELSE ml.name END AS maintenance_location_name,
						mprob.name AS maintenance_problem_name,
						concat_ws( \' \', ce.name_first, ce.name_last ) AS assigned_to,
						ap.company_name AS vendor_name,
						CASE
							WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::RESIDENT_PORTAL . ' THEN
								\'' . $arrstrProductName[\CPsProduct::RESIDENT_PORTAL] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::LEASING_CENTER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::LEASING_CENTER] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::PMS_INTEGRATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::PMS_INTEGRATION] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::SITE_TABLET . ' THEN
								\'' . $arrstrProductName[\CPsProduct::SITE_TABLET] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::INSPECTION_MANAGER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::INSPECTION_MANAGER] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::API_SERVICES . ' THEN
								\'' . $arrstrProductName[\CPsProduct::API_SERVICES] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA_FACILITIES_APP . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_FACILITIES_APP] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATAMATION] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::CALL_TRACKER . ' THEN
								\'' . $arrstrProductName[\CPsProduct::CALL_TRACKER] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::ENTRATA_MOBILE_MAINTENANCE . ' THEN
								\'' . $arrstrProductName[\CPsProduct::ENTRATA_MOBILE_MAINTENANCE] . '\'
							WHEN mr.ps_product_id = ' . \CPsProduct::JOB_COSTING . ' THEN
								\'' . $arrstrProductName[\CPsProduct::JOB_COSTING] . '\'
						END AS origin,
						cev.start_datetime AS calendar_start_datetime,
						cev.end_datetime AS calendar_end_datetime,
						CASE         
                           	WHEN mrd.scheduled_start_datetime IS NOT NULL AND mrd.scheduled_end_datetime IS NOT NULL THEN mrd.scheduled_start_datetime
							WHEN mrd.scheduled_start_datetime IS NOT NULL AND mrd.scheduled_end_datetime IS NULL THEN mrd.scheduled_start_datetime
							WHEN mrd.scheduled_start_datetime IS NULL AND mrd.scheduled_end_datetime IS NOT NULL THEN mrd.scheduled_end_datetime
							ELSE NULL
						END as scheduled_date,
						mrd.scheduled_start_datetime AS scheduled_start_datetime,
						util_get_translated( \'problem_description\', mrd.problem_description, mrd.details ) AS problem_description,
						mrd.scheduled_end_datetime,
						mrd.actual_start_datetime,
						mrd.requested_datetime AS requested_datetime,
						ms.maintenance_status_type_id,
						ms.name AS maintenance_status_name,
						mp.maintenance_priority_type_id AS maintenance_priority_type,
						tz.time_zone_name,
						mr.created_by,
						mrt.name AS maintenance_request_type_name,
                        ad.warranty_end_date ';

		}

		$strSql .= 'FROM
						maintenance_requests mr
                        JOIN assets a ON ( a.cid = mr.cid AND a.id = mr.asset_id )
                        JOIN asset_details ad ON ( ad.cid = a.cid AND ad.asset_id = a.id )
						JOIN maintenance_request_details mrd ON ( mr.id = mrd.maintenance_request_id AND mr.cid = mrd.cid )     
                        JOIN properties p ON ( mr.property_id = p.id AND mr.cid = p.cid )
						JOIN maintenance_request_types mrt ON ( mrt.id = mr.maintenance_request_type_id )
						LEFT JOIN maintenance_problems mprob ON ( mr.cid = mprob.cid AND mr.maintenance_problem_id = mprob.id AND mprob.maintenance_problem_type_id IN ( ' . ( int ) \CMaintenanceProblemType::MAINTENANCE_PROBLEM . ' ) )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
						LEFT JOIN company_employees ce ON ( mr.cid = ce.cid AND mr.company_employee_id = ce.id )
						LEFT JOIN ap_payees ap ON ( ap.cid = mr.cid AND ap.id = mr.ap_payee_id )
						JOIN time_zones AS tz ON ( tz.id = p.time_zone_id )
						JOIN maintenance_statuses ms ON ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id )
						JOIN maintenance_priorities mp ON ( mr.cid = mp.cid AND mr.maintenance_priority_id = mp.id )
						LEFT JOIN leases l ON ( l.cid = mr.cid AND l.id = mr.lease_id AND l.property_id = mr.property_id )
						JOIN calendar_event_types cet ON ( cet.cid = mr.cid AND cet.default_calendar_event_type_id = ' . ( int ) \CDefaultCalendarEventType::WORK_ORDER . ' )
						LEFT JOIN calendar_events cev ON ( cev.cid = mr.cid AND cev.reference_id = mr.id AND cev.calendar_event_type_id = cet.id AND cev.deleted_on IS NULL AND cev.deleted_by IS NULL AND cev.reference_id IS NOT NULL )
			        WHERE
						p.is_disabled = 0
						AND mr.cid = ' . ( int ) $intCid . '
						AND mr.parent_maintenance_request_id IS NULL
						AND mr.deleted_by IS NULL 
                        AND mr.maintenance_group_id IS NULL 
                        AND mr.deleted_on IS NULL
                        AND mr.maintenance_request_type_id IN ( ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' )  
                       	AND mr.asset_id = ' . ( int ) $intAssetId
		           . $strSearchByMaintenanceId;

		if( false == $boolIsCount ) {
			$strSql .= ' ORDER BY
                       ' . $strOrderBy . '
                        OFFSET ' . ( int ) $intOffset . '
                        LIMIT ' . ( int ) $intLimit;
		}

		return \fetchData( $strSql, $objDatabase );
	}

	public function bulkInsertMaintenanceRequests( $arrobjMaintenanceRequests, $intCompanyUserId, $objDatabase ) {

		if( false == \valArr( $arrobjMaintenanceRequests ) ) {
			return NULL;
		}

		$strSql = '';
		$arrobjCompanyUsers = \CCompanyUsers::fetchCustomCompanyUsersWithNameByIdsByCids( [ $intCompanyUserId ], array_keys( rekeyObjects( 'Cid', $arrobjMaintenanceRequests ) ), $objDatabase );
		foreach( $arrobjMaintenanceRequests as $objMaintenanceRequest ) {

			if( false == \valObj( $arrobjCompanyUsers[$objMaintenanceRequest->getCid()][$intCompanyUserId], 'CCompanyUser' ) ) {
				continue;
			}
			$strSql .= $objMaintenanceRequest->insert( $intCompanyUserId, $objDatabase, true );
			$strSql .= $objMaintenanceRequest->createWorkOrderEvent( \CEventSubType::WORKORDER_OPENED, $arrobjCompanyUsers[$objMaintenanceRequest->getCid()][$intCompanyUserId], NULL, NULL, $objDatabase, false, true );
		}

		return \fetchData( $strSql, $objDatabase );

	}

	private function loadCommonFilterConditions( $arrmixMaintenanceFilterValues, $strConditionalSql, $boolIsSubTasks = false ) {
		if( true == \valArr( $arrmixMaintenanceFilterValues['ap_payees'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= 'mr.ap_payee_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['ap_payees'] ) . ')';
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['company_employees'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= '( mr.company_employee_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['company_employees'] ) . ')';
			if( in_array( 0, $arrmixMaintenanceFilterValues['company_employees'] ) ) {
				// '0' represents No User Assigned
				$strConditionalSql .= ' OR mr.company_employee_id IS NULL ';
			}
			$strConditionalSql .= ' ) ';
		}

		if( true == \valArr( $arrmixMaintenanceFilterValues['maintenance_problems'] ) ) {
			$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
			$strConditionalSql .= 'mr.maintenance_problem_id IN (' . implode( ',', $arrmixMaintenanceFilterValues['maintenance_problems'] ) . ')';
		}

		switch( $arrmixMaintenanceFilterValues['date_type'] ) {
			case \CMaintenanceRequest::MAINTENANCE_FILTER_DATE_TYPE_CREATED:
				if( true == \valStr( $arrmixMaintenanceFilterValues['date_range']['min-date'] ) ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= 'mrd.actual_start_datetime >= \'' . date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['date_range']['min-date'] ) ) . ' 00:00:00\'';
				}

				if( true == \valStr( $arrmixMaintenanceFilterValues['date_range']['max-date'] ) ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= 'mrd.actual_start_datetime <= \'' . date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['date_range']['max-date'] ) ) . ' 23:59:59\'';
				}
				break;

			case \CMaintenanceRequest::MAINTENANCE_FILTER_DATE_TYPE_SCHEDULED:
				if( true == \valStr( $arrmixMaintenanceFilterValues['date_range']['min-date'] ) ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					if( true == $boolIsSubTasks ) {
						$strConditionalSql .= 'mrd.scheduled_end_datetime >= \'' . date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['date_range']['min-date'] ) ) . ' 00:00:00\'';
					} else {
						$strConditionalSql .= 'mrd.scheduled_start_datetime >= \'' . date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['date_range']['min-date'] ) ) . ' 00:00:00\'';
					}

				}

				if( true == \valStr( $arrmixMaintenanceFilterValues['date_range']['max-date'] ) ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= 'mrd.scheduled_end_datetime <= \'' . date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['date_range']['max-date'] ) ) . ' 23:59:59\'';
				}
				break;

			case \CMaintenanceRequest::MAINTENANCE_FILTER_DATE_TYPE_DUE:
				if( true == \valStr( $arrmixMaintenanceFilterValues['date_range']['min-date'] ) ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= 'mr.due_date >= \'' . date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['date_range']['min-date'] ) ) . ' 00:00:00\'';
				}

				if( true == \valStr( $arrmixMaintenanceFilterValues['date_range']['max-date'] ) ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= 'mr.due_date <= \'' . date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['date_range']['max-date'] ) ) . ' 23:59:59\'';
				}
				break;

			case \CMaintenanceRequest::MAINTENANCE_FILTER_DATE_TYPE_COMPLETED:
				if( true == \valStr( $arrmixMaintenanceFilterValues['date_range']['min-date'] ) ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= 'mrd.completed_datetime >= \'' . date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['date_range']['min-date'] ) ) . ' 00:00:00\'';
				}

				if( true == \valStr( $arrmixMaintenanceFilterValues['date_range']['max-date'] ) ) {
					$strConditionalSql .= ( true == \valStr( $strConditionalSql ) ) ? ' AND ' : '';
					$strConditionalSql .= 'mrd.completed_datetime <= \'' . date( 'Y-m-d', strtotime( $arrmixMaintenanceFilterValues['date_range']['max-date'] ) ) . ' 23:59:59\'';
				}
				break;

			default:
				// Empty default case statement
				break;
		}

		return $strConditionalSql;
	}

	public function fetchAllActiveMaintenanceRequestsByPropertyIdByCid( $intPropertyId, $intCid, $objDatabase ) {

		if( true == is_null( $intPropertyId ) || true == is_null( $intCid ) ) {
			return NULL;
		}

		$strSql = 'SELECT 
						util_get_translated( \'problem_description\', problem_description, details ) AS problem_description,
						util_get_translated( \'additional_info\', additional_info, details ) AS additional_info,
						util_get_translated( \'location_specifics\', location_specifics, details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', ignore_response_reason, details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', customer_name_first, details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', customer_name_last, details ) AS customer_name_last,
						util_get_translated( \'unit_number\', unit_number, details ) AS unit_number,
						* 
						FROM 
							view_maintenance_requests 
						WHERE 
						property_id = ' . ( int ) $intPropertyId . ' 
						AND cid = ' . ( int ) $intCid . ' 
						AND deleted_on IS NULL';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchSimpleMaintenanceRequestDataByAssetIdByPropertyByCid( $intAssetId, $intPropertyId, $intCid, $objDatabase ) {

		if( false == \valId( $intAssetId ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						mr.id,
						mr.maintenance_request_type_id
					FROM
						maintenance_requests mr
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id = ' . ( int ) $intPropertyId . '
						AND mr.asset_id = ' . ( int ) $intAssetId . '
						AND mr.deleted_on IS NULL
					ORDER BY
						mr.id DESC
					LIMIT 1';

		$arrmixResult = \fetchData( $strSql, $objDatabase );

		if( true == \valArr( $arrmixResult ) ) {
			return $arrmixResult[0];
		}
	}

	public function fetchActiveParentMaintenanceRequestForHAByPropertyIdByPropertyUnitIdBySystemCodeByCid( $intPropertyId, $intPropertyUnitId, $strSystemCode, $intCid, $objDatabase ) {
		if( ( false == \valId( $intPropertyId ) || false == \valId( $intPropertyUnitId ) ) && false == \valStr( $strSystemCode ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON ( vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id )
						JOIN maintenance_problems mp ON ( vmr.cid = mp.cid AND vmr.maintenance_problem_id = mp.id )
						JOIN maintenance_priorities mpr ON ( vmr.cid = mpr.cid AND vmr.maintenance_priority_id = mpr.id )
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.property_unit_id = ' . ( int ) $intPropertyUnitId . '
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::SERVICE_REQUEST . '
						AND mst.maintenance_status_type_id NOT IN ( ' . implode( ',', \CMaintenanceStatusType::$c_arrintClosedStatusTypes ) . ' )
						AND mp.system_code = \'' . $strSystemCode . '\'
						AND mpr.code = \'MD\'
						AND vmr.deleted_by IS NULL
						AND vmr.parent_maintenance_request_id IS NULL';

		return $this->fetchMaintenanceRequest( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsCountsForCurrentDaylastSevenDaysByPropertyIdsByCid( $arrintPropertyIds, $intCid, $objDatabase ) {

		$strSql = ' SELECT
						count( CASE WHEN mr.created_on::Date = CURRENT_TIMESTAMP::Date THEN 1 ELSE NULL END ) as created_today,
						count( CASE WHEN mr.created_on::Date = date_trunc(\'day\', CURRENT_TIMESTAMP - \'1 days\'::interval )::Date
								THEN 1 ELSE NULL END ) as created_yesterday,
						count( CASE WHEN mrd.completed_datetime::Date = CURRENT_TIMESTAMP::Date AND mst.id = ' . ( int ) \CMaintenanceStatusType::COMPLETED . ' THEN 1 ELSE NULL END ) as completed_today,
						count( CASE WHEN mrd.completed_datetime::Date = date_trunc(\'day\', CURRENT_TIMESTAMP - \'1 days\'::interval )::Date
								AND mst.id = ' . ( int ) \CMaintenanceStatusType::COMPLETED . ' THEN 1 ELSE NULL END ) as completed_yesterday,
						count( CASE WHEN ( mr.created_on::Date > date_trunc( \'day\', CURRENT_TIMESTAMP - \'7 days\'::interval )::Date )
								THEN 1 ELSE NULL END ) as created_seven_days,
						count( CASE WHEN ( mr.created_on::Date > date_trunc( \'day\', CURRENT_TIMESTAMP - \'14 days\'::interval )::date AND mr.created_on::Date < date_trunc ( \'day\', CURRENT_TIMESTAMP - \'7 days\'::interval )::date )
								THEN 1 ELSE NULL END ) as created_seven_days_previous,
						count( CASE WHEN ( mrd.completed_datetime::Date > date_trunc( \'day\', CURRENT_TIMESTAMP - \'7 days\'::interval )::Date )
								AND mst.id = ' . ( int ) \CMaintenanceStatusType::COMPLETED . ' THEN 1 ELSE NULL END ) as completed_seven_days,
						count( CASE WHEN ( mrd.completed_datetime::Date > date_trunc( \'day\', CURRENT_TIMESTAMP - \'14 days\'::interval )::date AND mrd.completed_datetime::Date < date_trunc ( \'day\', CURRENT_TIMESTAMP - \'7 days\'::interval )::date )
								AND mst.id = ' . ( int ) \CMaintenanceStatusType::COMPLETED . ' THEN 1 ELSE NULL END ) as completed_seven_days_previous
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mrd.maintenance_request_id = mr.id AND mrd.cid = mr.cid )
						JOIN maintenance_statuses ms ON ( mr.maintenance_status_id = ms.id AND mr.cid = ms.cid )
						JOIN maintenance_status_types mst ON ( ms.maintenance_status_type_id = mst.id )
						JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id AND mrt.id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' )
					GROUP BY
						mr.cid,
						mr.property_id';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchPreviousFiveWeekMaintenanceRequestsByMaintenanceStatusIdsByPropertyIdsByCid( $arrintMaintenanceStatusesIds, $arrintPropertyIds, $intCid, $objDatabase ) {
		if( false == \valArr( $arrintMaintenanceStatusesIds ) ) {
			return NULL;
		}

		$strSql = ' WITH week_date_range AS (
						SELECT
							row_number() OVER(),
							week_start::date,
							( week_start + INTERVAL \'6 days\' )::date AS week_end_date
						FROM
							generate_series( date_trunc( \'day\', CURRENT_TIMESTAMP - \'34 days\'::interval )::date, date_trunc( \'day\', CURRENT_TIMESTAMP )::date, \'1 week\'::interval ) week_start
						WHERE
							week_start <= date_trunc( \'week\', CURRENT_TIMESTAMP )::date
						ORDER BY
							week_start DESC )

					SELECT wdr.week_end_date,
						count( CASE WHEN mr.created_on::date <= wdr.week_end_date::date THEN wdr.week_end_date ELSE NULL END )
					FROM
						week_date_range wdr
						LEFT JOIN maintenance_requests mr ON ( ( mr.created_on::date <= wdr.week_end_date::date OR mr.created_on::date NOT BETWEEN wdr.week_start::date AND wdr.week_end_date::date)
						AND mr.cid = ' . ( int ) $intCid . ' AND mr.property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' ) AND mr.deleted_by IS NULL AND mr.parent_maintenance_request_id IS NULL ) 
						JOIN maintenance_statuses ms on ( mr.maintenance_status_id = ms.id AND mr.cid = ms.cid AND ms.id IN ( ' . implode( ',', $arrintMaintenanceStatusesIds ) . ' ) )
						JOIN maintenance_status_types mst on ( ms.maintenance_status_type_id = mst.id )
						JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id AND mrt.id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' )
					GROUP BY wdr.week_end_date
					ORDER BY wdr.week_end_date DESC';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestCountByMaintenanceStatusesIdByCid( $intMaintenanceStatusesId, $arrintPropertyIds, $intCid, $objDatabase, $boolIsDateAllowed = false ) {
		if( false == \valId( $intMaintenanceStatusesId ) || false == \valId( $intCid ) || false == \valArr( $arrintPropertyIds ) ) {
			return NULL;
		}
		$strDateCondition = '';

		if( false != $boolIsDateAllowed ) {
			$strDateCondition = 'AND mr.created_on >= date_trunc( \'day\', CURRENT_TIMESTAMP - \'34 days\'::interval )::date';
		}

		$strSql = '	SELECT
						count(mr.id)
					FROM
						maintenance_requests mr
						JOIN maintenance_statuses ms ON ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id )
						JOIN maintenance_request_types mrt ON ( mr.maintenance_request_type_id = mrt.id AND mrt.id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . ' )
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' ) 
						AND ms.id = ' . ( int ) $intMaintenanceStatusesId . '
						AND mr.deleted_by IS NULL
						AND mr.parent_maintenance_request_id IS NULL ' . $strDateCondition;

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByRemotePrimaryKeysByPropertyIdByCid( $arrstrMaintenanceRequestRemotePrimaryKeys, $intPropertyId, $intCid, $objDatabase ) {

		if( false == \valArr( $arrstrMaintenanceRequestRemotePrimaryKeys ) ) {
			return NULL;
		}

		if( false == \valId( $intPropertyId ) ) {
			return NULL;
		}

		$strSql = 'SELECT
                        *
					FROM
						view_maintenance_requests
					WHERE
						property_id = ' . ( int ) $intPropertyId . '
						AND lower( remote_primary_key ) IN ( \'' . implode( '\',\'', $arrstrMaintenanceRequestRemotePrimaryKeys ) . '\' )
						AND cid = ' . ( int ) $intCid . '
						AND deleted_by IS NULL';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchEntratamationMaintenanceRequestsByPropertyIdsByTimeIntervalByCid( $arrintPropertyIds, $strTimeInterval, $intCid, $objDatabase ) {

		if( false === \valId( $intCid ) || false === \valArr( $arrintPropertyIds ) || false == \valStr( $strTimeInterval ) ) {
			return [];
		}

		$strSql = 'SELECT
			mr.*,
			ms.maintenance_status_type_id
		FROM
			maintenance_requests mr
			JOIN maintenance_statuses ms ON ( mr.cid = ms.cid AND mr.maintenance_status_id = ms.id )
			JOIN maintenance_request_details mrd on ( mrd.cid = mr.cid AND mrd.maintenance_request_id = mr.id )
		WHERE
			mr.cid = ' . ( int ) $intCid . '
			AND mr.property_id IN ( ' . implode( ',', $arrintPropertyIds ) . ' )
			AND mr.ps_product_id = ' . \CPsProduct::ENTRATAMATION . '
			AND mrd.actual_start_datetime > ( current_date - INTERVAL \'' . $strTimeInterval . '\' )
			AND mr.deleted_by IS NULL
			AND mr.deleted_on IS NULL';

		return ( array ) $this->fetchMaintenanceRequests( $strSql, $objDatabase );

	}

	public function fetchMaintenanceRequestsToSendPushNotificationByTimeInterval( $intSecondsInterval, $objDatabase ) {
		if( false == \valId( $intSecondsInterval ) ) {
			return NULL;
		}

		// Fetching common notification settings which used to fetch the maintenance request related to notification type
		$strSql = '
			WITH company_users_with_properties AS ( 
				SELECT 
					cup_first.cid,
					cup_first.company_user_id,
					cu.company_employee_id,
					string_agg(p.id::TEXT, \',\') AS property_ids
				FROM 
					company_user_preferences cup_first
					JOIN company_users cu ON ( cu.cid = cup_first.cid AND cu.id = cup_first.company_user_id ) 
					LEFT JOIN view_company_user_properties vcup ON ( vcup.cid = cu.cid AND vcup.company_user_id = cu.id ) 
					JOIN properties p ON ( p.cid = cu.cid AND ( p.id = vcup.property_id OR cu.is_administrator = 1 ) AND p.is_disabled = 0 )
				WHERE 
					cup_first.key = \'' . \CInspectionApiLibrary::COMPANY_USER_PREFERENCE_KEY_FOR_ENTRATA_FACILITIES_APP . '\' 
				GROUP BY 
					cup_first.cid,
					cup_first.company_user_id,
					cu.company_employee_id
			),
			notification_settings AS ( 
				SELECT 
					cup.cid, 
					cup.company_user_id, 
					cup.key, 
					cup.value, 
					notification_setting, 
					CASE 
						WHEN 
							notification_setting::json ->> \'property_ids\' IS NOT NULL 
						THEN 
							REPLACE ( REPLACE ( notification_setting::json ->> \'property_ids\', \'[\', \'\' ), \']\', \'\' ) 
						ELSE 
							cuwp.property_ids 
						END 
					AS property_ids,
					cuwp.company_employee_id
				FROM 
					company_user_preferences cup 
					JOIN LATERAL json_array_elements_text( cup.value::json ) WITH ORDINALITY AS t( notification_setting, row_no ) ON TRUE 
					JOIN company_users_with_properties cuwp ON ( cuwp.cid = cup.cid AND cuwp.company_user_id = cup.company_user_id ) 
				WHERE 
					cup.key = \'' . \CInspectionApiLibrary::COMPANY_USER_PREFERENCE_KEY_FOR_ENTRATA_FACILITIES_APP . '\' 
			),
			maintenance_request_data AS ( ';

		// Fetch newly created Maintenance Requests in mention time interval
		$strSql .= ' 
				SELECT
					mrl.cid,
					mrl.maintenance_request_id,
					\'' . \CInspectionApiLibrary::PUSH_NOTIFICATION_KEY_NEW_SERVICE_REQUEST . '\' AS notification_type 
				FROM 
					maintenance_request_logs mrl 
				WHERE 
					mrl.log_datetime >=( NOW() - interval \'' . $intSecondsInterval . ' seconds\' ) 
					AND mrl.prior_maintenance_request_log_id IS NULL 
					AND mrl.maintenance_request_type_id = ' . \CMaintenanceRequestType::SERVICE_REQUEST . ' 
				
				UNION ALL ';

		// Fetch recently assigned Maintenance Requests in mention time interval
		$strSql .= ' 
				SELECT
					e.cid,
					e.data_reference_id AS maintenance_request_id,
					\'' . \CInspectionApiLibrary::PUSH_NOTIFICATION_KEY_ASSIGNED_TO_ME . '\' AS notification_type
				FROM
					events e
				WHERE
					e.event_datetime >= ( NOW() - interval \'' . $intSecondsInterval . ' seconds\' )
					AND e.event_type_id = ' . \CEventType::WORK_ORDER_UPDATED . '
					AND e.event_sub_type_id = ' . \CEventSubType::WORKORDER_ASSIGNED . '

				UNION ALL ';

		// Fetch upcoming scheduled Maintenance Requests where remind me in between 10 minutes to 2 hours within mention time interval
		$strSql .= ' 
				SELECT
					mrd.cid,
					mrd.maintenance_request_id,
					\'' . \CInspectionApiLibrary::PUSH_NOTIFICATION_KEY_SCHEDULED_REMINDERS . '\' AS notification_type
				FROM
					maintenance_request_details mrd
				WHERE
					mrd.scheduled_start_datetime IS NOT NULL
					AND mrd.scheduled_start_datetime > NOW() + interval \'1 minutes\' * 10 
					AND mrd.scheduled_start_datetime <= (NOW() + interval \'' . $intSecondsInterval . ' seconds\' ) + interval \'1 minutes\' * 120 
			)
		';

		$strSql .= '
			SELECT 
				mr.id AS maintenance_request_id, 
				mr.cid, 
				mr.property_id,
				mr.maintenance_request_type_id,
				concat_ws( \' - \', ml.name, COALESCE( cat.name, \'Not Categorized\' ), mp.name ) AS location_problem_title, 
				mrd.problem_description, 
				concat_ws(\' - \', pb.building_name, COALESCE(us.unit_number_cache, pu.unit_number)) AS unit_number_info,
				mr.parent_maintenance_request_id, 
				mr_data.notification_type,
				ns.company_user_id,
				ns.company_employee_id, 
				ns.notification_setting::json ->> \'' . \CInspectionApiLibrary::PUSH_NOTIFICATION_KEY_DEVICE_TOKEN . '\' AS device_token, 
				ns.notification_setting::json ->> \'' . \CInspectionApiLibrary::PUSH_NOTIFICATION_KEY_CONSUMER . '\' AS consumer, 
				p.property_name, 
				mrd.scheduled_start_datetime,
				t.time_zone_name,
				COUNT(*) OVER( PARTITION BY mr.property_id, ns.notification_setting::json ->> \'device_token\' ) AS notification_count, 
				RANK() OVER( PARTITION BY mr.property_id, ns.notification_setting::json ->> \'device_token\' ORDER BY mr.id ) AS notification_rank 
			FROM 
				maintenance_request_data mr_data 
				JOIN maintenance_requests mr ON ( mr.cid = mr_data.cid AND mr.id = mr_data.maintenance_request_id ) 
				JOIN maintenance_request_details mrd ON ( mrd.cid = mr.cid AND mrd.maintenance_request_id = mr.id ) 
				LEFT JOIN property_units pu ON ( pu.cid = mr.cid AND pu.property_id = mr.property_id AND pu.id = mr.property_unit_id ) 
				LEFT JOIN unit_spaces us ON ( us.cid = mr.cid AND us.property_id = mr.property_id AND us.property_unit_id = pu.id AND us.id = mr.unit_space_id ) 
				LEFT JOIN property_buildings pb ON ( pb.cid = pu.cid AND pb.property_id = pu.property_id AND pb.id = pu.property_building_id ) 
				LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id AND ml.is_system = 0 )
				LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id AND mp.maintenance_problem_type_id = ' . \CMaintenanceProblemType::MAINTENANCE_PROBLEM . ' AND mp.is_system = 0 ) 
				LEFT JOIN maintenance_problems cat ON ( cat.cid = mp.cid AND cat.id = mp.maintenance_problem_id AND cat.is_system = 0 AND cat.maintenance_problem_type_id = ' . \CMaintenanceProblemType::PROBLEM_CATEGORY . ' ) 
				JOIN notification_settings ns ON ( ns.cid = mr.cid AND mr.property_id = ANY( string_to_array( ns.property_ids,\',\' )::int[] ) AND ns.notification_setting::json ->> mr_data.notification_type IS NOT NULL 
					AND ns.notification_setting::json ->> mr_data.notification_type = \'1\' ) 
				JOIN properties p ON ( p.cid = mr.cid AND p.id = mr.property_id AND p.is_disabled = 0 ) 
				JOIN time_zones t ON ( t.id = p.time_zone_id ) 
			WHERE 
				mr.maintenance_group_id IS NULL 
				AND ( 
						( 
							mr_data.notification_type = \'' . \CInspectionApiLibrary::PUSH_NOTIFICATION_KEY_NEW_SERVICE_REQUEST . '\' 
							AND mr.parent_maintenance_request_id IS NULL 
							AND mr.maintenance_request_type_id = ' . \CMaintenanceRequestType::SERVICE_REQUEST . ' 
						) OR 
						( 
							mr_data.notification_type = \'' . \CInspectionApiLibrary::PUSH_NOTIFICATION_KEY_ASSIGNED_TO_ME . '\' 
							AND mr.company_employee_id IS NOT NULL 
							AND mr.company_employee_id = ns.company_employee_id 
						) OR 
						( 
							mr_data.notification_type = \'' . \CInspectionApiLibrary::PUSH_NOTIFICATION_KEY_SCHEDULED_REMINDERS . '\' 
							AND mr.company_employee_id IS NOT NULL 
							AND mr.company_employee_id = ns.company_employee_id 
							AND mr.maintenance_request_type_id IN ( ' . \CMaintenanceRequestType::SERVICE_REQUEST . ', ' . \CMaintenanceRequestType::RECURRING . ' )  
							AND mr.parent_maintenance_request_id IS NULL 
							AND mrd.scheduled_start_datetime IS NOT NULL 
							AND mrd.scheduled_start_datetime > NOW() + interval \'1 minutes\' * ( trim( (ns.notification_setting::json -> \'remind_me_in\')::text, \'"\')::int ) 
							AND mrd.scheduled_start_datetime <= (NOW() + interval \'' . $intSecondsInterval . ' seconds\' ) + interval \'1 minutes\' * ( trim( (ns.notification_setting::json -> \'remind_me_in\')::text, \'"\')::int ) 
						) 
					) 
			 ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchOpenMakeReadyByUnitSpaceIdByCid( $intUnitSpaceId, $intCid, $objDatabase ) {

		if( false == \valId( $intUnitSpaceId ) || false == \valId( $intCid ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						vmr.*
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON ( vmr.cid = mst.cid AND vmr.maintenance_status_id = mst.id )
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.unit_space_id = ' . ( int ) $intUnitSpaceId . '
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::MAKE_READY . '
						AND mst.maintenance_status_type_id IN ( ' . \CMaintenanceStatusType::OPEN . ' , ' . \CMaintenanceStatusType::SUSPENDED . ' ) ';

		return $this->fetchMaintenanceRequest( $strSql, $objDatabase );

	}

	public function fetchRenovationMaintenanceRequestByIdByCid( $intId, $intCid, $objDatabase ) {

		if( false == \valId( $intId ) || false == \valId( $intCid ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						vmr.*
					FROM
						view_maintenance_requests vmr
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.id = ' . ( int ) $intId . '
						AND vmr.deleted_by IS NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::RENOVATION;

		return $this->fetchMaintenanceRequest( $strSql, $objDatabase );
	}

	public function fetchOpenRenovationMaintenanceRequestByUnitSpaceIdByCid( $intPropertyId, $intUnitSpaceId, $intCid, $objDatabase ) {

		$strSql = 'SELECT
						vmr.scheduled_start_datetime,
						vmr.id
					FROM
						view_maintenance_requests vmr
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.unit_space_id = ' . ( int ) $intUnitSpaceId . '
						AND vmr.deleted_by IS NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.completed_datetime IS NULL
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::RENOVATION;

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchRenovationMaintenanceRequestByUnitSpaceIdByCid( $intUnitSpaceId, $intCid, $objDatabase ) {

		if( false == \valId( $intUnitSpaceId ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						vmr.*,
						mst.maintenance_status_type_id
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses mst ON ( vmr.maintenance_status_id = mst.id AND vmr.cid = mst.cid )
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.deleted_by IS NULL
						AND vmr.unit_space_id = ' . ( int ) $intUnitSpaceId . '
						AND vmr.maintenance_request_type_id = ' . \CMaintenanceRequestType::RENOVATION . '
						AND vmr.parent_maintenance_request_id IS NULL
					ORDER BY 
						id DESC LIMIT 1';

		return $this->fetchMaintenanceRequest( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestByIdByPropertyIdByCid( $intMaintenanceRequestId, $intPropertyId, $intCid, $objDatabase ) {

		if( false == \valId( $intMaintenanceRequestId ) || false == \valId( $intPropertyId ) || false == \valId( $intCid ) ) {
			return NULL;
		}

		$strSql = 'SELECT
						mr.id,
						mr.parent_maintenance_request_id,
						mr.customer_id,
						mr.maintenance_request_type_id
					FROM
						maintenance_requests mr
					WHERE
						mr.cid = ' . ( int ) $intCid . '
						AND mr.property_id = ' . ( int ) $intPropertyId . '
						AND mr.id = ' . ( int ) $intMaintenanceRequestId . '
						AND mr.deleted_by IS NULL 
						AND mr.deleted_on IS NULL ';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchCustomMaintenanceFilterSearchCriteria( $objMaintenanceRequestFilter ) {
		$strMaintenanceFilterSql = '';
		/**@var $objMaintenanceRequestFilter \CMaintenanceRequestFilter */
		if( false == \valObj( $objMaintenanceRequestFilter, 'CMaintenanceRequestFilter' ) ) {
			return $strMaintenanceFilterSql;
		}
		if( false != \valId( $objMaintenanceRequestFilter->getPropertyId() ) ) {
			$strMaintenanceFilterSql .= ' AND mr.property_id = ' . ( int ) $objMaintenanceRequestFilter->getPropertyId();
		}
		if( false != \valId( $objMaintenanceRequestFilter->getId() ) ) {
			$strMaintenanceFilterSql .= ' AND mr.id = ' . ( int ) $objMaintenanceRequestFilter->getId();
		}
		if( false != \valId( $objMaintenanceRequestFilter->getPropertyUnitId() ) ) {
			$strMaintenanceFilterSql .= ' AND mr.property_unit_id = ' . ( int ) $objMaintenanceRequestFilter->getPropertyUnitId();
		}
		if( false != \valStr( $objMaintenanceRequestFilter->getLastUpdatedOnFromDate() ) ) {
			$strMaintenanceFilterSql .= ' AND ( GREATEST( mr.updated_on,mrd.updated_on ) BETWEEN \'' . date( 'Y-m-d', strtotime( $objMaintenanceRequestFilter->getLastUpdatedOnFromDate() ) ) . '\'';
		}
		if( false != \valStr( $objMaintenanceRequestFilter->getLastUpdatedOnToDate() ) ) {
			$strMaintenanceFilterSql .= ' AND \'' . date( 'Y-m-d', strtotime( $objMaintenanceRequestFilter->getLastUpdatedOnToDate() ) ) . ' 23:59:59\')';
		} elseif( false != \valStr( $objMaintenanceRequestFilter->getLastUpdatedOnFromDate() ) ) {
			$strMaintenanceFilterSql .= ' AND \'' . date( 'Y-m-d' ) . ' 23:59:59\')';
		}
		if( false != \valArr( $objMaintenanceRequestFilter->getMaintenanceCategoryIds() ) ) {
			$strMaintenanceFilterSql .= ' AND mp1.id IN ( ' . implode( ', ', $objMaintenanceRequestFilter->getMaintenanceCategoryIds() ) . ' )';
		}
		if( false != \valArr( $objMaintenanceRequestFilter->getMaintenancePriorityIds() ) ) {
			$strMaintenanceFilterSql .= ' AND mr.maintenance_priority_id IN ( ' . implode( ', ', $objMaintenanceRequestFilter->getMaintenancePriorityIds() ) . ' )';
		}
		if( false != \valArr( $objMaintenanceRequestFilter->getMaintenanceProblemIds() ) ) {
			$strMaintenanceFilterSql .= '  AND mr.maintenance_problem_id IN ( ' . implode( ', ', $objMaintenanceRequestFilter->getMaintenanceProblemIds() ) . ' )';
		}
		if( false != \valArr( $objMaintenanceRequestFilter->getMaintenanceRequestTypeIds() ) ) {
			$strMaintenanceFilterSql .= ' AND mr.maintenance_request_type_id IN ( ' . implode( ', ', $objMaintenanceRequestFilter->getMaintenanceRequestTypeIds() ) . ' )';
		}
		if( false != \valArr( $objMaintenanceRequestFilter->getApPayeeIds() ) ) {
			$strMaintenanceFilterSql .= ' AND mr.ap_payee_id = ' . ( int ) $objMaintenanceRequestFilter->getApPayeeIds();
		}
		if( false != \valStr( $objMaintenanceRequestFilter->getCreatedOnFrom() ) ) {
			$strMaintenanceFilterSql .= ' AND mr.created_on >= \'' . date( 'Y-m-d', strtotime( $objMaintenanceRequestFilter->getCreatedOnFrom() ) ) . ' 00:00:00\'';
		}
		if( false != \valStr( $objMaintenanceRequestFilter->getCreatedOnTo() ) ) {
			$strMaintenanceFilterSql .= ' AND mr.created_on <=  \'' . date( 'Y-m-d', strtotime( $objMaintenanceRequestFilter->getCreatedOnTo() ) ) . ' 23:59:59\'';
		}
		if( false != \valStr( $objMaintenanceRequestFilter->getCompletedOnFrom() ) ) {
			$strMaintenanceFilterSql .= ' AND mrd.completed_datetime >= \'' . date( 'Y-m-d', strtotime( $objMaintenanceRequestFilter->getCompletedOnFrom() ) ) . ' 00:00:00\'';
		}
		if( false != \valStr( $objMaintenanceRequestFilter->getCompletedOnTo() ) ) {
			$strMaintenanceFilterSql .= ' AND mrd.completed_datetime <= \'' . date( 'Y-m-d', strtotime( $objMaintenanceRequestFilter->getCompletedOnTo() ) ) . ' 23:59:59\'';
		}
		if( false != \valArr( $objMaintenanceRequestFilter->getParentMaintenanceRequestIds() ) ) {
			$strMaintenanceFilterSql .= ' AND mr.parent_maintenance_request_id IN ( ' . implode( ', ', $objMaintenanceRequestFilter->getParentMaintenanceRequestIds() ) . ' )';
		}

  		return $strMaintenanceFilterSql;
	}

	public function fetchCustomMaintenanceRequestByMaintenanceRequestFilterByCid( $objMaintenanceRequestFilter, $intCid, $objDatabase, $arrmixCustomFilter = NULL ) {
		$strSql                  = NULL;
		$strSelectSql            = NULL;
		$strJoinSql              = NULL;
		$strMaintenanceFilterSql = NULL;
		if( false != \valArr( $arrmixCustomFilter ) ) {
			if( false != \valArr( $arrmixCustomFilter['leaseStatusTypeIds'] ) ) {
				$strSelectSql            = ',lc.lease_status_type_id as lease_status_type_id';
				$strJoinSql              = ' LEFT JOIN lease_customers lc ON ( lc.cid = mr.cid AND lc.customer_id = mr.customer_id AND lc.lease_id = mr.lease_id )';
				$strMaintenanceFilterSql .= ' AND lc.lease_status_type_id IN ( ' . implode( ',', $arrmixCustomFilter['leaseStatusTypeIds'] ) . ' )';
			}
			if( false != \valStr( $arrmixCustomFilter['unitNumber'] ) ) {
				$strMaintenanceFilterSql .= ' AND lower( mrd.unit_number)  LIKE \'%' . ( string ) \Psi\CStringService::singleton()->strtolower( $arrmixCustomFilter['unitNumber'] ) . '%\'';
			}

			if( \valStr( $arrmixCustomFilter['buildingName'] ) ) {
				$strMaintenanceFilterSql .= ' AND lower( pb.building_name ) like ' . '\'' . \Psi\CStringService::singleton()->strtolower( $arrmixCustomFilter['buildingName'] ) . '\'';
			}

			if( false != \valStr( $arrmixCustomFilter['includeDeletedWorkOrders'] ) ) {
				$strMaintenanceFilterSql .= ' AND mr.deleted_by IS NULL AND mr.deleted_on IS NULL';
			}
			if( false == \valStr( $arrmixCustomFilter['includeChildWorkOrder'] ) ) {
				$strMaintenanceFilterSql .= ' AND mr.parent_maintenance_request_id IS NULL';
			}

		}
		$strMaintenanceFilterSql .= $this->fetchCustomMaintenanceFilterSearchCriteria( $objMaintenanceRequestFilter );

		$strSql = 'SELECT
						mr.*,
						mrd.permission_to_enter as permission_to_enter,
						mrd.unit_number as unit_number,
						mrd.completed_datetime as completed_datetime,
						mrd.problem_description as problem_description,
						mrd.scheduled_start_datetime as scheduled_start_datetime,
						mrd.scheduled_end_datetime as scheduled_end_datetime,
						mrd.customer_name_first,
						mrd.customer_name_last,
						mrd.additional_info,
						mp.name AS maintenance_problem_name,
						mp1.id AS maintenance_category_id,
						mp1.name AS maintenance_category_name,
						mpr.name AS maintenance_priority_name,
						ml.name AS maintenance_location_name,
						ms.name AS maintenance_status_name,
						pb.building_name,
						ap.company_name AS ap_payee_company_name ' . $strSelectSql . ' 
					FROM
						maintenance_requests mr
						JOIN maintenance_request_details mrd ON ( mr.cid = mrd.cid AND mr.id = mrd.maintenance_request_id )
						LEFT JOIN maintenance_problems mp ON ( mp.cid = mr.cid AND mp.id = mr.maintenance_problem_id )
						LEFT JOIN maintenance_problems mp1 ON ( mp1.cid = mp.cid AND mp1.id = mp.maintenance_problem_id )
						LEFT JOIN maintenance_priorities mpr ON ( mpr.cid = mr.cid AND mpr.id = mr.maintenance_priority_id )
						LEFT JOIN maintenance_locations ml ON ( ml.cid = mr.cid AND ml.id = mr.maintenance_location_id )
						LEFT JOIN maintenance_statuses ms ON ( ms.cid = mr.cid AND ms.id = mr.maintenance_status_id )
						LEFT JOIN ap_payees ap ON ( ap.cid = mr.cid AND ap.id = mr.ap_payee_id )' . $strJoinSql . '
						LEFT JOIN leases l ON ( mr.cid = l.cid AND mr.property_id = l.property_id AND mr.lease_id = l.id )
						LEFT JOIN property_units pu ON ( l.property_unit_id = pu.id AND mr.cid = pu.cid AND mr.property_id = pu.property_id )
						LEFT JOIN property_units pu1 ON ( mr.property_unit_id = pu1.id AND mr.cid = pu1.cid AND mr.property_id = pu1.property_id )
						LEFT JOIN property_buildings pb ON ( ( pu.property_building_id = pb.id AND pu.cid = pb.cid ) OR ( pu1.property_building_id = pb.id AND pu1.cid = pb.cid ) )
					WHERE
						mr.cid = ' . ( int ) $intCid . $strMaintenanceFilterSql;

		$strSql .= ' ORDER BY mr.id ';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenanceRequestsByMaintenanceStatusIdsByLeaseIdByCustomerIdByPropertyIdByCid( $arrintMaintenanceStatusIds, $intLeaseId, $intCustomerId, $intPropertyId, $intCid, $objDatabase ) {

		if( false == valArr( $arrintMaintenanceStatusIds ) || false == \valId( $intCustomerId ) || false == \valId( $intLeaseId ) || false == \valId( $intPropertyId ) || false == \valId( $intCid ) ) {
			return NULL;
		}

		// NOTE:- We required the details of the Assignments for the specific maintenance work order. This details are present only in the events table, so we join the events table to get the details.

		$strSql = 'SELECT
						vmr.id,event_details.id event_id,
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						util_get_translated( \'name\', ms.name, ms.details ) AS maintenance_status_name,
						util_get_system_translated( \'name\', mst.name, mst.details ) AS maintenance_status_type_name,
						vmr.*,
						ml.name as maintenance_location_name,
						mp.name as maintenance_problem_name,
						event_details.details as assignment_details,
						event_details.created_on as assigned_on
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses ms ON ( vmr.maintenance_status_id = ms.id AND vmr.cid = ms.cid )
						JOIN maintenance_status_types mst ON ( mst.id = ms.maintenance_status_type_id )
						LEFT JOIN maintenance_locations ml ON ( ml.id = vmr.maintenance_location_id )
						LEFT JOIN maintenance_problems mp ON ( mp.id = vmr.maintenance_problem_id )
						LEFT JOIN (
							SELECT
								e.*,
								rank() OVER( partition BY e.data_reference_id ORDER BY e.id DESC ) AS rank
							FROM 
								events e
							WHERE
								e.cid = ' . ( int ) $intCid . '
								AND e.property_id = ' . ( int ) $intPropertyId . '
								AND e.lease_id = ' . ( int ) $intLeaseId . '
								AND e.event_sub_type_id = ' . \CEventSubType::WORKORDER_ASSIGNED . '
						) event_details ON ( vmr.cid = event_details.cid AND vmr.property_id = event_details.property_id AND vmr.lease_id = event_details.lease_id AND vmr.id = event_details.data_reference_id AND event_details.event_sub_type_id = ' . \CEventSubType::WORKORDER_ASSIGNED . ' AND event_details.rank = 1 )
					WHERE
						vmr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . '
						AND ms.maintenance_status_type_id IN ( ' . implode( ',', $arrintMaintenanceStatusIds ) . ' )
						AND vmr.cid = ' . ( int ) $intCid . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.lease_id = ' . ( int ) $intLeaseId . '
						AND vmr.deleted_by IS NULL
						AND vmr.parent_maintenance_request_id IS NULL
					ORDER BY vmr.created_on DESC';

		return \fetchData( $strSql, $objDatabase );
	}

	public function fetchAllOpenAndSomeClosedMaintenanceRequestsByCustomerIdByContractIdByDateByPropertyIdByCid( $intCustomerId, $intTimestamp, $boolHideExternalWorkOrders = false, $intContractId, $intPropertyId, $intCid, $objDatabase, $intPageNo = 0, $intPageSize = 10 ) {

		$strSql = 'SELECT util_set_locale( \'' . \CLocaleContainer::createService()->getLocaleCode() . '\', \'' . \CLocaleContainer::createService()->getDefaultLocaleCode() . '\' );
					SELECT
						util_get_translated( \'problem_description\', vmr.problem_description, vmr.details ) AS problem_description,
						util_get_translated( \'additional_info\', vmr.additional_info, vmr.details ) AS additional_info,
						util_get_translated( \'location_specifics\', vmr.location_specifics, vmr.details ) AS location_specifics,
						util_get_translated( \'ignore_response_reason\', vmr.ignore_response_reason, vmr.details ) AS ignore_response_reason,
						util_get_translated( \'customer_name_first\', vmr.customer_name_first, vmr.details ) AS customer_name_first,
						util_get_translated( \'customer_name_last\', vmr.customer_name_last, vmr.details ) AS customer_name_last,
						util_get_translated( \'unit_number\', vmr.unit_number, vmr.details ) AS unit_number,
						util_get_translated( \'name\', ms.name, ms.details ) AS maintenance_status_name,
						util_get_system_translated( \'name\', mst.name, mst.details ) AS maintenance_status_type_name,
						mst.id as maintenance_status_type_id,
						c.name_first,
						c.name_last,
						c.email_address as username,
						c.is_organization,
						vmr.*
					FROM
						view_maintenance_requests vmr JOIN maintenance_statuses ms ON (ms.cid = vmr.cid AND ms.id = vmr.maintenance_status_id )
						JOIN cached_leases cl ON ( vmr.cid = cl.cid AND vmr.lease_id = cl.id )
						JOIN lease_customers lc ON ( vmr.cid = vmr.cid AND vmr.lease_id = lc.lease_id AND lc.customer_type_id = 1 )
						JOIN customers c ON ( c.cid = vmr.cid AND c.id = vmr.customer_id )
						JOIN maintenance_status_types mst ON (ms.maintenance_status_type_id = mst.id) 
					WHERE
						-- vmr.customer_id = ' . ( int ) $intCustomerId . ' AND
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND cl.organization_contract_id =' . ( int ) $intContractId . '
						AND vmr.maintenance_request_type_id = ' . ( int ) \CMaintenanceRequestType::SERVICE_REQUEST . '
						AND vmr.deleted_by IS NULL
						AND vmr.lease_id IS NOT NULL
						AND vmr.parent_maintenance_request_id IS NULL
						AND vmr.is_resident_visible = 1
					';

		if( true == $boolHideExternalWorkOrders ) {
			$strSql .= ' AND vmr.ps_product_id != ' . \CPsProduct::PMS_INTEGRATION;
		}

		if( false == is_null( $intTimestamp ) ) {
			$strSql .= ' AND vmr.actual_start_datetime >= \'' . date( 'm/d/Y H:i:s', $intTimestamp ) . '\'';
		}

        $strSql .= ' ORDER BY
 						vmr.actual_start_datetime DESC';

		if( true == valId( $intPageNo ) && true == valId( $intPageSize ) ) {
			$strSql .= 'LIMIT ' . $intPageNo . ', ' . $intPageSize;
		}

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

	public function fetchMaintenaceRequestsByMaintenanceRequestTypeIdsByMaintenanceStatusTypeIdsByPropertyIdByCid( $intPropertyId, $intCid, $objDatabase, $arrintMaintenanceRequestTypeIds = NULL, $arrintMaintenanceStatusTypeIds = NULL, $boolIsParentMaintenanceRequestId = true ) {

		if( false == \valId( $intCid ) || false == \valId( $intPropertyId ) ) return NULL;

		if( false == valArr( $arrintMaintenanceRequestTypeIds ) ) {
			$arrintMaintenanceRequestTypeIds = [ \CMaintenanceRequestType::MAKE_READY ];
		}

		if( false == valArr( $arrintMaintenanceStatusTypeIds ) ) {
			$arrintMaintenanceStatusTypeIds = [ \CMaintenanceStatusType::OPEN ];
		}

		$strSubSql = ( true == $boolIsParentMaintenanceRequestId ) ? ' AND vmr.parent_maintenance_request_id IS NULL ' : ' AND vmr.parent_maintenance_request_id IS NOT NULL ';

		$strSql = '	SELECT
						vmr.*
					FROM
						view_maintenance_requests vmr
						JOIN maintenance_statuses ms ON ( vmr.cid = ms.cid and vmr.maintenance_status_id = ms.id )
					WHERE
						vmr.cid = ' . ( int ) $intCid . '
						AND vmr.property_id = ' . ( int ) $intPropertyId . '
						AND vmr.maintenance_request_type_id IN ( ' . implode( ',', $arrintMaintenanceRequestTypeIds ) . ' )
						AND ms.maintenance_status_type_id IN ( ' . implode( ',', $arrintMaintenanceStatusTypeIds ) . ' )
						AND vmr.maintenance_template_id IS NOT NULL
						' . $strSubSql . '
						AND vmr.completed_datetime IS NULL
						AND vmr.deleted_on IS NULL
						AND vmr.deleted_by IS NULL
					ORDER BY
					vmr.id;';

		return $this->fetchMaintenanceRequests( $strSql, $objDatabase );
	}

}
?>
