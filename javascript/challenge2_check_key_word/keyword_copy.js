// object
var keyWords = {
    129: "An Ninh / Bảo Vệ",
    313: "An Ninh / Bảo Vệ&nbsp;",
    158: "An Toàn Lao Động",
    643: "An ninh-Bảo vệ",
    634: "An toàn lao động",
    339: "An toàn lao động&nbsp;",
    277: "Biên dịch/Phiên dịch",
    626: "Biên phiên dịch",
    125: "Biên phiên dịch (tiếng Nhật)",
    124: "Biên phiên dịch / Thông dịch viên",
    301: "Biên phiên dịch&nbsp;",
    493: "Biên tập/ Báo chí/ Truyền hình",
    609: "Bác sĩ",
    265: "Bán hàng",
    7: "Bán hàng / Kinh doanh",
    622: "Bán hàng kỹ thuật",
    130: "Bán lẻ / Bán sỉ",
    318: "Bán lẻ / Bán sỉ&nbsp;",
    589: "Bán lẻ/Bán sỉ",
    170: "Báo chí / Biên tập viên / Xuất bản",
    371: "Báo chí / Truyền hình",
    102: "Báo chí/Biên tập viên",
    645: "Bưu chính",
    421: "Bưu chính VT",
    103: "Bưu chính viễn thông",
    332: "Bưu chính viễn thông&nbsp;",
    586: "Bảo hiểm",
    308: "Bảo hiểm&nbsp;",
    494: "Bảo hiểm/ Tư vấn bảo hiểm",
    53: "Bảo trì / Sửa chữa",
    324: "Bảo trì / Sửa chữa&nbsp;",
    635: "Bảo trì/Sửa chữa",
    470: "Bảo vệ",
    379: "Bảo vệ / Vệ sỹ",
    495: "Bảo vệ/ An ninh/ Vệ sỹ",
    93: "Bảo vệ/Vệ sĩ/An ninh",
    245: "Bất động sản",
    295: "Bất động sản&nbsp;",
    29: "CNTT - Phần cứng / Mạng",
    150: "CNTT - Phần mềm",
    424: "CNTT/Tin học",
    484: "Chuyên viên pháp lý",
    268: "Chăm sóc khách hàng",
    65: "Chăn nuôi / Thú y",
    347: "Chăn nuôi / Thú y&nbsp;",
    401: "Chế biến",
    34: "Chứng khoán",
    498: "Chứng khoán - Vàng",
    348: "Chứng khoán&nbsp;",
    662: "Chứng khoán- Vàng",
    500: "Công chức - Viên chức",
    502: "Công nghiệp",
    606: "Công nghệ cao",
    62: "Công nghệ sinh học",
    349: "Công nghệ sinh học&nbsp;",
    239: "Công nghệ thông tin",
    402: "Công nghệ thực phẩm",
    58: "Công nghệ thực phẩm / Dinh dưỡng",
    338: "Công nghệ thực phẩm / Dinh dưỡng&nbsp;",
    466: "Công nhân/ Nhân viên",
    399: "Cơ / Điện lạnh / Điện CN",
    596: "Cơ khí",
    499: "Cơ khí - Chế tạo",
    396: "Cơ khí / Chế tạo",
    302: "Cơ khí / Ô tô / Tự động hóa&nbsp;",
    47: "Cơ khí&nbsp;/ Ô tô&nbsp;/ Tự động hóa",
    184: "Cơ khí-Chế tạo",
    427: "Cơ khí/Chế tạo máy",
    267: "Cơ khí/Kĩ thuật ứng dụng",
    638: "Cấp quản lý điều hành",
    506: "Du lịch",
    323: "Du lịch&nbsp;",
    439: "Du lịch/Khách sạn",
    240: "Du lịch/Nhà hàng/Khách sạn",
    154: "Dược / Sinh học",
    602: "Dược Phẩm/Công nghệ sinh học",
    17: "Dược phẩm",
    331: "Dược phẩm&nbsp;",
    276: "Dược/Hóa chất/Sinh hóa",
    600: "Dầu khí",
    503: "Dầu khí - Hóa chất",
    405: "Dầu khí / Hóa chất",
    661: "Dầu khí-Hóa chất",
    264: "Dầu khí/Địa chất",
    91: "Dệt may",
    189: "Dệt may - Da giày",
    160: "Dệt may / Da giày",
    18: "Dệt may / Da giày / Thời trang",
    315: "Dệt may / Da giày / Thời trang&nbsp;",
    601: "Dệt may/Da giày",
    505: "Dịch vụ",
    132: "Dịch vụ khách hàng",
    305: "Dịch vụ khách hàng&nbsp;",
    374: "Dịch vụ sáng tạo",
    473: "Dọn dẹp/ Vệ sinh",
    486: "ESH (Chuyên gia sức khỏe, môi trường)",
    492: "Expats",
    510: "Freelance",
    658: "Game",
    511: "Games",
    513: "Giao nhận/ Vận chuyển/ Kho bãi",
    457: "Giao thông vận tải",
    283: "Giao thông/Vận tải/Thủy lợi/Cầu đường",
    262: "Giày da/Thuộc da",
    483: "Giám sát/ Kiểm soát chất lượng (QC/ QA)",
    411: "Giám định viên",
    512: "Giáo dục - Đào tạo",
    55: "Giáo dục / Đào tạo",
    133: "Giáo dục / Đào tạo / Thư viện",
    312: "Giáo dục / Đào tạo&nbsp;",
    614: "Giáo dục/Đào tạo",
    87: "Giáo dục/Đào tạo/Thư viện",
    42: "Giải trí",
    340: "Giải trí&nbsp;",
    118: "Giải trí/Vui chơi",
    660: "Hoá học-Sinh học",
    519: "Hoạch định - Dự án",
    636: "Hoạch định/Dự án",
    592: "Hàng cao cấp",
    588: "Hàng gia dụng",
    26: "Hàng gia dụng / Chăm sóc cá nhân",
    342: "Hàng gia dụng / Chăm sóc cá nhân&nbsp;",
    618: "Hàng hải",
    383: "Hàng hải / Tàu biển",
    663: "Hàng không",
    593: "Hàng không/Du lịch",
    587: "Hàng tiêu dùng",
    392: "Hành chánh / Văn phòng",
    623: "Hành chánh/Thư ký",
    517: "Hành chính - Văn phòng",
    31: "Hành chính / Thư ký",
    297: "Hành chính / Thư ký&nbsp;",
    419: "Hành chính/Thư ký",
    270: "Hành chính/Thư ký/Trợ lý",
    404: "Hóa / Sinh học",
    162: "Hóa chất / Sinh hóa / Thực phẩm",
    50: "Hóa học",
    518: "Hóa học - Sinh học",
    344: "Hóa học&nbsp;",
    597: "Hóa học/Hóa sinh",
    488: "IT (Mạng/ Phần mềm)",
    314: "IT - Phần cứng / Mạng Máy Tính&nbs,p;",
    629: "IT - Phần mềm",
    296: "IT - Phần mềm / Lập Trình&nbsp;",
    391: "IT phần cứng mạng",
    520: "IT phần cứng/mạng",
    389: "IT phần mềm",
    522: "In ấn - Xuất bản",
    25: "In ấn / Xuất bản",
    341: "In ấn / Xuất bản&nbsp;",
    646: "In ấn-Xuất bản",
    580: "Internet/Online Media",
    358: "KCS",
    197: "KD bất động sản",
    390: "KTV / Thiết kế đồ họa",
    617: "Kho vận",
    388: "Kho vận / Vật tư",
    252: "Kho vận/Vật tư/Thu mua",
    428: "Khoa học tự nhiên",
    51: "Khoáng sản",
    257: "Khu chế xuất/Khu công nghiệp",
    82: "Khác",
    524: "Khách sạn - Nhà hàng",
    151: "Khách sạn / Du lịch",
    180: "Khách sạn-Nhà hàng",
    1: "Kinh doanh",
    477: "Kinh doanh/ Chăm sóc - Quản lý khách hàng",
    434: "Kinh doanh/Bán hàng",
    437: "Kinh tế",
    167: "Kiến trúc",
    525: "Kiến trúc - Thiết kế nội thất",
    319: "Kiến trúc&nbsp;",
    248: "Kiến trúc/Nội thất",
    583: "Kiểm toán",
    624: "Kế toán",
    523: "Kế toán - Kiểm toán",
    136: "Kế toán / Kiểm toán",
    298: "Kế toán / Kiểm toán&nbsp;",
    425: "Kế toán/Kiểm toán",
    527: "Kỹ thuật",
    400: "Kỹ thuật CN / Quản lý CN",
    440: "Kỹ thuật ứng dụng",
    156: "Kỹ thuật ứng dụng / Cơ khí",
    412: "Lao động Phổ thông",
    531: "Lao động phổ thông",
    294: "Lao động phổ thông&nbsp;",
    377: "Luật",
    10: "Luật / Pháp lý",
    333: "Luật / Pháp lý&nbsp;",
    259: "Luật/Pháp lý",
    529: "Làm bán thời gian",
    530: "Làm đẹp/ Thể lực/ Spa",
    260: "Làm đẹp/Thể lực/Spa",
    467: "Lái xe",
    532: "Lương cao",
    482: "Lễ tân",
    619: "Marketing",
    533: "Marketing - PR",
    372: "Marketing / PR",
    446: "Marketing/Tư vấn",
    363: "May / In",
    489: "Mua sắm/ Purchasing",
    48: "Môi trường",
    403: "Môi trường / Nước / Chất thải",
    157: "Môi trường / Xử lý chất thải",
    334: "Môi trường&nbsp;",
    598: "Môi trường/Xử lý chất thải",
    398: "Mỏ / Địa chất",
    637: "Mới tốt nghiệp",
    174: "Mới tốt nghiệp / Thực tập",
    578: "Mỹ Thuật/Nghệ Thuật/Thiết Kế",
    452: "Mỹ phẩm",
    535: "Mỹ phẩm - Trang sức",
    649: "Mỹ phẩm-Trang sức",
    364: "Mỹ phẩm/ Trang sức",
    287: "Mỹ phẩm/Thời trang/Trang sức",
    40: "Mỹ thuật / Nghệ thuật / Thiết kế",
    311: "Mỹ thuật / Nghệ thuật / Thiết kế&nbsp;",
    455: "Mỹ thuật/Hội hoạ",
    657: "NV trông quán Internet",
    461: "Nghiên cứu thị trường",
    485: "Nghiên cứu và phát triển (R&amp;D)",
    539: "Nghệ thuật - Điện ảnh",
    171: "Nghệ thuật / Thiết kế / Giải trí",
    291: "Nghệ thuật/Điện ảnh",
    375: "Ngoại Ngữ",
    251: "Ngoại ngữ",
    464: "Ngoại ngữ/Biên phiên dịch",
    310: "Ngành Khác&nbsp;",
    69: "Ngành khác",
    538: "Ngành nghề khác",
    33: "Ngân hàng",
    137: "Ngân hàng / Chứng khoán",
    352: "Ngân hàng / Tín dụng",
    322: "Ngân hàng&nbsp;",
    537: "Ngân hàng/ Tài Chính",
    109: "Ngân hàng/Chứng khoán/Đầu tư",
    458: "Ngân hàng/Tài chính",
    196: "Người giúp việc",
    540: "Người giúp việc/ Phục vụ/ Tạp vụ",
    175: "Người nước ngoài",
    641: "Người nước ngoài/Việt Kiều",
    152: "Nhà hàng / Dịch vụ ăn uống",
    356: "Nhà hàng / Khách sạn",
    306: "Nhà hàng / Khách sạn&nbsp;",
    594: "Nhà hàng/Khách sạn",
    625: "Nhân sự",
    395: "Nhân sự / Lương / BHXH",
    307: "Nhân sự&nbsp;",
    479: "Nhân sự/ Công đoàn/ ER",
    181: "Nhân viên kinh doanh",
    566: "Nhân viên trông quán internet",
    543: "Nông - Lâm - Ngư nghiệp",
    426: "Nông lâm",
    360: "Nông nghiệp",
    335: "Nông nghiệp&nbsp;",
    604: "Nông nghiệp/Lâm nghiệp",
    656: "Nông-Lâm-Ngư nghiệp",
    285: "Nông/Lâm/Ngư nghiệp",
    378: "Nấu Ăn / Phục vụ / Bếp",
    44: "Nội ngoại thất",
    327: "Nội ngoại thất&nbsp;",
    168: "Nội thất / Ngoại thất",
    640: "Overseas Jobs",
    366: "PG",
    101: "PG/PB/Lễ tân",
    134: "Phi chính phủ / Phi lợi nhuận",
    613: "Phi chính phủ/Phi lợi nhuận",
    491: "Phiên dịch viên",
    496: "Phiên dịch/ Ngoại ngữ",
    545: "Pháp luật/ Pháp lý",
    627: "Pháp lý",
    127: "Pháp lý / Luật",
    92: "Phát triển thị trường",
    249: "Phục vụ/Tạp vụ/Giúp việc",
    653: "Promotion Girl (PG)",
    547: "Promotion Girl/ Boy (PG-PB)",
    359: "QA / QC",
    548: "QA-QC/ Thẩm định/ Giám định",
    631: "QA/QC",
    408: "Quan hệ / Đối Ngoại",
    113: "Quan hệ đối ngoại",
    409: "Quản lý / Điều hành",
    432: "Quản lý chất lượng",
    145: "Quản lý chất lượng (QA / QC)",
    19: "Quản lý chất lượng (QA/QC)",
    326: "Quản lý chất lượng (QA/QC)&nbsp;",
    176: "Quản lý điều hành",
    438: "Quản trị kinh doanh",
    475: "Quản đốc",
    141: "Quảng cáo / Khuyến mãi / Đối ngoại",
    41: "Quảng cáo / Đối ngoại / Truyền Thông",
    317: "Quảng cáo / Đối ngoại / Truyền Thông&nbsp;",
    435: "Quảng cáo/Khuyến mãi",
    579: "Quảng cáo/Khuyến mãi/Đối ngoại",
    241: "Quảng cáo/Marketing/PR",
    551: "Sinh viên làm thêm",
    269: "Sinh viên/Mới tốt nghiệp/Thực tập",
    552: "Startup",
    632: "Sản Xuất",
    605: "Sản phẩm công nghiệp",
    357: "Sản xuất / Vận hành",
    165: "Sản xuất / Vận hành sản xuất",
    316: "Sản xuất / Vận hành sản xuất&nbsp;",
    107: "Sản xuất/Vận hành sản xuất",
    487: "Thiết kế",
    554: "Thiết kế - Mỹ thuật",
    413: "Thiết kế mỹ thuật",
    555: "Thiết kế đồ họa - Web",
    651: "Thiết kế-Mỹ thuật",
    247: "Thiết kế/Mỹ thuật",
    441: "Thiết kế/Tạo mẫu",
    633: "Thu Mua/Vật Tư/Cung Vận",
    369: "Thu mua / Bán",
    20: "Thu mua / Vật tư",
    336: "Thu mua / Vật tư&nbsp;",
    385: "Thông dịch / Phiên dịch",
    381: "Thú y",
    558: "Thư ký - Trợ lý",
    128: "Thư ký / Hành chánh",
    393: "Thư ký / Trợ lý",
    480: "Thư ký/ Hành chính",
    54: "Thư viện",
    561: "Thương mại điện tử",
    111: "Thẩm định/Giám định/Quản lý chất lượng",
    414: "Thể Thao / Âm nhạc",
    553: "Thể dục/ Thể thao",
    120: "Thể dục/Thể thao",
    59: "Thống kê",
    407: "Thống kê / Kế hoạch",
    142: "Thời trang",
    365: "Thời trang / Giày Dép",
    444: "Thời trang/Nghệ thuật",
    280: "Thời vụ/Bán thời gian",
    639: "Thời vụ/Hợp đồng ngắn hạn",
    557: "Thủ công mỹ nghệ",
    410: "Thủ kho / Thủ qũy",
    471: "Thủ kho/ Kho vận (Logistic)",
    64: "Thủy lợi",
    57: "Thủy sản / Hải sản",
    346: "Thủy sản / Hải sản&nbsp;",
    590: "Thực phẩm &amp; Đồ uống",
    325: "Thực phẩm &amp; Đồ uống&nbsp;",
    559: "Thực phẩm - Đồ uống",
    190: "Thực phẩm-Đồ uống",
    246: "Thực phẩm/DV ăn uống",
    462: "Thực phẩm/Đồ uống",
    560: "Thực tập",
    143: "Tiếp thị",
    562: "Tiếp thị - Quảng cáo",
    4: "Tiếp thị / Marketing",
    304: "Tiếp thị / Marketing&nbsp;",
    330: "Tiếp thị online&nbsp;",
    5: "Tiếp thị trực tuyến",
    647: "Tiếp thị-Quảng cáo",
    382: "Tiếp tân / Lễ tân",
    288: "Trang thiết bị công nghiệp",
    263: "Trang thiết bị gia dụng",
    122: "Trang thiết bị văn phòng",
    450: "Trang trí nội thất",
    39: "Truyền hình / Báo chí / Biên tập",
    329: "Truyền hình / Báo chí / Biên tập&nbsp;",
    577: "Truyền hình/Truyền thông/Báo chí",
    612: "Trình dược viên",
    63: "Trắc địa / Địa Chất",
    345: "Trắc địa / Địa Chất&nbsp;",
    476: "Trợ lý giám đốc",
    138: "Tài chính / Đầu tư",
    328: "Tài chính / Đầu tư&nbsp;",
    266: "Tài chính/Kế toán/Kiểm toán",
    584: "Tài chính/Đầu tư",
    273: "Tài xế/Lái xe/Giao nhận",
    188: "Tư vấn",
    284: "Tư vấn bảo hiểm",
    309: "Tư vấn&nbsp;",
    564: "Tư vấn/ Chăm sóc khách hàng",
    373: "Tổ chức / Sự kiện",
    38: "Tổ chức sự kiện",
    563: "Tổ chức sự kiện - Quà tặng",
    343: "Tổ chức sự kiện&nbsp;",
    659: "Tổ chức sự kiện-Quà tặng",
    603: "Tự động hóa/Ô tô",
    172: "Viễn Thông",
    568: "Việc làm cấp cao",
    394: "Văn thư lưu trữ thông tin",
    380: "Vận chuyển / Giao nhận",
    14: "Vận chuyển / Giao nhận /  Kho vận",
    299: "Vận chuyển / Giao nhận / Kho&nbsp;",
    146: "Vận chuyển / Giao thông / Kho bãi",
    616: "Vận chuyển/Giao nhận",
    183: "Vận tải",
    565: "Vận tải - Lái xe/ Tài xế",
    147: "Vật tư / Mua hàng",
    644: "Vật tư-Thiết bị",
    567: "Vật tư/Thiết bị/Mua hàng",
    571: "Xuất - Nhập khẩu",
    572: "Xuất khẩu lao động",
    368: "Xuất nhập khẩu",
    148: "Xuất nhập khẩu / Ngoại thương",
    321: "Xuất nhập khẩu&nbsp;",
    281: "Xuất-Nhập khẩu/Ngoại thương",
    193: "Xây dựng",
    303: "Xây dựng&nbsp;",
    490: "Y Tế",
    610: "Y sĩ/Hộ lý",
    96: "Y tế",
    573: "Y tế - Dược",
    456: "Y tế - Dược phẩm",
    16: "Y tế / Chăm sóc sức khỏe",
    320: "Y tế / Chăm sóc sức khỏe&nbsp;",
    386: "Y tế / Dược",
    608: "Y tế/Chăm sóc sức khỏe",
    164: "Ô tô",
    544: "Ô tô - Xe máy",
    508: "Điện - Điện tử - Điện lạnh",
    397: "Điện / Điện tử",
    49: "Điện / Điện tử / Điện lạnh",
    300: "Điện / Điện tử / Điện lạnh&nbsp;",
    469: "Điện lạnh/ Nhiệt lạnh",
    599: "Điện lạnh/Nhiệt lạnh",
    361: "Điện tử viễn thông",
    191: "Điện-Điện tử",
    83: "Điện/Điện tử/Điện lạnh",
    507: "Đầu tư",
    607: "Địa chất/Khoáng sản",
    161: "Đồ Gỗ",
    24: "Đồ gỗ",
    337: "Đồ gỗ&nbsp;",
    406: "Đồ gỗ/ Nội thất"
};

