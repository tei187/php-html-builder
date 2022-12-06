<?php

namespace tei187\HTMLBuilder\Constants;

/**
 * Vocabulary prefix-to-URI, based on W3C RDFa-1.1 documentation.
 * @link https://www.w3.org/2011/rdfa-context/rdfa-1.1
 */
class Vocabulary {
/* Vocabulary Prefixes of W3C Documents */
    /**
     * Activity Vocabulary
     * @link https://www.w3.org/TR/activitystreams-vocabulary/ Activity Vocabulary
     */
    const AS = "https://www.w3.org/ns/activitystreams#";

    /**
     * Metadata for Tabular Data
     * @link https://www.w3.org/TR/tabular-metadata/ Metadata Vocabulary for Tabular Data
     */
    const CSVW = "http://www.w3.org/ns/csvw#";

    /**
     * Data Catalog Vocabulary
     * @link http://www.w3.org/TR/vocab-dcat/ Data Catalog Vocabulary (DCAT)
     */
    const DCAT = "http://www.w3.org/ns/dcat#";

    /**
     * Data Quality Vocabulary
     * @link https://www.w3.org/TR/vocab-dqv/ Data on the Web Best Practices: Data Quality Vocabulary
     */
    const DQV = "http://www.w3.org/ns/dqv#";

    /**
     * Dataset Usage Vocabulary
     * @link https://www.w3.org/TR/vocab-duv/ Dataset Usage Vocabulary
     */
    const DUV = "https://www.w3.org/ns/duv#";

    /**
     * GRDDL
     * @link http://www.w3.org/TR/2007/REC-grddl-20070911/ Gleaning Resource Descriptions from Dialects of Languages (GRDDL)
     */
    const GRDDL = "http://www.w3.org/2003/g/data-view#";

    /**
     * JSON-LD
     * @link https://www.w3.org/TR/json-ld/ JSON-LD 1.1, A JSON-based Serialization for Linked Data
     */
    const JSONLD = "http://www.w3.org/ns/json-ld#";

    /**
     * Linked Data Platform Vocabulary
     * @link https://www.w3.org/TR/ldp/ Linked Data Platform 1.0
     */
    const LDP = "http://www.w3.org/ns/ldp#";

    /**
     * Ontology for Media Resources
     * @link http://www.w3.org/TR/2012/REC-mediaont-10-20120209/ Ontology for Media Resources 1.0
     */
    const MA = "http://www.w3.org/ns/ma-ont#";

    /**
     * Web Annotation Vocabulary
     * @link http://www.w3.org/TR/annotation-vocab/ Web Annotation Vocabulary
     */
    const OA = "http://www.w3.org/ns/oa#";

    /**
     * ODRL Vocabulary & Expression 2.2
     * @link https://www.w3.org/TR/odrl-vocab/ ODRL Vocabulary & Expression 2.2
     */
    const ODRL = "http://www.w3.org/ns/odrl/2/";

    /**
     * Organizations
     * @link http://www.w3.org/TR/vocab-org/ The Organization Ontology
     */
    const ORG = "http://www.w3.org/ns/org#";

    /**
     * OWL
     * @link http://www.w3.org/TR/2009/REC-owl2-overview-20091027/ OWL Overview
     */
    const OWL = "http://www.w3.org/2002/07/owl#";

    /**
     * Provenance Vocabulary
     * @link http://www.w3.org/TR/prov-o/ Provenance Ontology
     */
    const PROV = "http://www.w3.org/ns/prov#";

    /**
     * Data Cubes
     * @link http://www.w3.org/TR/vocab-data-cube/ The RDF Data Cube Vocabulary
     */
    const QB = "http://purl.org/linked-data/cube#";

    /**
     * RDF
     * @link http://www.w3.org/TR/2004/REC-rdf-mt-20040210/ RDF Semantics
     */
    const RDF = "http://www.w3.org/1999/02/22-rdf-syntax-ns#";

    /**
     * RDFa Vocabulary
     * @link http://www.w3.org/TR/rdfa-core/ RDFa Core 1.1
     */
    const RDFA = "http://www.w3.org/ns/rdfa#";

    /**
     * RDF Schema
     * @link http://www.w3.org/TR/2004/REC-rdf-mt-20040210/ RDF Semantics
     */
    const RDFS = "http://www.w3.org/2000/01/rdf-schema#";

    /**
     * RIF
     * @link http://www.w3.org/TR/2010/NOTE-rif-overview-20100622/ RIF Overview
     */
    const RIF = "http://www.w3.org/2007/rif#";

    /**
     * R2RML
     * @link http://www.w3.org/TR/2012/REC-r2rml-20120927/ R2RML: RDB to RDF Mapping Language
     */
    const RR = "http://www.w3.org/ns/r2rml#";

    /**
     * SPARQL 1.1 Service Description
     * @link http://www.w3.org/TR/sparql11-service-description/ SPARQL 1.1 Service Description
     */
    const SD = "http://www.w3.org/ns/sparql-service-description#";

    /**
     * SKOS Core
     * @link http://www.w3.org/TR/2009/REC-skos-reference-20090818/ SKOS Simple Knowledge Organization System Reference
     */
    const SKOS = "http://www.w3.org/2004/02/skos/core#";

    /**
     * SKOS eXtension for Labels
     * @link http://www.w3.org/TR/2009/REC-skos-reference-20090818/ SKOS Simple Knowledge Organization System Reference
     */
    const SKOSXL = "http://www.w3.org/2008/05/skos-xl#";

    /**
     * Semantic Sensor Network Ontology
     * @link https://www.w3.org/TR/2017/REC-vocab-ssn-20171019/ Semantic Sensor Network Ontology
     */
    const SSN = "http://www.w3.org/ns/ssn/";

    /**
     * Sensor, Observation, Sample, and Actuator Ontology
     * @link https://www.w3.org/TR/2017/REC-vocab-ssn-20171019/ Semantic Sensor Network Ontology
     */
    const SOSA = "http://www.w3.org/ns/sosa/";

    /**
     * Time Ontology
     * @link https://www.w3.org/TR/2017/REC-owl-time-20171019/ Time Ontology in OWL
     */
    const TIME = "http://www.w3.org/2006/time#";

    /**
     * VoID
     * @link http://www.w3.org/TR/void/ Describing Linked Datasets with the VoID Vocabulary
     */
    const VOID = "http://rdfs.org/ns/void#";

    /**
     * POWDER
     * @link http://www.w3.org/TR/2009/REC-powder-formal-20090901/ Protocol for Web Description Resources (POWDER): Formal Semantics
     */
    const WDR = "http://www.w3.org/2007/05/powder#";

    /**
     * POWDER-S
     * @link http://www.w3.org/TR/2009/REC-powder-formal-20090901/ Protocol for Web Description Resources (POWDER): Formal Semantics
     */
    const WDRS = "http://www.w3.org/2007/05/powder-s#";

    /**
     * RDFa Default Prefix
     * @link http://www.w3.org/TR/rdfa-core/ RDFa Core 1.1
     */
    const XHV = "http://www.w3.org/1999/xhtml/vocab#";

    /**
     * XML Reserved Prefix
     * @link http://www.w3.org/TR/REC-xml-names/ Namespaces in XML 1.0
     */
    const XML = "http://www.w3.org/XML/1998/namespace";

    /**
     * XML Schema Datatypes
     * @link http://www.w3.org/TR/xmlschema-2/ XML Schema Part 2: Datatypes Second Edition
     */
    const XSD = "http://www.w3.org/2001/XMLSchema#";

/* Widely used Vocabulary prefixes based on the vocabulary usage on the Semantic Web */
    /**
     * ccREL
     * @link http://www.w3.org/Submission/2008/SUBM-ccREL-20080501/ ccREL: The Creative Commons Rights Expression Language
     */
    const CC = "http://creativecommons.org/ns#";

    /**
     * Common Tag Ontology
     * @link http://commontag.org/Specification Common Tag Specification
     */
    const CTAG = "http://commontag.org/ns#";

    /**
     * Dublin Core Metadata Terms
     * @link http://dublincore.org/documents/dcmi-terms/#H2 DCMI Metadata Terms
     */
    const DC = "http://purl.org/dc/terms/";
    const DCTERMS = self::DC;

    /**
     * Dublin Core Metadata Element Set, Version 1.1
     * @link http://purl.org/dc/elements/1.1/ Dublin Core Metadata Element Set, Version 1.1
     */
    const DC11 = "http://purl.org/dc/elements/1.1/";

    /**
     * FOAF
     * @link http://xmlns.com/foaf/spec/ FOAF Vocabulary Specification
     */
    const FOAF = "http://xmlns.com/foaf/0.1/";

    /**
     * GoodRelations Ontology
     * @link http://www.heppnetz.de/ontologies/goodrelations/v1 GoodRelations Language Reference
     */
    const GR = "http://purl.org/goodrelations/v1#";

    /**
     * iCalendar terms in RDF
     * @link http://www.w3.org/2002/12/cal/icaltzd# iCalendar terms in RDF
     */
    const ICAL = "http://www.w3.org/2002/12/cal/icaltzd#";

    /**
     * Facebook's Open Graph protocol
     * @link http://ogp.me/ Open Graph Protocol
     */
    const OG = "http://ogp.me/ns#";

    /**
     * RDF Review Vocabulary
     * @link http://vocab.org/review/terms.html RDF Review Vocabulary
     */
    const REV = "http://purl.org/stuff/rev#";

    /**
     * SIOC Core Ontology
     * @link http://www.w3.org/Submission/2007/SUBM-sioc-spec-20070612/ SIOC Core Ontology Specification
     */
    const SIOC = "http://rdfs.org/sioc/ns#";

    /**
     * Google Rich Snippets' Vocabularies
     * @link http://www.google.com/support/webmasters/bin/answer.py?answer=99170 Rich snippets (microdata, microformats, and RDFa)
     */
    const V = "http://rdf.data-vocabulary.org/";

    /**
     * vCard in RDF
     * @link http://www.w3.org/Submission/2010/SUBM-vcard-rdf-20100120/ Representing vCard Objects in RDF
     */
    const VCARD = "http://www.w3.org/2006/vcard/ns#";

    /**
     * The Schema.org vocabulary
     * @link http://schema.org/docs/full.html Full Schema.org documentation
     */
    const SCHEMA = "http://schema.org";
}
