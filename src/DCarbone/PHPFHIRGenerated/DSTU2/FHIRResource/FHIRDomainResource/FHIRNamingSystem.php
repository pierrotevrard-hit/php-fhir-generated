<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 30th, 2019 23:37+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemContact;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNamingSystemType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A curated namespace that issues unique symbols within that namespace for the
 * identification of concepts, people, devices, etc. Represents a "System" used
 * within the Identifier and Coding data types.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRNamingSystem
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRNamingSystem extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM;
    const FIELD_CONTACT = 'contact';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_KIND = 'kind';
    const FIELD_KIND_EXT = '_kind';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_REPLACED_BY = 'replacedBy';
    const FIELD_RESPONSIBLE = 'responsible';
    const FIELD_RESPONSIBLE_EXT = '_responsible';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TYPE = 'type';
    const FIELD_UNIQUE_ID = 'uniqueId';
    const FIELD_USAGE = 'usage';
    const FIELD_USAGE_EXT = '_usage';
    const FIELD_USE_CONTEXT = 'useContext';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemContact[]
     */
    protected $contact = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the system was registered or published. The
     * date must change when the business version changes, if it does, and it must
     * change if the status code changes. In addition, it should change when the
     * substantive content of the registration changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Details about what the namespace identifies including scope, granularity,
     * version labeling, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * Identifies the purpose of the naming system.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose for the naming system - what kinds of things does it make
     * unique?
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNamingSystemType
     */
    protected $kind = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The descriptive name of this particular identifier type or code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the naming system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $publisher = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For naming systems that are retired, indicates the naming system that should be
     * used in their place (if any).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $replacedBy = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization that is responsible for issuing identifiers or
     * codes for this namespace and ensuring their non-collision.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $responsible = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates whether the naming system is "ready for use" or not.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Categorizes a naming system for easier search by grouping related naming
     * systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     *
     * Indicates how the system may be identified when referenced in electronic
     * exchange.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId[]
     */
    protected $uniqueId = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Provides guidance on the use of the namespace, including the handling of
     * formatting characters, use of upper vs. lower case, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $usage = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * of naming systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $useContext = [];

    /**
     * Validation map for fields in type NamingSystem
     * @var array
     */
    private static $_fieldValidation = [
        self::FIELD_UNIQUE_ID => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRNamingSystem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRNamingSystemContact) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRNamingSystemContact($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRNamingSystemContact) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRNamingSystemContact($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $data[self::FIELD_DATE])));
                }
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
                } else if (is_array($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString(array_merge($ext, $data[self::FIELD_DESCRIPTION])));
                }
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_KIND])) {
            $ext = (isset($data[self::FIELD_KIND_EXT]) && is_array($data[self::FIELD_KIND_EXT]))
                ? $data[self::FIELD_KIND_EXT]
                : null;
            if ($data[self::FIELD_KIND] instanceof FHIRNamingSystemType) {
                $this->setKind($data[self::FIELD_KIND]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_KIND])) {
                    $this->setKind(new FHIRNamingSystemType([FHIRNamingSystemType::FIELD_VALUE => $data[self::FIELD_KIND]] + $ext));
                } else if (is_array($data[self::FIELD_KIND])) {
                    $this->setKind(new FHIRNamingSystemType(array_merge($ext, $data[self::FIELD_KIND])));
                }
            } else {
                $this->setKind(new FHIRNamingSystemType($data[self::FIELD_KIND]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
                } else if (is_array($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString(array_merge($ext, $data[self::FIELD_NAME])));
                }
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PUBLISHER])) {
            $ext = (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT]))
                ? $data[self::FIELD_PUBLISHER_EXT]
                : null;
            if ($data[self::FIELD_PUBLISHER] instanceof FHIRString) {
                $this->setPublisher($data[self::FIELD_PUBLISHER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PUBLISHER])) {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PUBLISHER]] + $ext));
                } else if (is_array($data[self::FIELD_PUBLISHER])) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $data[self::FIELD_PUBLISHER])));
                }
            } else {
                $this->setPublisher(new FHIRString($data[self::FIELD_PUBLISHER]));
            }
        }
        if (isset($data[self::FIELD_REPLACED_BY])) {
            if ($data[self::FIELD_REPLACED_BY] instanceof FHIRReference) {
                $this->setReplacedBy($data[self::FIELD_REPLACED_BY]);
            } else {
                $this->setReplacedBy(new FHIRReference($data[self::FIELD_REPLACED_BY]));
            }
        }
        if (isset($data[self::FIELD_RESPONSIBLE])) {
            $ext = (isset($data[self::FIELD_RESPONSIBLE_EXT]) && is_array($data[self::FIELD_RESPONSIBLE_EXT]))
                ? $data[self::FIELD_RESPONSIBLE_EXT]
                : null;
            if ($data[self::FIELD_RESPONSIBLE] instanceof FHIRString) {
                $this->setResponsible($data[self::FIELD_RESPONSIBLE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_RESPONSIBLE])) {
                    $this->setResponsible(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_RESPONSIBLE]] + $ext));
                } else if (is_array($data[self::FIELD_RESPONSIBLE])) {
                    $this->setResponsible(new FHIRString(array_merge($ext, $data[self::FIELD_RESPONSIBLE])));
                }
            } else {
                $this->setResponsible(new FHIRString($data[self::FIELD_RESPONSIBLE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRCode) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
                } else if (is_array($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRCode(array_merge($ext, $data[self::FIELD_STATUS])));
                }
            } else {
                $this->setStatus(new FHIRCode($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_UNIQUE_ID])) {
            if (is_array($data[self::FIELD_UNIQUE_ID])) {
                foreach($data[self::FIELD_UNIQUE_ID] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRNamingSystemUniqueId) {
                        $this->addUniqueId($v);
                    } else {
                        $this->addUniqueId(new FHIRNamingSystemUniqueId($v));
                    }
                }
            } else if ($data[self::FIELD_UNIQUE_ID] instanceof FHIRNamingSystemUniqueId) {
                $this->addUniqueId($data[self::FIELD_UNIQUE_ID]);
            } else {
                $this->addUniqueId(new FHIRNamingSystemUniqueId($data[self::FIELD_UNIQUE_ID]));
            }
        }
        if (isset($data[self::FIELD_USAGE])) {
            $ext = (isset($data[self::FIELD_USAGE_EXT]) && is_array($data[self::FIELD_USAGE_EXT]))
                ? $data[self::FIELD_USAGE_EXT]
                : null;
            if ($data[self::FIELD_USAGE] instanceof FHIRString) {
                $this->setUsage($data[self::FIELD_USAGE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_USAGE])) {
                    $this->setUsage(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_USAGE]] + $ext));
                } else if (is_array($data[self::FIELD_USAGE])) {
                    $this->setUsage(new FHIRString(array_merge($ext, $data[self::FIELD_USAGE])));
                }
            } else {
                $this->setUsage(new FHIRString($data[self::FIELD_USAGE]));
            }
        }
        if (isset($data[self::FIELD_USE_CONTEXT])) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addUseContext($v);
                    } else {
                        $this->addUseContext(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_USE_CONTEXT] instanceof FHIRCodeableConcept) {
                $this->addUseContext($data[self::FIELD_USE_CONTEXT]);
            } else {
                $this->addUseContext(new FHIRCodeableConcept($data[self::FIELD_USE_CONTEXT]));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<NamingSystem{$xmlns}></NamingSystem>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemContact $contact
     * @return static
     */
    public function addContact(FHIRNamingSystemContact $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemContact[] $contact
     * @return static
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRNamingSystemContact) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRNamingSystemContact($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the system was registered or published. The
     * date must change when the business version changes, if it does, and it must
     * change if the status code changes. In addition, it should change when the
     * substantive content of the registration changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the system was registered or published. The
     * date must change when the business version changes, if it does, and it must
     * change if the status code changes. In addition, it should change when the
     * substantive content of the registration changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Details about what the namespace identifies including scope, granularity,
     * version labeling, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Details about what the namespace identifies including scope, granularity,
     * version labeling, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * Identifies the purpose of the naming system.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose for the naming system - what kinds of things does it make
     * unique?
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNamingSystemType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Identifies the purpose of the naming system.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the purpose for the naming system - what kinds of things does it make
     * unique?
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNamingSystemType $kind
     * @return static
     */
    public function setKind(FHIRNamingSystemType $kind = null)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The descriptive name of this particular identifier type or code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The descriptive name of this particular identifier type or code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the naming system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the naming system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $publisher
     * @return static
     */
    public function setPublisher($publisher = null)
    {
        if (null === $publisher) {
            $this->publisher = null;
            return $this;
        }
        if ($publisher instanceof FHIRString) {
            $this->publisher = $publisher;
            return $this;
        }
        $this->publisher = new FHIRString($publisher);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For naming systems that are retired, indicates the naming system that should be
     * used in their place (if any).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getReplacedBy()
    {
        return $this->replacedBy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For naming systems that are retired, indicates the naming system that should be
     * used in their place (if any).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $replacedBy
     * @return static
     */
    public function setReplacedBy(FHIRReference $replacedBy = null)
    {
        $this->replacedBy = $replacedBy;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization that is responsible for issuing identifiers or
     * codes for this namespace and ensuring their non-collision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization that is responsible for issuing identifiers or
     * codes for this namespace and ensuring their non-collision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $responsible
     * @return static
     */
    public function setResponsible($responsible = null)
    {
        if (null === $responsible) {
            $this->responsible = null;
            return $this;
        }
        if ($responsible instanceof FHIRString) {
            $this->responsible = $responsible;
            return $this;
        }
        $this->responsible = new FHIRString($responsible);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates whether the naming system is "ready for use" or not.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates whether the naming system is "ready for use" or not.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $status
     * @return static
     */
    public function setStatus($status = null)
    {
        if (null === $status) {
            $this->status = null;
            return $this;
        }
        if ($status instanceof FHIRCode) {
            $this->status = $status;
            return $this;
        }
        $this->status = new FHIRCode($status);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Categorizes a naming system for easier search by grouping related naming
     * systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Categorizes a naming system for easier search by grouping related naming
     * systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     *
     * Indicates how the system may be identified when referenced in electronic
     * exchange.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId[]
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     *
     * Indicates how the system may be identified when referenced in electronic
     * exchange.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId $uniqueId
     * @return static
     */
    public function addUniqueId(FHIRNamingSystemUniqueId $uniqueId = null)
    {
        $this->uniqueId[] = $uniqueId;
        return $this;
    }

    /**
     * A curated namespace that issues unique symbols within that namespace for the
     * identification of concepts, people, devices, etc. Represents a "System" used
     * within the Identifier and Coding data types.
     *
     * Indicates how the system may be identified when referenced in electronic
     * exchange.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId[] $uniqueId
     * @return static
     */
    public function setUniqueId(array $uniqueId = [])
    {
        $this->uniqueId = [];
        if ([] === $uniqueId) {
            return $this;
        }
        foreach($uniqueId as $v) {
            if ($v instanceof FHIRNamingSystemUniqueId) {
                $this->addUniqueId($v);
            } else {
                $this->addUniqueId(new FHIRNamingSystemUniqueId($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Provides guidance on the use of the namespace, including the handling of
     * formatting characters, use of upper vs. lower case, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Provides guidance on the use of the namespace, including the handling of
     * formatting characters, use of upper vs. lower case, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $usage
     * @return static
     */
    public function setUsage($usage = null)
    {
        if (null === $usage) {
            $this->usage = null;
            return $this;
        }
        if ($usage instanceof FHIRString) {
            $this->usage = $usage;
            return $this;
        }
        $this->usage = new FHIRString($usage);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * of naming systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * of naming systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $useContext
     * @return static
     */
    public function addUseContext(FHIRCodeableConcept $useContext = null)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * of naming systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $useContext
     * @return static
     */
    public function setUseContext(array $useContext = [])
    {
        $this->useContext = [];
        if ([] === $useContext) {
            return $this;
        }
        foreach($useContext as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addUseContext($v);
            } else {
                $this->addUseContext(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRNamingSystem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRNamingSystem
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
                throw new \DomainException(sprintf('FHIRNamingSystem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRNamingSystem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRNamingSystem;
        } elseif (!is_object($type) || !($type instanceof FHIRNamingSystem)) {
            throw new \RuntimeException(sprintf(
                'FHIRNamingSystem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRNamingSystem or null, %s seen.',
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
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRNamingSystemContact::xmlUnserialize($child));
            }
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->date)) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->date);
            } else {
                $type->setDate((string)$attributes->date);
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->kind)) {
            $type->setKind(FHIRNamingSystemType::xmlUnserialize($children->kind));
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
        }
        if (isset($children->publisher)) {
            $type->setPublisher(FHIRString::xmlUnserialize($children->publisher));
        }
        if (isset($attributes->publisher)) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->publisher);
            } else {
                $type->setPublisher((string)$attributes->publisher);
            }
        }
        if (isset($children->replacedBy)) {
            $type->setReplacedBy(FHIRReference::xmlUnserialize($children->replacedBy));
        }
        if (isset($children->responsible)) {
            $type->setResponsible(FHIRString::xmlUnserialize($children->responsible));
        }
        if (isset($attributes->responsible)) {
            $pt = $type->getResponsible();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->responsible);
            } else {
                $type->setResponsible((string)$attributes->responsible);
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCode::xmlUnserialize($children->status));
        }
        if (isset($attributes->status)) {
            $pt = $type->getStatus();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->status);
            } else {
                $type->setStatus((string)$attributes->status);
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->uniqueId)) {
            foreach($children->uniqueId as $child) {
                $type->addUniqueId(FHIRNamingSystemUniqueId::xmlUnserialize($child));
            }
        }
        if (isset($children->usage)) {
            $type->setUsage(FHIRString::xmlUnserialize($children->usage));
        }
        if (isset($attributes->usage)) {
            $pt = $type->getUsage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->usage);
            } else {
                $type->setUsage((string)$attributes->usage);
            }
        }
        if (isset($children->useContext)) {
            foreach($children->useContext as $child) {
                $type->addUseContext(FHIRCodeableConcept::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getKind())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KIND, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReplacedBy())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPLACED_BY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResponsible())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSIBLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getUniqueId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_UNIQUE_ID, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getUsage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_USE_CONTEXT, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getKind())) {
            $a[self::FIELD_KIND] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_KIND_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PUBLISHER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReplacedBy())) {
            $a[self::FIELD_REPLACED_BY] = $v;
        }
        if (null !== ($v = $this->getResponsible())) {
            $a[self::FIELD_RESPONSIBLE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_RESPONSIBLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getUniqueId())) {
            $a[self::FIELD_UNIQUE_ID] = $vs;
        }
        if (null !== ($v = $this->getUsage())) {
            $a[self::FIELD_USAGE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_USAGE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = $vs;
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