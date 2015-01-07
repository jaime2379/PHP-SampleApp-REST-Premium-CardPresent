<?php
/* Copyright (c) 2013-2015 EVO Payments International - All Rights Reserved.
 *
 * This software and documentation is subject to and made
 * available only pursuant to the terms of an executed license
 * agreement, and may be used only in accordance with the terms
 * of said agreement. This software may not, in whole or in part,
 * be copied, photocopied, reproduced, translated, or reduced to
 * any electronic medium or machine-readable form without
 * prior consent, in writing, from EVO Payments International
 *
 * Use, duplication or disclosure by the U.S. Government is subject
 * to restrictions set forth in an executed license agreement
 * and in subparagraph (c)(1) of the Commercial Computer
 * Software-Restricted Rights Clause at FAR 52.227-19; subparagraph
 * (c)(1)(ii) of the Rights in Technical Data and Computer Software
 * clause at DFARS 252.227-7013, subparagraph (d) of the Commercial
 * Computer Software--Licensing clause at NASA FAR supplement
 * 16-52.227-86; or their equivalent.
 *
 * Information in this software is subject to change without notice
 * and does not represent a commitment on the part of EVO Payments International.
 *
 * Sample Code is for reference Only and is intended to be used for educational purposes. It's the responsibility of
 * the software company to properly integrate into thier solution code that best meets thier production needs.
 */

/*
 * CWSServiceInformation class file
 *
 */

if (!class_exists("PingResponse")) {
	/*
	 *PingResponse
	 */
	class PingResponse {
		public $IsSuccess; // boolean
		public $Message; // string
	}
}

if (!class_exists("Ping")) {
	/*
	 *Ping
	 */
	class Ping {
	}
}

if (!class_exists("PingResponse")) {
	/*
	 *PingResponse
	 */
	class PingResponse {
		public $PingResult; // PingResponse
	}
}

if (!class_exists("char")) {
	/*
	 *char
	 */
	class char {
	}
}

if (!class_exists("duration")) {
	/*
	 *duration
	 */
	class duration {
	}
}

if (!class_exists("guid")) {
	/*
	 *guid
	 */
	class guid {
	}
}

if (!class_exists("TokenResponse")) {
	/*
	 *TokenResponse
	 */
	class TokenResponse {
		public $SessionToken; // string
		public $UserAccessToken; // string
	}
}

if (!class_exists("ClaimMetaData")) {
	/*
	 *ClaimMetaData
	 */
	class ClaimMetaData {
		public $ClaimDescription; // string
		public $ClaimNS; // string
		public $ClaimScope; // ScopeMetaData
		public $ClaimType; // ClaimTypeEnum
		public $ClaimValue; // string
	}
}

if (!class_exists("ScopeMetaData")) {
	/*
	 *ScopeMetaData
	 */
	class ScopeMetaData {
		public $AllowableIdentityTypes; // ArrayOfIdentityTypeEnum
		public $ScopeId; // int
		public $ScopeName; // string
	}
}

if (!class_exists("IdentityTypeEnum")) {
	/*
	 *IdentityTypeEnum
	 */
	class IdentityTypeEnum {
	}
}

if (!class_exists("ClaimTypeEnum")) {
	/*
	 *ClaimTypeEnum
	 */
	class ClaimTypeEnum {
	}
}

if (!class_exists("SignOnWithToken")) {
	/*
	 *SignOnWithToken
	 */
	class SignOnWithToken {
		public $identityToken; // string
	}
}

if (!class_exists("SignOnWithTokenResponse")) {
	/*
	 *SignOnWithTokenResponse
	 */
	class SignOnWithTokenResponse {
		public $SignOnWithTokenResult; // string
	}
}

if (!class_exists("GetServiceInformation")) {
	/*
	 *GetServiceInformation
	 */
	class GetServiceInformation {
		public $sessionToken; // string
	}
}

if (!class_exists("GetServiceInformationResponse")) {
	/*
	 *GetServiceInformationResponse
	 */
	class GetServiceInformationResponse {
		public $GetServiceInformationResult; // ServiceInformation
	}
}

if (!class_exists("ServiceInformation")) {
	/*
	 *ServiceInformation
	 */
	class ServiceInformation {
		public $BankcardServices; // ArrayOfBankcardService
		public $ElectronicCheckingServices; // ArrayOfElectronicCheckingService
		public $StoredValueServices; // ArrayOfStoredValueService
		public $Workflows; // ArrayOfWorkflow
	}
}

if (!class_exists("BankcardService")) {
	/*
	 *BankcardService
	 */
	class BankcardService {
		public $AlternativeMerchantData; // boolean
		public $AutoBatch; // boolean
		public $AVSData; // BankcardServiceAVSData
		public $CutoffTime; // dateTime
		public $EncryptionKey; // string
		public $ManagedBilling; // boolean
		public $MaximumBatchItems; // long
		public $MaximumLineItems; // long
		public $MultiplePartialCapture; // boolean
		public $Operations; // Operations
		public $PurchaseCardLevel; // PurchaseCardLevel
		public $ServiceId; // string
		public $ServiceName; // string
		public $Tenders; // Tenders
	}
}

if (!class_exists("BankcardServiceAVSData")) {
	/*
	 *BankcardServiceAVSData
	 */
	class BankcardServiceAVSData {
		public $CardholderName; // boolean
		public $Street; // boolean
		public $City; // boolean
		public $StateProvince; // boolean
		public $PostalCode; // boolean
		public $Country; // boolean
		public $Phone; // boolean
	}
}

if (!class_exists("Operations")) {
	/*
	 *Operations
	 */
	class Operations {
		public $Verify; // boolean
		public $QueryAccount; // boolean
		public $AuthAndCapture; // boolean
		public $Authorize; // boolean
		public $Adjust; // boolean
		public $ReturnById; // boolean
		public $ReturnUnlinked; // boolean
		public $Undo; // boolean
		public $Capture; // boolean
		public $CaptureSelective; // boolean
		public $CaptureAll; // boolean
		public $CloseBatch; // CloseBatch
		public $QueryRejected; // boolean
		public $ManageAccount; // boolean
		public $ManageAccountById; // boolean
		public $Disburse; // boolean
	}
}

if (!class_exists("CloseBatch")) {
	/*
	 *CloseBatch
	 */
	class CloseBatch {
	}
}

if (!class_exists("PurchaseCardLevel")) {
	/*
	 *PurchaseCardLevel
	 */
	class PurchaseCardLevel {
	}
}

if (!class_exists("Tenders")) {
	/*
	 *Tenders
	 */
	class Tenders {
		public $Credit; // boolean
		public $PINDebit; // boolean
		public $PINlessDebit; // boolean
		public $PINDebitReturnSupportType; // PINDebitReturnSupportType
		public $PINDebitUndoTenderDataRequired; // boolean
		public $CreditAuthorizeSupport; // CreditAuthorizeSupportType
		public $QueryRejectedSupport; // QueryRejectedSupportType
		public $PinDebitUndoSupport; // PinDebitUndoSupportType
		public $BatchAssignmentSupport; // BatchAssignmentSupport
		public $CreditReturnSupportType; // CreditReturnSupportType
		public $TrackDataSupport; // TrackDataSupportType
		public $CredentialsRequired; // boolean
		public $CreditReversalSupportType; // CreditReversalSupportType
		public $PartialApprovalSupportType; // PartialApprovalSupportType
	}
}

if (!class_exists("PINDebitReturnSupportType")) {
	/*
	 *PINDebitReturnSupportType
	 */
	class PINDebitReturnSupportType {
	}
}

if (!class_exists("CreditAuthorizeSupportType")) {
	/*
	 *CreditAuthorizeSupportType
	 */
	class CreditAuthorizeSupportType {
	}
}

if (!class_exists("QueryRejectedSupportType")) {
	/*
	 *QueryRejectedSupportType
	 */
	class QueryRejectedSupportType {
	}
}

if (!class_exists("PinDebitUndoSupportType")) {
	/*
	 *PinDebitUndoSupportType
	 */
	class PinDebitUndoSupportType {
	}
}

if (!class_exists("BatchAssignmentSupport")) {
	/*
	 *BatchAssignmentSupport
	 */
	class BatchAssignmentSupport {
	}
}

if (!class_exists("CreditReturnSupportType")) {
	/*
	 *CreditReturnSupportType
	 */
	class CreditReturnSupportType {
	}
}

if (!class_exists("TrackDataSupportType")) {
	/*
	 *TrackDataSupportType
	 */
	class TrackDataSupportType {
	}
}

if (!class_exists("CreditReversalSupportType")) {
	/*
	 *CreditReversalSupportType
	 */
	class CreditReversalSupportType {
	}
}

if (!class_exists("PartialApprovalSupportType")) {
	/*
	 *PartialApprovalSupportType
	 */
	class PartialApprovalSupportType {
	}
}

if (!class_exists("ElectronicCheckingService")) {
	/*
	 *ElectronicCheckingService
	 */
	class ElectronicCheckingService {
		public $Operations; // Operations
		public $ServiceId; // string
		public $ServiceName; // string
		public $Tenders; // Tenders
	}
}

if (!class_exists("StoredValueService")) {
	/*
	 *StoredValueService
	 */
	class StoredValueService {
		public $Operations; // Operations
		public $ServiceId; // string
		public $ServiceName; // string
		public $Tenders; // Tenders
		public $SecureMSRAllowed; // boolean
	}
}

if (!class_exists("Workflow")) {
	/*
	 *Workflow
	 */
	class Workflow {
		public $WorkflowId; // string
		public $Name; // string
		public $ServiceId; // string
		public $WorkflowServices; // ArrayOfWorkflowService
	}
}

if (!class_exists("WorkflowService")) {
	/*
	 *WorkflowService
	 */
	class WorkflowService {
		public $ServiceId; // string
		public $ServiceName; // string
		public $ServiceType; // string
		public $Ordinal; // int
	}
}

if (!class_exists("SaveApplicationData")) {
	/*
	 *SaveApplicationData
	 */
	class SaveApplicationData {
		public $sessionToken; // string
		public $applicationData; // ApplicationData
	}
}

if (!class_exists("ApplicationData")) {
	/*
	 *ApplicationData
	 */
	class ApplicationData {
		public $ApplicationAttended; // boolean
		public $ApplicationLocation; // ApplicationLocation
		public $ApplicationName; // string
		public $DeveloperId; // string
		public $HardwareType; // HardwareType
		public $PINCapability; // PINCapability
		public $PTLSSocketId; // string
		public $ReadCapability; // ReadCapability
		public $SerialNumber; // string
		public $SoftwareVersion; // string
		public $SoftwareVersionDate; // dateTime
		public $VendorId; // string
		public $EncryptionType; // EncryptionType
		public $DeviceSerialNumber; // string
		public $EMVTerminalData; // EMVTerminalData
	}
}

if (!class_exists("ApplicationLocation")) {
	/*
	 *ApplicationLocation
	 */
	class ApplicationLocation {
	}
}

if (!class_exists("HardwareType")) {
	/*
	 *HardwareType
	 */
	class HardwareType {
	}
}

if (!class_exists("PINCapability")) {
	/*
	 *PINCapability
	 */
	class PINCapability {
	}
}

if (!class_exists("ReadCapability")) {
	/*
	 *ReadCapability
	 */
	class ReadCapability {
	}
}

if (!class_exists("EncryptionType")) {
	/*
	 *EncryptionType
	 */
	class EncryptionType {
	}
}

if (!class_exists("EMVTerminalData")) {
	/*
	 *EMVTerminalData
	 */
	class EMVTerminalData {
		public $CardDataOutputCapability; // CardDataOutputCapability
		public $CardRetentionCapability; // boolean
		public $CardholderAuthenticationCapability; // CardholderAuthenticationCapability
		public $PINMaxCharacters; // PINMaxCharacters
		public $TerminalOperator; // TerminalOperator
		public $TerminalOutputCapability; // TerminalOutputCapability
	}
}

if (!class_exists("CardDataOutputCapability")) {
	/*
	 *CardDataOutputCapability
	 */
	class CardDataOutputCapability {
	}
}

if (!class_exists("CardholderAuthenticationCapability")) {
	/*
	 *CardholderAuthenticationCapability
	 */
	class CardholderAuthenticationCapability {
	}
}

if (!class_exists("PINMaxCharacters")) {
	/*
	 *PINMaxCharacters
	 */
	class PINMaxCharacters {
	}
}

if (!class_exists("TerminalOperator")) {
	/*
	 *TerminalOperator
	 */
	class TerminalOperator {
	}
}

if (!class_exists("TerminalOutputCapability")) {
	/*
	 *TerminalOutputCapability
	 */
	class TerminalOutputCapability {
	}
}

if (!class_exists("SaveApplicationDataResponse")) {
	/*
	 *SaveApplicationDataResponse
	 */
	class SaveApplicationDataResponse {
		public $SaveApplicationDataResult; // string
	}
}

if (!class_exists("GetApplicationData")) {
	/*
	 *GetApplicationData
	 */
	class GetApplicationData {
		public $sessionToken; // string
		public $applicationProfileId; // string
	}
}

if (!class_exists("GetApplicationDataResponse")) {
	/*
	 *GetApplicationDataResponse
	 */
	class GetApplicationDataResponse {
		public $GetApplicationDataResult; // ApplicationData
	}
}

if (!class_exists("DeleteApplicationData")) {
	/*
	 *DeleteApplicationData
	 */
	class DeleteApplicationData {
		public $sessionToken; // string
		public $applicationProfileId; // string
	}
}

if (!class_exists("DeleteApplicationDataResponse")) {
	/*
	 *DeleteApplicationDataResponse
	 */
	class DeleteApplicationDataResponse {
	}
}

if (!class_exists("IsMerchantProfileInitialized")) {
	/*
	 *IsMerchantProfileInitialized
	 */
	class IsMerchantProfileInitialized {
		public $sessionToken; // string
		public $serviceId; // string
		public $merchantProfileId; // string
		public $tenderType; // TenderType
	}
}

if (!class_exists("TenderType")) {
	/*
	 *TenderType
	 */
	class TenderType {
	}
}

if (!class_exists("IsMerchantProfileInitializedResponse")) {
	/*
	 *IsMerchantProfileInitializedResponse
	 */
	class IsMerchantProfileInitializedResponse {
		public $IsMerchantProfileInitializedResult; // boolean
	}
}

if (!class_exists("GetMerchantProfiles")) {
	/*
	 *GetMerchantProfiles
	 */
	class GetMerchantProfiles {
		public $sessionToken; // string
		public $serviceId; // string
		public $tenderType; // TenderType
	}
}

if (!class_exists("GetMerchantProfilesResponse")) {
	/*
	 *GetMerchantProfilesResponse
	 */
	class GetMerchantProfilesResponse {
		public $GetMerchantProfilesResult; // ArrayOfMerchantProfile
	}
}

if (!class_exists("MerchantProfile")) {
	/*
	 *MerchantProfile
	 */
	class MerchantProfile {
		public $ProfileId; // string
		public $ServiceId; // string
		public $ServiceName; // string
		public $LastUpdated; // dateTime
		public $MerchantData; // MerchantProfileMerchantData
		public $TransactionData; // MerchantProfileTransactionData
		public $RestrictedOperations; // ArrayOfTypeRestrictedOperation
		public $ServiceCredentials; // ServiceCredentials
		public $HostedPayments; // HostedPayments
	}
}

if (!class_exists("MerchantProfileMerchantData")) {
	/*
	 *MerchantProfileMerchantData
	 */
	class MerchantProfileMerchantData {
		public $CustomerServiceInternet; // string
		public $CustomerServicePhone; // string
		public $Language; // TypeISOLanguageCodeA3
		public $Address; // AddressInfo
		public $MerchantId; // string
		public $Name; // string
		public $Phone; // string
		public $TaxId; // string
		public $BankcardMerchantData; // BankcardMerchantData
		public $ElectronicCheckingMerchantData; // ElectronicCheckingMerchantData
		public $StoredValueMerchantData; // StoredValueMerchantData
	}
}

if (!class_exists("TypeISOLanguageCodeA3")) {
	/*
	 *TypeISOLanguageCodeA3
	 */
	class TypeISOLanguageCodeA3 {
	}
}

if (!class_exists("AddressInfo")) {
	/*
	 *AddressInfo
	 */
	class AddressInfo {
		public $Street1; // string
		public $Street2; // string
		public $City; // string
		public $StateProvince; // TypeStateProvince
		public $PostalCode; // string
		public $CountryCode; // TypeISOCountryCodeA3
	}
}

if (!class_exists("TypeStateProvince")) {
	/*
	 *TypeStateProvince
	 */
	class TypeStateProvince {
	}
}

if (!class_exists("TypeISOCountryCodeA3")) {
	/*
	 *TypeISOCountryCodeA3
	 */
	class TypeISOCountryCodeA3 {
	}
}

if (!class_exists("BankcardMerchantData")) {
	/*
	 *BankcardMerchantData
	 */
	class BankcardMerchantData {
		public $ABANumber; // string
		public $AcquirerBIN; // string
		public $AgentBank; // string
		public $AgentChain; // string
		public $Aggregator; // boolean
		public $ClientNumber; // string
		public $IndustryType; // IndustryType
		public $Location; // string
		public $MerchantType; // string
		public $PrintCustomerServicePhone; // boolean
		public $QualificationCodes; // string
		public $ReimbursementAttribute; // string
		public $SIC; // string
		public $SecondaryTerminalId; // string
		public $SettlementAgent; // string
		public $SharingGroup; // string
		public $StoreId; // string
		public $TerminalId; // string
		public $TimeZoneDifferential; // string
	}
}

if (!class_exists("IndustryType")) {
	/*
	 *IndustryType
	 */
	class IndustryType {
	}
}

if (!class_exists("ElectronicCheckingMerchantData")) {
	/*
	 *ElectronicCheckingMerchantData
	 */
	class ElectronicCheckingMerchantData {
		public $OrginatorId; // string
		public $ProductId; // string
		public $SiteId; // string
	}
}

if (!class_exists("StoredValueMerchantData")) {
	/*
	 *StoredValueMerchantData
	 */
	class StoredValueMerchantData {
		public $ClientNumber; // string
		public $IndustryType; // IndustryType
		public $SIC; // string
		public $StoreId; // string
		public $TerminalId; // string
		public $AgentChain; // string
	}
}

if (!class_exists("MerchantProfileTransactionData")) {
	/*
	 *MerchantProfileTransactionData
	 */
	class MerchantProfileTransactionData {
		public $BankcardTransactionDataDefaults; // BankcardTransactionDataDefaults
	}
}

if (!class_exists("BankcardTransactionDataDefaults")) {
	/*
	 *BankcardTransactionDataDefaults
	 */
	class BankcardTransactionDataDefaults {
		public $CurrencyCode; // TypeISOCurrencyCodeA3
		public $CustomerPresent; // CustomerPresent
		public $EntryMode; // EntryMode
		public $RequestACI; // RequestACI
		public $RequestAdvice; // RequestAdvice
	}
}

if (!class_exists("TypeISOCurrencyCodeA3")) {
	/*
	 *TypeISOCurrencyCodeA3
	 */
	class TypeISOCurrencyCodeA3 {
	}
}

if (!class_exists("CustomerPresent")) {
	/*
	 *CustomerPresent
	 */
	class CustomerPresent {
	}
}

if (!class_exists("EntryMode")) {
	/*
	 *EntryMode
	 */
	class EntryMode {
	}
}

if (!class_exists("RequestACI")) {
	/*
	 *RequestACI
	 */
	class RequestACI {
	}
}

if (!class_exists("RequestAdvice")) {
	/*
	 *RequestAdvice
	 */
	class RequestAdvice {
	}
}

if (!class_exists("TypeRestrictedOperation")) {
	/*
	 *TypeRestrictedOperation
	 */
	class TypeRestrictedOperation {
	}
}

if (!class_exists("ServiceCredentials")) {
	/*
	 *ServiceCredentials
	 */
	class ServiceCredentials {
		public $Password; // string
		public $Username; // string
	}
}

if (!class_exists("HostedPayments")) {
	/*
	 *HostedPayments
	 */
	class HostedPayments {
		public $Code; // string
		public $Key; // string
	}
}

if (!class_exists("GetMerchantProfileIds")) {
	/*
	 *GetMerchantProfileIds
	 */
	class GetMerchantProfileIds {
		public $sessionToken; // string
		public $serviceId; // string
		public $tenderType; // TenderType
	}
}

if (!class_exists("GetMerchantProfileIdsResponse")) {
	/*
	 *GetMerchantProfileIdsResponse
	 */
	class GetMerchantProfileIdsResponse {
		public $GetMerchantProfileIdsResult; // ArrayOfstring
	}
}

if (!class_exists("GetMerchantProfilesByProfileId")) {
	/*
	 *GetMerchantProfilesByProfileId
	 */
	class GetMerchantProfilesByProfileId {
		public $sessionToken; // string
		public $merchantProfileId; // string
	}
}

if (!class_exists("GetMerchantProfilesByProfileIdResponse")) {
	/*
	 *GetMerchantProfilesByProfileIdResponse
	 */
	class GetMerchantProfilesByProfileIdResponse {
		public $GetMerchantProfilesByProfileIdResult; // ArrayOfMerchantProfile
	}
}

if (!class_exists("GetMerchantProfile")) {
	/*
	 *GetMerchantProfile
	 */
	class GetMerchantProfile {
		public $sessionToken; // string
		public $merchantProfileId; // string
		public $serviceId; // string
		public $tenderType; // TenderType
	}
}

if (!class_exists("GetMerchantProfileResponse")) {
	/*
	 *GetMerchantProfileResponse
	 */
	class GetMerchantProfileResponse {
		public $GetMerchantProfileResult; // MerchantProfile
	}
}

if (!class_exists("DeleteMerchantProfile")) {
	/*
	 *DeleteMerchantProfile
	 */
	class DeleteMerchantProfile {
		public $sessionToken; // string
		public $merchantProfileId; // string
		public $serviceId; // string
		public $tenderType; // TenderType
	}
}

if (!class_exists("DeleteMerchantProfileResponse")) {
	/*
	 *DeleteMerchantProfileResponse
	 */
	class DeleteMerchantProfileResponse {
	}
}

if (!class_exists("SaveMerchantProfiles")) {
	/*
	 *SaveMerchantProfiles
	 */
	class SaveMerchantProfiles {
		public $sessionToken; // string
		public $serviceId; // string
		public $tenderType; // TenderType
		public $merchantProfiles; // ArrayOfMerchantProfile
	}
}

if (!class_exists("SaveMerchantProfilesResponse")) {
	/*
	 *SaveMerchantProfilesResponse
	 */
	class SaveMerchantProfilesResponse {
	}
}

if (!class_exists("SignOnWithUsernamePassword")) {
	/*
	 *SignOnWithUsernamePassword
	 */
	class SignOnWithUsernamePassword {
		public $serviceKey; // string
		public $username; // string
		public $password; // string
	}
}

if (!class_exists("SignOnWithUsernamePasswordResponse")) {
	/*
	 *SignOnWithUsernamePasswordResponse
	 */
	class SignOnWithUsernamePasswordResponse {
		public $SignOnWithUsernamePasswordResult; // TokenResponse
	}
}

if (!class_exists("ChangePassword")) {
	/*
	 *ChangePassword
	 */
	class ChangePassword {
		public $serviceKey; // string
		public $userName; // string
		public $password; // string
		public $newPassword; // string
	}
}

if (!class_exists("ChangePasswordResponse")) {
	/*
	 *ChangePasswordResponse
	 */
	class ChangePasswordResponse {
	}
}

if (!class_exists("ChangeUsername")) {
	/*
	 *ChangeUsername
	 */
	class ChangeUsername {
		public $serviceKey; // string
		public $userName; // string
		public $password; // string
		public $newUsername; // string
	}
}

if (!class_exists("ChangeUsernameResponse")) {
	/*
	 *ChangeUsernameResponse
	 */
	class ChangeUsernameResponse {
	}
}

if (!class_exists("ChangeEmail")) {
	/*
	 *ChangeEmail
	 */
	class ChangeEmail {
		public $serviceKey; // string
		public $userName; // string
		public $password; // string
		public $newEmail; // string
	}
}

if (!class_exists("ChangeEmailResponse")) {
	/*
	 *ChangeEmailResponse
	 */
	class ChangeEmailResponse {
	}
}

if (!class_exists("GetPasswordExpiration")) {
	/*
	 *GetPasswordExpiration
	 */
	class GetPasswordExpiration {
		public $serviceKey; // string
		public $userName; // string
		public $password; // string
	}
}

if (!class_exists("GetPasswordExpirationResponse")) {
	/*
	 *GetPasswordExpirationResponse
	 */
	class GetPasswordExpirationResponse {
		public $GetPasswordExpirationResult; // dateTime
	}
}

if (!class_exists("ValidateMerchantProfile")) {
	/*
	 *ValidateMerchantProfile
	 */
	class ValidateMerchantProfile {
		public $sessionToken; // string
		public $serviceId; // string
		public $tenderType; // TenderType
		public $merchantProfile; // MerchantProfile
	}
}

if (!class_exists("ValidateMerchantProfileResponse")) {
	/*
	 *ValidateMerchantProfileResponse
	 */
	class ValidateMerchantProfileResponse {
	}
}

if (!class_exists("GetAllClaims")) {
	/*
	 *GetAllClaims
	 */
	class GetAllClaims {
		public $identityToken; // string
	}
}

if (!class_exists("GetAllClaimsResponse")) {
	/*
	 *GetAllClaimsResponse
	 */
	class GetAllClaimsResponse {
		public $GetAllClaimsResult; // ArrayOfClaimMetaData
	}
}

if (!class_exists("GetClaims")) {
	/*
	 *GetClaims
	 */
	class GetClaims {
		public $identityToken; // string
		public $claimNSs; // ArrayOfstring
	}
}

if (!class_exists("GetClaimsResponse")) {
	/*
	 *GetClaimsResponse
	 */
	class GetClaimsResponse {
		public $GetClaimsResult; // ArrayOfClaimMetaData
	}
}

if (!class_exists("SignOnAndAddClaims")) {
	/*
	 *SignOnAndAddClaims
	 */
	class SignOnAndAddClaims {
		public $identityToken; // string
		public $claims; // ArrayOfClaimMetaData
	}
}

if (!class_exists("SignOnAndAddClaimsResponse")) {
	/*
	 *SignOnAndAddClaimsResponse
	 */
	class SignOnAndAddClaimsResponse {
		public $SignOnAndAddClaimsResult; // string
	}
}

if (!class_exists("DelegatedSignOn")) {
	/*
	 *DelegatedSignOn
	 */
	class DelegatedSignOn {
		public $identityToken; // string
		public $onBehalfOfServiceKey; // string
	}
}

if (!class_exists("DelegatedSignOnResponse")) {
	/*
	 *DelegatedSignOnResponse
	 */
	class DelegatedSignOnResponse {
		public $DelegatedSignOnResult; // string
	}
}

if (!class_exists("STSUnavailableFault")) {
	/*
	 *STSUnavailableFault
	 */
	class STSUnavailableFault {
	}
}

if (!class_exists("BaseFault")) {
	/*
	 *BaseFault
	 */
	class BaseFault {
		public $ErrorID; // int
		public $HelpURL; // string
		public $Operation; // string
		public $ProblemType; // string
	}
}

if (!class_exists("ExpiredTokenFault")) {
	/*
	 *ExpiredTokenFault
	 */
	class ExpiredTokenFault {
	}
}

if (!class_exists("InvalidTokenFault")) {
	/*
	 *InvalidTokenFault
	 */
	class InvalidTokenFault {
	}
}

if (!class_exists("AuthenticationFault")) {
	/*
	 *AuthenticationFault
	 */
	class AuthenticationFault {
	}
}

if (!class_exists("PasswordExpiredFault")) {
	/*
	 *PasswordExpiredFault
	 */
	class PasswordExpiredFault {
	}
}

if (!class_exists("OneTimePasswordFault")) {
	/*
	 *OneTimePasswordFault
	 */
	class OneTimePasswordFault {
	}
}

if (!class_exists("BadAttemptThresholdExceededFault")) {
	/*
	 *BadAttemptThresholdExceededFault
	 */
	class BadAttemptThresholdExceededFault {
	}
}

if (!class_exists("LockedByAdminFault")) {
	/*
	 *LockedByAdminFault
	 */
	class LockedByAdminFault {
	}
}

if (!class_exists("SendEmailFault")) {
	/*
	 *SendEmailFault
	 */
	class SendEmailFault {
	}
}

if (!class_exists("PasswordInvalidFault")) {
	/*
	 *PasswordInvalidFault
	 */
	class PasswordInvalidFault {
	}
}

if (!class_exists("UserNotFoundFault")) {
	/*
	 *UserNotFoundFault
	 */
	class UserNotFoundFault {
	}
}

if (!class_exists("InvalidEmailFault")) {
	/*
	 *InvalidEmailFault
	 */
	class InvalidEmailFault {
	}
}

if (!class_exists("SystemFault")) {
	/*
	 *SystemFault
	 */
	class SystemFault {
	}
}

if (!class_exists("CWSFault")) {
	/*
	 *CWSFault
	 */
	class CWSFault {
	}
}

if (!class_exists("CWSBaseFault")) {
	/*
	 *CWSBaseFault
	 */
	class CWSBaseFault {
		public $ErrorID; // int
		public $HelpURL; // string
		public $Operation; // string
		public $ProblemType; // string
	}
}

if (!class_exists("CWSServiceInformationUnavailableFault")) {
	/*
	 *CWSServiceInformationUnavailableFault
	 */
	class CWSServiceInformationUnavailableFault {
	}
}

if (!class_exists("CWSValidationResultFault")) {
	/*
	 *CWSValidationResultFault
	 */
	class CWSValidationResultFault {
		public $Errors; // ArrayOfCWSValidationErrorFault
	}
}

if (!class_exists("CWSValidationErrorFault")) {
	/*
	 *CWSValidationErrorFault
	 */
	class CWSValidationErrorFault {
		public $ErrorType; // CWSValidationErrorFault_EErrorType
		public $RuleKey; // string
		public $RuleLocationKey; // string
		public $RuleMessage; // string
		public $TransactionId; // string
	}
}

if (!class_exists("CWSValidationErrorFault_EErrorType")) {
	/*
	 *CWSValidationErrorFault_EErrorType
	 */
	class CWSValidationErrorFault_EErrorType {
	}
}


?>
