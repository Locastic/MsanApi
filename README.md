# MsanApi
ETL library for M SAN group d.d.

Limits:

    Data                                                                            Method                                   Permission                  Limit per period
    ----                                                                            ------                                   ----------                  ----------------

    Katalog artikala -------------------------------------------------------------- GetProductsList                           Required                    5 times per day

    Cjenik artikala --------------------------------------------------------------  GetProductsPriceList                      Required                    5 times per day

    Dostupnost artikala ----------------------------------------------------------- GetProductsAvailability                   Required                    4 times per hour

    Tehničke specifikacije artikala ----------------------------------------------- GetProductsSpecification                  Required                    5 times per day

    Zaglavlja dokumenata – jedan dokument ----------------------------------------- GetDocumentsHeaders                       Required                   20 times per hour

    Stavke dokumenata – jedan dokument -------------------------------------------- GetDocumentsItems                         Required                   20 times per hour

    Zaglavlja dokumenata – više dokumenata po rasponu (broj ili period). ---------- GetDocumentsHeaders                       Required                   10 times per hour
    Max. 100 dok. koji zadovoljavaju.

    Stavke dokumenata – više dokumenata po rasponu (broj ili period) -------------- GetDocumentsItems                         Required                   10 times per hour
    Max. 100 dok. koji zadovoljavaju.



Available parameters for http requests:

    PRODUCT LIST:

        1) Products by type

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsList.aspx?ProductCode=0220448

        2) Products by code

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsList.aspx?ProductType=Procesor

        3) Entire list

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsList.aspx

    PRODUCT CATEGORIES

        1) Categories list -- MANDATORY PARAMETER -- CategoryTypeId

            https://b2b.msan.hr/B2BService/HTTP/Products/GetCategoriesList.aspx

        2) Category by type id(1 for basic categorisation)

            https://b2b.msan.hr/B2BService/HTTP/Products/GetCategoriesList?CategoryTypeId=1

    PRODUCT CATEGORISATION

        1) Products category -- MANDATORY PARAMETER -- CategoryTypeId

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsCategory.aspx

        2) Categories by category type id

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsCategory.aspx?CategoryTypeId=1

        3) Category by product code

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsCategory.aspx?ProductCode=12213

    PRODUCT BARCODES

        1) Products barcodes

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsBarcodes.aspx

        2) Product barcode by product code

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsBarcodes?ProductCode=123234


    PRODUCT PRICE LIST:

        1) By code

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsPriceList.aspx?ProductCode=0220448

        2) By type and/or promotion

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsPriceList.aspx?ProductType=Procesor&OnPromotion=true

        3) By brand

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsPriceList.aspx?Brand=Asustek

        4) Entire product price list

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsPriceList.aspx

    PRODUCT AVAILABILITY

        1) By code

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsAvailability.aspx?ProductCode=0220448

        2) Entire product availability list

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsAvailability.aspx

    PRODUCT SPECIFICATION

        1) By code

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsSpecification.aspx?ProductCode=0220448

        2) By type

            https://b2b.msan.hr/B2BService/HTTP/Products/GetProductsSpecification.aspx?ProductType=Procesor

    DOCUMENTS HEADERS

        1) List

            https://b2b.msan.hr/B2BService/HTTP/Document/GetDocumentsHeaders.aspx

        2) By date(receipt)

            https://b2b.msan.hr/B2BService/HTTP/Document/GetDocumentsHeaders.aspx?DocumentDateFrom=01.01.2008&DocumentDateTo=31.01.2008&DocumentType=RAC

        3) By document number(from-to)

            https://b2b.msan.hr/B2BService/HTTP/Document/GetDocumentsHeaders.aspx?DocumentNoFrom=1&DocumentNoTo=1000&DocumentType=PON

        4) By number and date

            https://b2b.msan.hr/B2BService/HTTP/Document/GetDocumentsHeaders.aspx?DocumentNoFrom=1&DocumentNoTo=1000&DocumentDateFrom=01.01.2008&DocumentDateTo=30.06.2008&DocumentType=OTP

        5) By document type(PON = ponuda, OTP = otpremnica, RAC = račun)

            https://b2b.msan.hr/B2BService/HTTP/Document/GetDocumentsHeaders.aspx?DocumentNoFrom=1&DocumentNoTo=1000&DocumentType=PON

    DOCUMENTS ITEMS

        1) List items

            https://b2b.msan.hr/B2BService/HTTP/Document/GetDocumentsItems.aspx

        2) Items by date and/or type

            https://b2b.msan.hr/B2BService/HTTP/Document/GetDocumentsItems.aspx?DocumentDateFrom=01.01.2008&DocumentDateTo=31.01.2008&DocumentType=RAC

        3) Items by from number to number

            https://b2b.msan.hr/B2BService/HTTP/Document/GetDocumentsItems.aspx?DocumentNoFrom=1&DocumentNoTo=1000&DocumentDateFrom=01.01.2008&DocumentDateTo=30.06.2008&DocumentType=OTP


