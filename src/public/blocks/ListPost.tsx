import React, { useState, useEffect } from 'react';
import { ArrowRightOutlined } from "@ant-design/icons";

const POSTS_PER_PAGE = 6;

const ListPost = ({ category }) => {
    const [posts, setPosts] = useState([]);
    const [loading, setLoading] = useState(true);
    const [currentPage, setCurrentPage] = useState(1);

    useEffect(() => {
        const fetchPosts = async () => {
            try {
                const url = `/index.php?rest_route=/datum/v1/get-posts` + (category ? `&category=${category}` : '');
                const response = await fetch(url);
                const data = await response.json();
                setPosts(data);
            } catch (error) {
                console.error('Error fetching posts:', error);
            } finally {
                setLoading(false);
            }
        };

        fetchPosts();
    }, [category]);
    console.log('Category prop:', category);

    if (loading) return <div>Loading...</div>;

    // Pagination logic
    const totalPages = Math.ceil(posts.length / POSTS_PER_PAGE);
    const startIdx = (currentPage - 1) * POSTS_PER_PAGE;
    const currentPosts = posts.slice(startIdx, startIdx + POSTS_PER_PAGE);

    return (
        <div className="container pt-[60px] lg:pt-[80px]">
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-5">
                {currentPosts.map((post) => (
                    <div key={post.id} className="border-b border-secondary">
                        <div className="flex flex-col lg:justify-between lg:py-12 justify-center lg:px-8 px-5 lg:text-[24px] text-[16px] font-[700] text-primary  bg-gradient-to-r from-secondary/20 to-primary/20 h-[140px] lg:h-[220px]">
                            <div className='text-[14px] lg:text-[16px] font-bold text-blue-600 mb-4 lg:mb-0'>{post.title}</div>
                            <div className="flex justify-start">
                                <p className="text-black text-[14px] lg:text-[16px] font-bold">
                                    {post.date}
                                </p>
                            </div>
                        </div>
                        <div className="lg:h-[333px] flex items-center justify-center">
                            {post.thumbnail ? (
                                <img 
                                    className="h-full lg:h-[333px] w-full object-cover" 
                                    src={post.thumbnail} 
                                    alt={post.title} 
                                />
                            ) : (
                                <div className="h-full w-full bg-gray-200 flex items-center justify-center">
                                    No Image
                                </div>
                            )}
                        </div>
                    </div>
                ))}
            </div>
            {/* Pagination controls */}
            {totalPages > 1 && (
                <div className="flex justify-center mt-8 space-x-2">
                    <a
                        href="#"
                        className="px-3 py-1 rounded bg-transparent border-none shadow-none outline-none hover:bg-transparent hover:shadow-none focus:outline-none flex items-center"
                        style={{ boxShadow: 'none', border: 'none' }}
                        onClick={e => {
                            e.preventDefault();
                            setCurrentPage(p => Math.max(1, p - 1));
                        }}
                        aria-disabled={currentPage === 1}
                        tabIndex={currentPage === 1 ? -1 : 0}
                    >
                        <ArrowRightOutlined
                            rotate={180}
                            style={{ fontSize: 16, color: "#2563eb",fontWeight: 'bold' }}
                        />
                    </a>
                    {[...Array(totalPages)].map((_, idx) => (
                        <a
                            key={idx}
                            href="#"
                            className={`px-1 inline-block font-bold
                                ${currentPage === idx + 1 ? 'border-b-2 border-blue-700 text-blue-700' : 'text-gray-700'}
                            `}
                            onClick={e => {
                                e.preventDefault();
                                setCurrentPage(idx + 1);
                            }}
                            aria-current={currentPage === idx + 1 ? "page" : undefined}
                        >
                            {idx + 1}
                        </a>
                    ))}
                    <a
                        href="#"
                        className="px-3 py-1 bg-transparent border-none shadow-none outline-none hover:bg-transparent hover:shadow-none focus:outline-none flex items-center"
                        style={{ boxShadow: 'none', border: 'none' }}
                        onClick={e => {
                            e.preventDefault();
                            setCurrentPage(p => Math.min(totalPages, p + 1));
                        }}
                        aria-disabled={currentPage === totalPages}
                        tabIndex={currentPage === totalPages ? -1 : 0}
                    >
                        <ArrowRightOutlined
                            style={{ fontSize: 16, color: "#2563eb", fontWeight: 'bold' }}
                        />
                    </a>
                </div>
            )}
        </div>
    );
};

export default ListPost;