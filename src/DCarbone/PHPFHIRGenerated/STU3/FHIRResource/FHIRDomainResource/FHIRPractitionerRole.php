<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A specific set of Roles/Locations/specialties/services that a practitioner may
 * perform at an organization for a period of time.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRPractitionerRole
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRPractitionerRole extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PRACTITIONER_ROLE;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACTIVE = 'active';
    const FIELD_ACTIVE_EXT = '_active';
    const FIELD_AVAILABILITY_EXCEPTIONS = 'availabilityExceptions';
    const FIELD_AVAILABILITY_EXCEPTIONS_EXT = '_availabilityExceptions';
    const FIELD_AVAILABLE_TIME = 'availableTime';
    const FIELD_CODE = 'code';
    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_HEALTHCARE_SERVICE = 'healthcareService';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_NOT_AVAILABLE = 'notAvailable';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_PERIOD = 'period';
    const FIELD_PRACTITIONER = 'practitioner';
    const FIELD_SPECIALTY = 'specialty';
    const FIELD_TELECOM = 'telecom';
    const FIELD_TELECOM_EXT = '_telecom';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this practitioner's record is in active use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $active = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $availabilityExceptions = null;

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     *
     * A collection of times that the Service Site is available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime[]
     */
    protected $availableTime = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Roles which this practitioner is authorized to perform for the organization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $code = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the practitioner
     * with this role.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $endpoint = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The list of healthcare services that this worker provides for this role's
     * Organization/Location(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $healthcareService = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business Identifiers that are specific to a role/location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) at which this practitioner provides care.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $location = [];

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable[]
     */
    protected $notAvailable = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization where the Practitioner performs the roles associated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $organization = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the person is authorized to act as a practitioner in
     * these role(s) for the organization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Practitioner that is able to provide the defined services for the organation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $practitioner = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific specialty of the practitioner.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $specialty = [];

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details that are specific to the role/location/service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint[]
     */
    protected $telecom = [];

    /**
     * FHIRPractitionerRole Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPractitionerRole::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTIVE])) {
            $ext = (isset($data[self::FIELD_ACTIVE_EXT]) && is_array($data[self::FIELD_ACTIVE_EXT]))
                ? $data[self::FIELD_ACTIVE_EXT]
                : null;
            if ($data[self::FIELD_ACTIVE] instanceof FHIRBoolean) {
                $this->setActive($data[self::FIELD_ACTIVE]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACTIVE])) {
                $this->setActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ACTIVE]] + $ext));
            } else {
                $this->setActive(new FHIRBoolean($data[self::FIELD_ACTIVE]));
            }
        }
        if (isset($data[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
            $ext = (isset($data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]) && is_array($data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]))
                ? $data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]
                : null;
            if ($data[self::FIELD_AVAILABILITY_EXCEPTIONS] instanceof FHIRString) {
                $this->setAvailabilityExceptions($data[self::FIELD_AVAILABILITY_EXCEPTIONS]);
            } elseif ($ext && is_scalar($data[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
                $this->setAvailabilityExceptions(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_AVAILABILITY_EXCEPTIONS]] + $ext));
            } else {
                $this->setAvailabilityExceptions(new FHIRString($data[self::FIELD_AVAILABILITY_EXCEPTIONS]));
            }
        }
        if (isset($data[self::FIELD_AVAILABLE_TIME])) {
            if (is_array($data[self::FIELD_AVAILABLE_TIME])) {
                foreach($data[self::FIELD_AVAILABLE_TIME] as $v) {
                    if ($v instanceof FHIRPractitionerRoleAvailableTime) {
                        $this->addAvailableTime($v);
                    } else {
                        $this->addAvailableTime(new FHIRPractitionerRoleAvailableTime($v));
                    }
                }
            } else if ($data[self::FIELD_AVAILABLE_TIME] instanceof FHIRPractitionerRoleAvailableTime) {
                $this->addAvailableTime($data[self::FIELD_AVAILABLE_TIME]);
            } else {
                $this->addAvailableTime(new FHIRPractitionerRoleAvailableTime($data[self::FIELD_AVAILABLE_TIME]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_ENDPOINT])) {
            if (is_array($data[self::FIELD_ENDPOINT])) {
                foreach($data[self::FIELD_ENDPOINT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEndpoint($v);
                    } else {
                        $this->addEndpoint(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENDPOINT] instanceof FHIRReference) {
                $this->addEndpoint($data[self::FIELD_ENDPOINT]);
            } else {
                $this->addEndpoint(new FHIRReference($data[self::FIELD_ENDPOINT]));
            }
        }
        if (isset($data[self::FIELD_HEALTHCARE_SERVICE])) {
            if (is_array($data[self::FIELD_HEALTHCARE_SERVICE])) {
                foreach($data[self::FIELD_HEALTHCARE_SERVICE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addHealthcareService($v);
                    } else {
                        $this->addHealthcareService(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_HEALTHCARE_SERVICE] instanceof FHIRReference) {
                $this->addHealthcareService($data[self::FIELD_HEALTHCARE_SERVICE]);
            } else {
                $this->addHealthcareService(new FHIRReference($data[self::FIELD_HEALTHCARE_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if (is_array($data[self::FIELD_LOCATION])) {
                foreach($data[self::FIELD_LOCATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addLocation($v);
                    } else {
                        $this->addLocation(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->addLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->addLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_NOT_AVAILABLE])) {
            if (is_array($data[self::FIELD_NOT_AVAILABLE])) {
                foreach($data[self::FIELD_NOT_AVAILABLE] as $v) {
                    if ($v instanceof FHIRPractitionerRoleNotAvailable) {
                        $this->addNotAvailable($v);
                    } else {
                        $this->addNotAvailable(new FHIRPractitionerRoleNotAvailable($v));
                    }
                }
            } else if ($data[self::FIELD_NOT_AVAILABLE] instanceof FHIRPractitionerRoleNotAvailable) {
                $this->addNotAvailable($data[self::FIELD_NOT_AVAILABLE]);
            } else {
                $this->addNotAvailable(new FHIRPractitionerRoleNotAvailable($data[self::FIELD_NOT_AVAILABLE]));
            }
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PRACTITIONER])) {
            if ($data[self::FIELD_PRACTITIONER] instanceof FHIRReference) {
                $this->setPractitioner($data[self::FIELD_PRACTITIONER]);
            } else {
                $this->setPractitioner(new FHIRReference($data[self::FIELD_PRACTITIONER]));
            }
        }
        if (isset($data[self::FIELD_SPECIALTY])) {
            if (is_array($data[self::FIELD_SPECIALTY])) {
                foreach($data[self::FIELD_SPECIALTY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialty($v);
                    } else {
                        $this->addSpecialty(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIALTY] instanceof FHIRCodeableConcept) {
                $this->addSpecialty($data[self::FIELD_SPECIALTY]);
            } else {
                $this->addSpecialty(new FHIRCodeableConcept($data[self::FIELD_SPECIALTY]));
            }
        }
        if (isset($data[self::FIELD_TELECOM])) {
            $ext = (isset($data[self::FIELD_TELECOM_EXT]) && is_array($data[self::FIELD_TELECOM_EXT]))
                ? $data[self::FIELD_TELECOM_EXT]
                : null;
            if (is_array($data[self::FIELD_TELECOM])) {
                foreach($data[self::FIELD_TELECOM] as $i => $v) {
                    if ($v instanceof FHIRContactPoint) {
                        $this->addTelecom($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addTelecom(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addTelecom(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
                $this->addTelecom($data[self::FIELD_TELECOM]);
            } elseif ($ext && is_scalar($data[self::FIELD_TELECOM])) {
                $this->addTelecom(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_TELECOM]] + $ext));
            } else {
                $this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<PractitionerRole{$xmlns}></PractitionerRole>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this practitioner's record is in active use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this practitioner's record is in active use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $active
     * @return static
     */
    public function setActive($active = null)
    {
        if (null === $active) {
            $this->active = null;
            return $this;
        }
        if ($active instanceof FHIRBoolean) {
            $this->active = $active;
            return $this;
        }
        $this->active = new FHIRBoolean($active);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions()
    {
        return $this->availabilityExceptions;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $availabilityExceptions
     * @return static
     */
    public function setAvailabilityExceptions($availabilityExceptions = null)
    {
        if (null === $availabilityExceptions) {
            $this->availabilityExceptions = null;
            return $this;
        }
        if ($availabilityExceptions instanceof FHIRString) {
            $this->availabilityExceptions = $availabilityExceptions;
            return $this;
        }
        $this->availabilityExceptions = new FHIRString($availabilityExceptions);
        return $this;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     *
     * A collection of times that the Service Site is available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime[]
     */
    public function getAvailableTime()
    {
        return $this->availableTime;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     *
     * A collection of times that the Service Site is available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime $availableTime
     * @return static
     */
    public function addAvailableTime(FHIRPractitionerRoleAvailableTime $availableTime = null)
    {
        $this->availableTime[] = $availableTime;
        return $this;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     *
     * A collection of times that the Service Site is available.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime[] $availableTime
     * @return static
     */
    public function setAvailableTime(array $availableTime = [])
    {
        $this->availableTime = [];
        if ([] === $availableTime) {
            return $this;
        }
        foreach($availableTime as $v) {
            if ($v instanceof FHIRPractitionerRoleAvailableTime) {
                $this->addAvailableTime($v);
            } else {
                $this->addAvailableTime(new FHIRPractitionerRoleAvailableTime($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Roles which this practitioner is authorized to perform for the organization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Roles which this practitioner is authorized to perform for the organization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function addCode(FHIRCodeableConcept $code = null)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Roles which this practitioner is authorized to perform for the organization.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $code
     * @return static
     */
    public function setCode(array $code = [])
    {
        $this->code = [];
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the practitioner
     * with this role.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the practitioner
     * with this role.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $endpoint
     * @return static
     */
    public function addEndpoint(FHIRReference $endpoint = null)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the practitioner
     * with this role.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $endpoint
     * @return static
     */
    public function setEndpoint(array $endpoint = [])
    {
        $this->endpoint = [];
        if ([] === $endpoint) {
            return $this;
        }
        foreach($endpoint as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEndpoint($v);
            } else {
                $this->addEndpoint(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The list of healthcare services that this worker provides for this role's
     * Organization/Location(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getHealthcareService()
    {
        return $this->healthcareService;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The list of healthcare services that this worker provides for this role's
     * Organization/Location(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $healthcareService
     * @return static
     */
    public function addHealthcareService(FHIRReference $healthcareService = null)
    {
        $this->healthcareService[] = $healthcareService;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The list of healthcare services that this worker provides for this role's
     * Organization/Location(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $healthcareService
     * @return static
     */
    public function setHealthcareService(array $healthcareService = [])
    {
        $this->healthcareService = [];
        if ([] === $healthcareService) {
            return $this;
        }
        foreach($healthcareService as $v) {
            if ($v instanceof FHIRReference) {
                $this->addHealthcareService($v);
            } else {
                $this->addHealthcareService(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business Identifiers that are specific to a role/location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business Identifiers that are specific to a role/location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business Identifiers that are specific to a role/location.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) at which this practitioner provides care.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) at which this practitioner provides care.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $location
     * @return static
     */
    public function addLocation(FHIRReference $location = null)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) at which this practitioner provides care.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $location
     * @return static
     */
    public function setLocation(array $location = [])
    {
        $this->location = [];
        if ([] === $location) {
            return $this;
        }
        foreach($location as $v) {
            if ($v instanceof FHIRReference) {
                $this->addLocation($v);
            } else {
                $this->addLocation(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable[]
     */
    public function getNotAvailable()
    {
        return $this->notAvailable;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable $notAvailable
     * @return static
     */
    public function addNotAvailable(FHIRPractitionerRoleNotAvailable $notAvailable = null)
    {
        $this->notAvailable[] = $notAvailable;
        return $this;
    }

    /**
     * A specific set of Roles/Locations/specialties/services that a practitioner may
     * perform at an organization for a period of time.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable[] $notAvailable
     * @return static
     */
    public function setNotAvailable(array $notAvailable = [])
    {
        $this->notAvailable = [];
        if ([] === $notAvailable) {
            return $this;
        }
        foreach($notAvailable as $v) {
            if ($v instanceof FHIRPractitionerRoleNotAvailable) {
                $this->addNotAvailable($v);
            } else {
                $this->addNotAvailable(new FHIRPractitionerRoleNotAvailable($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization where the Practitioner performs the roles associated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization where the Practitioner performs the roles associated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the person is authorized to act as a practitioner in
     * these role(s) for the organization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the person is authorized to act as a practitioner in
     * these role(s) for the organization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Practitioner that is able to provide the defined services for the organation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Practitioner that is able to provide the defined services for the organation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $practitioner
     * @return static
     */
    public function setPractitioner(FHIRReference $practitioner = null)
    {
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific specialty of the practitioner.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific specialty of the practitioner.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $specialty
     * @return static
     */
    public function addSpecialty(FHIRCodeableConcept $specialty = null)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific specialty of the practitioner.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $specialty
     * @return static
     */
    public function setSpecialty(array $specialty = [])
    {
        $this->specialty = [];
        if ([] === $specialty) {
            return $this;
        }
        foreach($specialty as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialty($v);
            } else {
                $this->addSpecialty(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details that are specific to the role/location/service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details that are specific to the role/location/service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint $telecom
     * @return static
     */
    public function addTelecom(FHIRContactPoint $telecom = null)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details that are specific to the role/location/service.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint[] $telecom
     * @return static
     */
    public function setTelecom(array $telecom = [])
    {
        $this->telecom = [];
        if ([] === $telecom) {
            return $this;
        }
        foreach($telecom as $v) {
            if ($v instanceof FHIRContactPoint) {
                $this->addTelecom($v);
            } else {
                $this->addTelecom(new FHIRContactPoint($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitionerRole $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRPractitionerRole::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPractitionerRole::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRPractitionerRole;
        } elseif (!is_object($type) || !($type instanceof FHIRPractitionerRole)) {
            throw new \RuntimeException(sprintf(
                'FHIRPractitionerRole::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitionerRole or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->active)) {
            $type->setActive((string)$attributes->active);
        }
        if (isset($children->active)) {
            $type->setActive(FHIRBoolean::xmlUnserialize($children->active));
        }
        if (isset($attributes->availabilityExceptions)) {
            $type->setAvailabilityExceptions((string)$attributes->availabilityExceptions);
        }
        if (isset($children->availabilityExceptions)) {
            $type->setAvailabilityExceptions(FHIRString::xmlUnserialize($children->availabilityExceptions));
        }
        if (isset($children->availableTime)) {
            foreach($children->availableTime as $child) {
                $type->addAvailableTime(FHIRPractitionerRoleAvailableTime::xmlUnserialize($child));
            }
        }
        if (isset($children->code)) {
            foreach($children->code as $child) {
                $type->addCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->endpoint)) {
            foreach($children->endpoint as $child) {
                $type->addEndpoint(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->healthcareService)) {
            foreach($children->healthcareService as $child) {
                $type->addHealthcareService(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            foreach($children->location as $child) {
                $type->addLocation(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->notAvailable)) {
            foreach($children->notAvailable as $child) {
                $type->addNotAvailable(FHIRPractitionerRoleNotAvailable::xmlUnserialize($child));
            }
        }
        if (isset($children->organization)) {
            $type->setOrganization(FHIRReference::xmlUnserialize($children->organization));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->practitioner)) {
            $type->setPractitioner(FHIRReference::xmlUnserialize($children->practitioner));
        }
        if (isset($children->specialty)) {
            foreach($children->specialty as $child) {
                $type->addSpecialty(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->telecom)) {
            foreach($children->telecom as $child) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActive())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABILITY_EXCEPTIONS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getAvailableTime())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABLE_TIME, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getEndpoint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENDPOINT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getHealthcareService())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_HEALTHCARE_SERVICE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getLocation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getNotAvailable())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOT_AVAILABLE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANIZATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPractitioner())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRACTITIONER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSpecialty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIALTY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getTelecom())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TELECOM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getActive())) {
            $a[self::FIELD_ACTIVE] = $v->getValue();
            $a[self::FIELD_ACTIVE_EXT] = $v;
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            $a[self::FIELD_AVAILABILITY_EXCEPTIONS] = $v->getValue();
            $a[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT] = $v;
        }
        if ([] !== ($vs = $this->getAvailableTime())) {
            $a[self::FIELD_AVAILABLE_TIME] = $vs;
        }
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getEndpoint())) {
            $a[self::FIELD_ENDPOINT] = $vs;
        }
        if ([] !== ($vs = $this->getHealthcareService())) {
            $a[self::FIELD_HEALTHCARE_SERVICE] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $vs;
        }
        if ([] !== ($vs = $this->getNotAvailable())) {
            $a[self::FIELD_NOT_AVAILABLE] = $vs;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a[self::FIELD_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPractitioner())) {
            $a[self::FIELD_PRACTITIONER] = $v;
        }
        if ([] !== ($vs = $this->getSpecialty())) {
            $a[self::FIELD_SPECIALTY] = $vs;
        }
        if ([] !== ($vs = $this->getTelecom())) {
            $a[self::FIELD_TELECOM] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}